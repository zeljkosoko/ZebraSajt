
/* functions */

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function displayContent1(){
  var content1 = document.querySelector('.dropdown-content1');
  if(content1.style.display === "block"){
    content1.style.display = "none";
  } else {
    content1.style.display = "block";
  }
}
function displayContent2(){
  var content2 = document.querySelector('.dropdown-content2');
  if(content2.style.display === "block"){
    content2.style.display = "none";
  } else {
    content2.style.display = "block";
  }
}
function displayContent3(){
  var content3 = document.querySelector('.dropdown-content3');
  if(content3.style.display === "block"){
    content3.style.display = "none";
  } else {
    content3.style.display = "block";
  }
}