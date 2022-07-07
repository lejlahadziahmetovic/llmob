<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LLmob</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap&subset=latin-ext" rel="stylesheet">   
</head>
<body>
	<header>
		<div>
			<div class="logo">
				<a href="index.php"><img class="w-20" src="slike/logo.png"></a>
			</div>
			<nav>
				<ul class="linkovi">
					<li><a  href="indexlogin.php"><i class="fas fa-home"></i> Pocetna</a></li>
					<li class="has-children">
						<a class="active" href="proizvodilogin.php"><i class="fas fa-tools"></i> Proizvodi</a>
						<ul class="dropdown">
							<li><a href="mobitelilogin.php"><i class="fas fa-toolbox"></i> Mobiteli</a></li>
							<li><a class="active" href="oprema.php"><i class="fas fa-hammer"></i> Oprema</a></li>
						</ul>
					</li>
					<li><a href="korpa.php"><i class="far fa-envelope"></i> Korpa</a></li>
					<li><a href="projekatlogin.php"><i class="far fa-envelope"></i> Izrada projekta</a></li>
                    <li><a href="logout.php"><button class="cart-btn">Odjava</button></a></li>
                    
                    <?php 
					
					if($_SESSION['username']=='Admin') echo " <li><a href='dashboard.php'><button class='cart-btn'>Dashboard</button></a></li> ";
					
					?>
				</ul>
			</nav>
		</div>
        <br><br><br><br><br><br>
    </header>
    <body class="body">
        <div class="pozad1">
            <br><br>
            <h1>Oprema</h1>
            <div class="grid-container">
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/apple-airpods-pro-white-1.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Apple AirPods Pro</h1>
                        <p class="price">430 KM</p>
                        <p style="font-size: 16px;"">Apple AirPods Pro Bijeli</p>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/ulefone-2-pin-charger-5v-1a-black.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Ulefone Charger</h1>
                        <p class="price">52 KM</p>
                        <p style="font-size: 16px;">Ulefone 2 Pin Charger (5V,1A) Crni</p>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/apple-airpods-max-silver.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Apple AirPods Max</h1>
                        <p class="price">1000 KM</p>
                        <p style="font-size: 16px;">Apple AirPods Max Srebrni</p>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/apple-airtag-1-pack-white.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Apple AirTag</h1>
                        <p class="price">120 KM</p>
                        <p style="font-size: 16px;">Apple AirTag 1 Pack Bijeli</p>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/anker-soundcore-liberty-air-2-true-wireless-earbuds-black.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Anker Soundcore Liberty Air</h1>
                        <p class="price">230 KM</p>
                        <p style="font-size: 16px;"">Anker Soundcore Liberty Air 2 True Wireless Earbuds Crni</p>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/xiaomi-mi-light-detection-sensor-white.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Xiaomi Mi Light Detection Sensor</h1>
                        <p class="price">62 KM</p>
                        <p style="font-size: 16px;"">Xiaomi Mi Light Detection Sensor Bijeli</p>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/bose-quietcomfort-45-noise-cancelling-headphones-white.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Bose QuietComfort Headphones</h1>
                        <p class="price">604 KM</p>
                        <p style="font-size: 16px;"">Bose QuietComfort 45 Noise Cancelling Headphones Bijeli</p>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/huawei-freebuds-pro-black-1.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Huawei FreeBuds Pro</h1><br>
                        <p class="price">250 KM</p>
                        <p style="font-size: 16px;"">Huawei FreeBuds Pro Crni</p>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
              </div>
              <div id="id01" class="modal">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <form class="modal-content animate" action="/action_page.php">           
                    <div style="margin-top: 20px; margin-left: 20px; margin-right: 20px;">
                        <label for="username"><b>Username</b></label>
                    </div>
                    <div style=" margin-left: 20px; margin-right: 20px;">
                        <input type="text" placeholder="Upisite vas username" name="uname" required>
                    </div>
                    <div style=" margin-left: 20px; margin-right: 20px;">
                        <label for="psw"><b>Lozinka</b></label>
                    </div>  
                    <div style=" margin-left: 20px; margin-right: 20px;">
                        <input type="password" placeholder="Upisite vasu lozinku" name="psw" required>
                    </div>    
                    <div style=" margin: 20px;;">
                        <button type="submit">Prijava</button>
                        <label>
                        <input type="checkbox" checked="checked" name="remember"> Zapamti me
                        </label>
                        <label class="new"><a href="registracija.php">Izradite novi racun</a></label>
                    </div>
                
                
                    </div>
                </form>
            </div>
        </div>
    </body>
    <footer class="footer">
		<div class="inner-wrapper">
			<h1>KONTAKTIRAJTE NAS</h1>
			<p><b>Telefon:</b> 000 000 000</p>
			<p><b>Email:</b> <a href="mailto:llmob@gmail.com">llmob@gmail.com</a></p>
			<p class="mb-0"><b>Adresa:</b> Zmaja od Bosne bb</p>
		</div>
	</footer>