<?php

    session_start();

    $url = "http://www.zebracon.rs/";
    $receiver = "info@zebracon.rs";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = "Poruka sa sajta: ".$_POST['subject'];
        $comments = $_POST['comments'];
        $sum = $_POST['sum'];

        if($name == "" || $email == "" || $subject == "" || $comments == "" || $sum != "5") {
            $_SESSION['sent_message'] = "error";
            header('Location: '.$url.'kontakt.php');
            exit;
        }

        $message = "Poruku poslao: ".$name. "\n";
        $message .= "Email: ".$email. "\n";
        $message .= "Sadržaj poruke: \n";
        $message .= $comments;

        $headers = "From: ".$receiver."\r\n";
        $headers = $headers. "Content-Type: text/plain; charset=UTF-8";
        mail($receiver, $subject, $message, $headers);

        if($_POST['stranica'] == "kontakt.php") {
            $_SESSION['sent_message'] = "success";
        }
    }

    header('Location: '.$url.$_POST['stranica']);
    exit;

?>