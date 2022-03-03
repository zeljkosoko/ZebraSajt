<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<!--specify the character-->
		<meta charset="UTF-8">
		<!--include responsive mode-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--description-->
		<meta name="description" content="Zebracon tim nudi jedinstvena, sigurna i pouzdana rešenja u oblastima - magacinsko poslovanje, praćenje proizvodnje i print management!">
		<!--tittle-->
		<title>Kontakt stranica kompanije Zebracon!</title>
		<!--include Raleway font from google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
		<!--include jQuery and Bootstrap-->
		<script type="text/javascript" src="js/jquery-v3.1.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/animation.js"></script>
		<!--include CSS-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<!--include jQuery Validation Plugin-->
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<!--icon-->
		<link rel="icon" type="image/png" href="img/index.png">
	</head>
	<body>
		<header>
			<div class="header-background flex">
				<a href="index.html"><img src="img/logo-header.png" class="logo"></a>
				<div class="space"></div>
				<ul class="flex">
					<li class="regular-mode">Rešenja
						<ul>
							<li><a href="magacinsko-poslovanje.html">Magacinsko poslovanje</a></li>
							<li><a href="pracenje-proizvodnje.html">Praćenje proizvodnje</a></li>
							<li><a href="automatizacija.html">Automatizacija</a></li>
							<li><a href="nicelabel.html">NiceLabel softver</a></li>
						</ul>
					</li>
					<li class="regular-mode">Oprema
						<ul>
							<li><a href="barkod-stampaci.html">Bar-kod štampači</a></li>
							<li><a href="tiket-stampaci.html">Tiket štampači</a></li>
							<li><a href="linijsko-matricni-stampaci.html">Linijsko matrični štampači</a></li>
							<li><a href="rucni-terminali.html">Ručni terminali</a></li>
							<li><a href="barkod-skeneri.html">Bar-kod skeneri</a></li>
							<li><a href="masine-za-kovertiranje.html">Mašine za kovertiranje</a></li>
							<li><a href="kancelarijski-materijal.html">Kancelarijski materijal</a></li>
							<li><a href="potrosni-materijali.html">Potrošni materijali</a></li>
						</ul>
					</li>
					<li class="regular-mode">Usluge
						<ul>
							<li><a href="print-menadzment.html">Print menadžment</a></li>
							<li><a href="servis-podrska.html">Servis i podrška</a></li>
							<li><a href="usluzno-deklarisanje.html">Uslužno deklarisanje</a></li>
						</ul>
					</li>
					<li><a href="novosti.html">Novosti</a></li>
					<li class="selected-page"><a href="kontakt.php">Kontakt</a></li>
				</ul>
			</div>
			<div class="responsive-header">
				<div class="responsive-flex flex">
					<a href="index.html"><img class="icon-responsive" src="img/icon.png"></a>
					<div class="space"></div>
					<div class="responsive-menu">
						<img src="img/menu.png" class="manu-responsive">
						<ul class="main-menu-responsive">
							<li class="has-children">Rešenja
								<ul>
									<li><a href="magacinsko-poslovanje.html">Magacinsko poslovanje</a></li>
									<li><a href="pracenje-proizvodnje.html">Praćenje proizvodnje</a></li>
									<li><a href="automatizacija.html">Automatizacija</a></li>
									<li><a href="nicelabel.html">NiceLabel softver</a></li>
								</ul>
							</li>
							<li class="has-children">Oprema
								<ul>
									<li><a href="barkod-stampaci.html">Bar-kod štampači</a></li>
									<li><a href="tiket-stampaci.html">Tiket štampači</a></li>
									<li><a href="linijsko-matricni-stampaci.html">Linijsko matrični štampači</a></li>
									<li><a href="rucni-terminali.html">Ručni terminali</a></li>
									<li><a href="barkod-skeneri.html">Bar-kod skeneri</a></li>
									<li><a href="masine-za-kovertiranje.html">Mašine za kovertiranje</a></li>
									<li><a href="kancelarijski-materijal.html">Kancelarijski materijal</a></li>
									<li><a href="potrosni-materijali.html">Potrošni materijali</a></li>
								</ul>
							</li>
							<li class="has-children">Usluge
								<ul>
									<li><a href="print-menadzment.html">Print menadžment</a></li>
									<li><a href="servis-podrska.html">Servis i podrška</a></li>
									<li><a href="usluzno-deklarisanje.html">Uslužno deklarisanje</a></li>
								</ul>
							</li>
							<li><a href="novosti.html">Novosti</a></li>
							<li><a href="kontakt.php">Kontakt</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<div class="more-options">
			<ul>
				<li class="kontakt-more-options"><span><img src="img/language.png"></span>English</li>
			</ul>
		</div>
		<div class="main-image-contact">
			<iframe src="https://www.google.com/maps/d/embed?mid=1vDN_oLA6DJ3BVd__6Q8biv8sOVz86YWx"></iframe>
		</div>
		<div class="content-contact">
			<div class="contact-width flex">
				<div class="form">
					<form method="post" action="contact.php" class="contactUs" id="contactUs">
						<p class="fot">
							<label for="name" class="label">Ime :</label>
							<input type="text" name="name" placeholder="Ime..." class="input">
						</p>
						<p>
							<label for="email" class="label">Vaš e-mail :</label>
							<input type="text" name="email" placeholder="E-mail..." class="input">
						</p>
						<p>
							<label for="subject" class="label">Tema :</label>
							<input type="text" name="subject" placeholder="Tema..." class="input">
						</p>
						<p>
							<label for="comments" class="label">Poruka :</label>
							<textarea name="comments" rows="10" placeholder="Poruka..." class="input"></textarea>
						</p>
						<p class="sum">
							<label for="sum" class="label"><img src="img/kontakt/suma.png"></label>
							<input type="text" name="sum" placeholder="Suma..." class="input">
						</p>
						<p class="posalji">
							<label for="submit" class="label"></label>
							<input name="submit" type="submit" value="Pošalji">
						</p>
						<p class="stranica">
							<input type="text" name="stranica" value="kontakt.php" class="input">
						</p>
					</form>
				</div>
				<div class="about">
					<h4>Zebracon d.o.o.</h4><br>
					<span class="line"></span>
					<p>Bulevar Arsenija Čarnojevića 166</p>
					<p>11070 Novi Beograd</p><br>
					<p>PIB: 107206757</p>
					<p>Matični broj: 20755733</p><br>
					<p>+381 (0)11 40 44 900</p>
					<p>+381 (0)11 40 44 901</p><br>
					<p>e-mail: <span>info@zebracon.rs</span></p><br><br>
					<a href="img/kontakt/podaci-o-kompaniji.pdf" download="Podaci o kompaniji"><img src="img/kontakt/pdf.png"></a><br>
					<p class="pdf">Podaci o kompaniji</p>
					<!--<a href="img/kontakt/politika-kvaliteta.pdf" download="Politika kvaliteta"><img src="img/kontakt/pdf.png"></a><br>
					<p class="pdf">Naša Politika kvaliteta</p><br><br>-->
				</div>
			</div>
		</div>
		<footer>
			<div class="footer-information">
				<div class="footer-information-width flex">
					<div>
						<h6>Informatizacija</h6>
						<span></span>
						<a href="pracenje-proizvodnje.html">Upravljanje proizvodnjom</a>
						<a href="magacinsko-poslovanje.html">Upravljanje skladištem</a>
					</div>
					<div>
						<h6>Automatizacija</h6>
						<span></span>
						<a href="automatizacija.html">Automatsko deklarisanje</a>
						<a href="nicelabel.html">NiceLabel rešenje</a>
						<a href="print-menadzment.html">Print menadžment</a>
					</div>
					<div>
						<h6>Oprema</h6>
						<span></span>
						<a href="masine-za-kovertiranje.html">Mašine za kovertiranje</a>
						<a href="tiket-stampaci.html">Tiket štampači</a>
						<a href="linijsko-matricni-stampaci.html">Linijsko matrični štampači</a>
					</div>
					<div>
						<h6>Auto-ID</h6>
						<span></span>
						<a href="barkod-stampaci.html">Bar-kod štampači</a>
						<a href="barkod-skeneri.html">Bar-kod skeneri</a>
						<a href="rucni-terminali.html">Ručni terminali</a>
					</div>
					<div>
						<h6>Kontakt</h6>
						<span></span>
						<p>Bulevar Arsenija Čarnojevića 166</p>
						<p>11070 Novi Beograd</p>
						<p>T: +381 (0)11 40 44 900</p>
						<p>E: info@zebracon.rs</p>
					</div>
				</div>
			</div>
			<div class="background"></div>
			<div class="footer-copyright">
				<p>Copyright © <script>document.write(new Date().getFullYear())</script>, Zebracon d.o.o.</p>
			</div>
		</footer>
		<div id="loader-wrapper">
			<div id="loader"></div>
			<div class="loader-section section-left"></div>
   			<div class="loader-section section-right"></div>
		</div>
		<?php if($_SESSION["sent_message"] == "success"): ?>
			<div class="message all-message">
				<div>
					<img src="img/kontakt/exit-sucsess.png" class="img-click">
					<img src="img/kontakt/sucsess.png" class="img">
					<p>Hvala, Vaša poruka je prosleđena!</p>
				</div>
			</div>
			<?php $_SESSION["sent_message"] = null; ?>
		<?php elseif($_SESSION["sent_message"] == "error"): ?>
			<div class="error-message all-message">
				<div>
					<img src="img/kontakt/exit-error.png" class="img-click">
					<img src="img/kontakt/error.png" class="img">
					<p>Došlo je do greške, Vaša poruka nije prosleđena!</p>
				</div>
			</div>
			<?php $_SESSION["sent_message"] = null; ?>
		<?php endif; ?>
	</body>
</html>