<!DOCTYPE html>
<html>
<head>
	<title> Galerie </title>
	<!-- Meta-->
	<meta charset="utf-8" name="keywords" content="Nail,Spa,Tatoo,Wimpeln Verlängerung" 
	http-equiv="refresh">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
	<!-- CSS stylesheet-->
	<link rel="stylesheet" href="css/galerie.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/elements.css">
	<!--Favicon-->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- Ion icon-->
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
	<!--HEADER-->
	<header>
		<div class="item_group">
			<!--Logo-->
			<a id="logo" href="./index.html">
				<img src="ImgCover/logo2.gif">
			</a>
			<!-- Navbar-->
			<div id="navbar">
				<!-- Close icon -->
				<div id="close_icon">
					<span class="iconify" data-icon="ion:close" data-width="40px" data-height="40px"></span>
				</div>
				<!-- Home-->
				<a id="home" class="nav_item" href="./index.html" > Home </a>
				<!-- Price list-->
				<a id="cost" class="nav_item" href="./preisliste.html"> Preisliste </a>
				<!-- Contact -->
				<a id="contact" class="nav_item" href="./kontakt.html"> Kontakt </a>
				<!-- Galery -->
				<a id="gallery" class="nav_item  active_item" href="./galerie.php"> Galerie </a>
				<!--Gift-->
				<a id="gift" class="nav_item" href="./gutschein.html"> Gutscheine </a>
			</div>
			<!--Menu icon-->
			<div id="menu_icon">
				<span id="ruby_name"> RUBY Nails & Beauty </span>
				<span class="iconify" data-icon="charm:menu-hamburger" data-width="40px" data-height="40px"></span>

			</div>
			<!--Image-->
			<div class="banner_text">
				<img id="banner_img" src="ImgCover/cover3.gif">
				<div id="welcome">
					<div> Willkommen </div>
					<div> RUBY Nails & Beauty </div>
					<a id="termin" href="http://wa.link/2rbxff" target="_blank" rel="noopener"> Termin buchen </a>
				</div>
			</div>
			<!--Rabatt-->
			<div id="rabatt">
				<div class="text1"><span> 30% RABATT auf Permanent Make up </span></div>
				<div class="text2"><span> 30% RABATT auf Fußpflege </span></div>
				<div class="text3"><span> 10% RABATT für Schülerinnen</span></div>
				<div class="text4"><span> Wir geben für ALLE GELNÄGEL 7 Tage GARANTIE </span></div>
			</div>	
		</div>
	</header>
	<!--MAIN-->
	<main>
		<!--Image gallery-->
		<div class="img_gallery">
			<?php
				$dir = __DIR__  . '\img-gallery'; // dir: directory-returns an instance of the Directory class
				$files = scandir($dir); // scandir: returns an array of files

				array_splice($files, 0, 2); 
				// removes selected elements from an array ( . in position 0 & .. in position 1 ) of Array $files
				
				//	count(): Returns the number of elements in the array
				for($x = 0; $x < count($files); $x++){
					echo '
						<a class="thumbnail" href="img-gallery/' . $files[$x] .'">
							<img class="photo" onclick="openImage" src="img-gallery/' . $files[$x] .'" alt="">
						</a>
						'; // . $files . glue Value ($files) and String (<a...a>) together
				}
			?>
		</div>
		<!-- Button gallery-->
		<div class="button_gallery">
			<!--Facebook-->
			<button class="button">
				<a class="button_social" target="_blank" rel="noopener" 
				href="http://www.facebook.com/profile.php?id=100063787341246">
				<span class="iconify icon_social" data-icon="entypo-social:facebook" data-inline="false"></span>
					Facebook
				</a>
			</button>
			<!--Instagram-->
			<button class="button">
				<a class="button_social" target="_blank" rel="noopener" 
				href="http://www.instagram.com/rubynailsandbeautyhamburg/">
					<span class="iconify icon_social" data-icon="ion:logo-instagram" data-inline="false"></span>
					Instagram
				</a>
			</button>
		</div>
	</main>
	<!--FOOTER-->
	<footer>
		<div class="info">
			<!--Quick links-->
			<div id="quicklinks">
				<h3> Quick links </h3>
				<li>
					<a class="q_link" href="./index.html"> Home </a>
				</li>
				<li>
					<a class="q_link" href="./preisliste.html"> Preisliste </a>
				</li>
				<li>
					<a class="q_link" href="./kontakt.html"> Kontakt </a>
				</li>
				<li>
					<a class="q_link" href="./galerie.php"> Galerie </a>
				</li>
				<li>
					<a class="q_link" href="./gutschein.html"> Gutscheine </a>
				</li>
				<li>
					<a class="q_link" href="./datenschutz.html"> Datenschutz </a>
				</li>
				<li>
					<a class="q_link" href="./impressum.html"> Impressum </a>
				</li>
			</div>
			<!--Öffnungzeiten-->
			<div class="time">
				<h3> Öffnungzeiten</h3>
				<li> Montag-Freitag </li>
				<li> 10:00-19:00 </li>
				<br>
				<li> Samstag </li>
				<li> 10:00-18:00 </li>
			</div>
			<!--Social links-->
			<div>
				<h3> Kontaktieren Sie uns </h3>
				<p>
					<b> Tel: </b> 
					040 20960676
				</p>
				<!--Whatsapp-->
				<a class="social_link" target="_blank" rel="noopener" href="http://wa.link/2rbxff">
					<span class="iconify icon_social" data-icon="ion:logo-whatsapp" data-inline="false"></span>
				</a>
				<!--Facebook-->
				<a class="social_link" target="_blank" rel="noopener" href="https://www.facebook.com/profile.php?id=100063787341246">
					<span class="iconify icon_social" data-icon="entypo-social:facebook" data-inline="false"></span>
				</a>
				<!--Instagram-->
				<a class="social_link" target="_blank" rel="noopener" href="http://www.instagram.com/rubynailsandbeautyhamburg/">
					<span class="iconify icon_social" data-icon="ion:logo-instagram" data-inline="false"></span>
				</a>
				<!--Map-->
				<a id="map" target="_blank" rel="noopener" href="https://goo.gl/maps/4eEDVKuVLwSGFkmQ8"> 
					<span class="iconify icon_social" data-icon="ion:location-outline" data-inline="false"></span>
				</a>
			</div>
			<!--Unsere Adresse-->
			<div id="address">
				<h3> Unsere Adresse </h3>
				<span>
					Ernst-Mittelbach-Ring 57 22455 Hamburg
				</span>
			</div>
		</div>
		<!--Chat icon pop-up-->
		<div>
			<a class="chat" target="_blank" rel="noopener" href="http://wa.link/2rbxff">
				<div class="hallo"> Moin </div> 
				<div class="large_circle"></div>
				<div class="small_circle"></div>
				<div class="chat_icon">
					<span class="iconify" data-icon="fluent:person-chat-16-regular" data-inline="false"
					data-width="80px" data-height="80px"></span>
				</div>
			</a>
		</div>
		<div class="copyright">
			© 2021 Ruby Nails and Beauty. Alle Rechte vorbehalten.
		</div>
	</footer>
</body>
	<!--Javascript-->
	<script src="navBar.js"></script>
</html>