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
				<a href="index.html"><img class="w-20" src="slike/logo.png"></a>
			</div>
			<nav>
				<ul class="linkovi">
					<li><a  href="indexlogin.php"><i class="fas fa-home"></i> Pocetna</a></li>
					<li class="has-children">
						<a class="active" href="proizvodilogin.php"><i class="fas fa-tools"></i> Proizvodi</a>
						<ul class="dropdown">
							<li><a href="mobitelilogin.php"><i class="fas fa-toolbox"></i> Mobiteli</a></li>
							<li><a href="opremalogin.php"><i class="fas fa-hammer"></i> Oprema</a></li>
						</ul>
					</li>
					
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
            <h1>Mobiteli</h1>
            <div class="grid-container">
                <div class="grid-item">
                        <div class="card">
                            <img src="slike/apple-iphone-13-pro-max-5g-dual-esim-1tb-6gb-ram-gold.jpg"  style="width:50%">
                            <h1 style="font-size: 20px;">Apple iPhone 13 Pro</h1>
                            <p class="price">3300 KM</p>
                            <p style="font-size: 16px;"">Apple iPhone 13 Pro Max 5G Dual eSIM 1TB 6GB RAM Zlatni</p>
                            <button class="btn2" onclick="document.getElementById('id02').style.display='block'">Prikazi detaljne specifikacije</button>
                            <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                        </div>
                </div>
                <div class="grid-item">
                        <div  class="card">
                            <img src="slike/samsung-galaxy-s22-ultra-5g-dual-sim-512gb-12gb-ram-sm-s908b-ds-phantom-green.jpg"  style="width:50%">
                            <h1 style="font-size: 20px;">Samsung Galaxy S22</h1>
                            <p class="price">2900 KM</p>
                            <p style="font-size: 16px;"">Samsung Galaxy S22 5G Dual SIM 512GB 12GB RAM Zeleni</p>
                            <button class="btn2" onclick="document.getElementById('id03').style.display='block'">Prikazi detaljne specifikacije</button>
                            <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                        </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/apple-iphone-11-dual-esim-64gb-4gb-ram-black.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Apple iPhone 11</h1>
                        <p class="price">1100 KM</p>
                        <p style="font-size: 16px;"">Apple iPhone 11 Dual eSIM 64GB 4GB RAM Crni</p>
                        <button class="btn2" onclick="document.getElementById('id04').style.display='block'">Prikazi detaljne specifikacije</button>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/samsung-galaxy-s20-fe-5g-dual-sim-128gb-6gb-ram-sm-g781b-cloud-navy-blue.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Samsung Galaxy S20</h1>
                        <p class="price">890 KM</p>
                        <p style="font-size: 16px;"">Samsung Galaxy S20 5G Dual SIM 128GB 6GB Navy Plavi</p>
                        <button class="btn2" onclick="document.getElementById('id05').style.display='block'">Prikazi detaljne specifikacije</button>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/apple-iphone-12-pro-5g-dual-esim-128gb-6gb-ram-pacific-blue.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Apple iPhone 12 Pro</h1>
                        <p class="price">1980 KM</p>
                        <p style="font-size: 16px;"">Apple iPhone 12 Pro 5G Dual eSIM 128GB 6GB RAM Pacific Plavi</p>
                        <button class="btn2" onclick="document.getElementById('id06').style.display='block'">Prikazi detaljne specifikacije</button>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/samsung-galaxy-s21-fe-5g-dual-sim-128gb-6gb-ram-sm-g990-graphite-grey.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Samsung Galaxy S21</h1>
                        <p class="price">1200 KM</p>
                        <p style="font-size: 16px;"">Samsung Galaxy S21 FE 5G Dual SIM 128GB 6GB Sivi</p>
                        <button class="btn2" onclick="document.getElementById('id07').style.display='block'">Prikazi detaljne specifikacije</button>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/samsung-galaxy-a51-dual-sim-128gb-4gb-ram-sm-a515f-ds-black.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Samsung Galaxy A51</h1>
                        <p class="price">730 KM</p>
                        <p style="font-size: 16px;"">Samsung Galaxy A51 Dual SIM 128GB 4GB RAM Crni</p>
                        <button class="btn2" onclick="document.getElementById('id08').style.display='block'">Prikazi detaljne specifikacije</button>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/huawei-honor-50-lite-dual-sim-128gb-6gb-ram-blue.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Huawei Honor 50 Lite</h1>
                        <p class="price">420 KM</p>
                        <p style="font-size: 16px;"">Huawei Honor 50 Lite Dual SIM 128GB 6GB RAM Plavi</p>
                        <button class="btn2" onclick="document.getElementById('id09').style.display='block'">Prikazi detaljne specifikacije</button>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/apple-iphone-se-2020-dual-esim-64gb-3gb-ram-white.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Apple iPhone SE</h1>
                        <p class="price">860 KM</p>
                        <p style="font-size: 16px;"">Apple iPhone SE (2020) Dual eSIM 64GB 3GB RAM Bijeli</p>
                        <button class="btn2" onclick="document.getElementById('id10').style.display='block'">Prikazi detaljne specifikacije</button>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/samsung-galaxy-a22-5g-dual-sim-64gb-4gb-ram-grey.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Samsung Galaxy A22</h1>
                        <p class="price">420 KM</p>
                        <p style="font-size: 16px;"">Samsung Galaxy A22 5G Dual SIM 64GB 4GB RAM Sivi</p>
                        <button class="btn2" onclick="document.getElementById('id11').style.display='block'">Prikazi detaljne specifikacije</button>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/xiaomi-11t-pro-5g-dual-sim-256gb-8gb-ram-grey.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Xiaomi 11T Pro</h1>
                        <p class="price">990 KM</p>
                        <p style="font-size: 16px;"">Xiaomi 11T Pro 5G Dual SIM 256GB 8GB RAM Sivi/Crni</p>
                        <button class="btn2" onclick="document.getElementById('id12').style.display='block'">Prikazi detaljne specifikacije</button>
                        <p class="hide"><button class="btn1">Dodaj u korpu</button></p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card">
                        <img src="slike/google-pixel-6-pro-5g-dual-esim-128gb-12gb-ram-black.jpg"  style="width:50%">
                        <h1 style="font-size: 20px;">Google Pixel 6 Pro</h1>
                        <p class="price">1650 KM</p>
                        <p style="font-size: 16px;"">Google Pixel 6 Pro 5G Dual eSIM 128GB 12GB RAM Crni</p>
                        <button class="btn2" onclick="document.getElementById('id13').style.display='block'">Prikazi detaljne specifikacije</button>
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
                    <div style=" margin: 20px;">
                        <button type="submit">Prijava</button>
                        <label>
                        <input type="checkbox" checked="checked" name="remember"> Zapamti me
                        </label>
                        <label class="new"><a href="registracija.php">Izradite novi racun</a></label>
                    </div>
                </form>
                </div>
                
                    <div id="id02" class="modal1">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/apple 13 pro max.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>Apple Iphone 13 Pro Max</h1>
                                        <p>Apple iPhone 13 Pro Max 5G Dual eSIM 1TB 6GB RAM</p>
                                        <p><b>Tehnologija: </b>GSM / CDMA / HSPA / EVDO / LTE / 5G</p>
                                        <p><b>Izrada: </b>Staklo sprijeda (Gorilla Glass), staklo straga (Gorilla Glass), okvir od nehrđajućeg čelika</p>
                                        <p><b>SIM: </b>Dual SIM (Nano-SIM, eSIM, dvostruko čekanje)</p>
                                        <p><b>Veličina: </b>6, 7 inča, 109, 8 cm2 (~ 87, 4% omjera zaslona i tijela)</p>
                                        <p><b>OS: </b>iOS 15</p>
                                        <p><b>Interna memorija: </b>1TB 6GB RAM -a</p>
                                        <p><b>Baterija: </b>Do 28 sati (multimedija)</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>3300 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id03" class="modal1">
                        <span onclick="document.getElementById('id03').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/samsungs22.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>SAMSUNG GALAXY S22</h1>
                                        <p>Samsung Galaxy S22 5G Dual SIM 512GB 12GB RAM Zeleni</p>
                                        <p><b>Tehnologija: </b>GSM / CDMA / HSPA / EVDO / LTE / 5G</p>
                                        <p><b>Izrada: </b>Staklena prednja strana (Gorilla Glass Victus), staklena stražnja strana (Gorilla Glass Victus), aluminijski okvir</p>
                                        <p><b>SIM: </b>Dual SIM (2 Nano-SIM + eSIM, dual stand-by)</p>
                                        <p><b>Veličina: </b>6, 8 inča, 114, 7 cm2</p>
                                        <p><b>OS: </b>Android 12, One UI 4.1</p>
                                        <p><b>Interna memorija: </b>512GB 12GB RAM</p>
                                        <p><b>Baterija: </b>Brzo punjenje 45W, USB Power Delivery 3.0, brzo Qi/PMA bežično punjenje 15W, Reverzno bežično punjenje 4, 5W</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>2900 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id04" class="modal1">
                        <span onclick="document.getElementById('id04').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/iphone11.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>APPLE IPHONE 11</h1>
                                        <p>Apple iPhone 11 Dual eSIM 128GB 4GB RAM Crni</p>
                                        <p><b>Tehnologija: </b>GSM / CDMA / HSPA / EVDO / LTE / 5G</p>
                                        <p><b>Izrada: </b>Prednje / stražnje staklo, aluminijski okvir (serija 7000)</p>
                                        <p><b>SIM: </b>Jedna SIM (Nano-SIM i / ili elektronička SIM kartica) ili Dual SIM (Nano-SIM, dual stand-by) za Kinu</p>
                                        <p><b>Veličina: </b>6, 1 inča, 90, 3 cm2 (~ 79, 0% omjera zaslona prema tijelu)</p>
                                        <p><b>OS: </b>iOS 13, nadograditi na iOS 13.1</p>
                                        <p><b>Interna memorija: </b>128 GB, 4 GB RAM-a</p>
                                        <p><b>Baterija: </b>Do 17 h (multimedija)</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>1100 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id05" class="modal1">
                        <span onclick="document.getElementById('id05').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/gal-2.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>SAMSUNG GALAXY S20</h1>
                                        <p>Samsung Galaxy S20 FE 5G Dual SIM 128GB 6GB RAM SM-G781B Cloud Navy Plavi</p>
                                        <p><b>Tehnologija: </b>GSM / CDMA / HSPA / EVDO / LTE / 5G</p>
                                        <p><b>Izrada: </b>Staklo sprijeda, plastika straga, aluminijski okvir</p>
                                        <p><b>SIM: </b>Hybrid Dual SIM (Nano-SIM, dvostruka stand-by)</p>
                                        <p"><b>Veličina: </b>6, 5 inča, 101, 0 cm2 (~ 84, 8% omjera zaslona i tijela)</p>
                                        <p><b>OS: </b>Android 10, jedan UI 2.5</p>
                                        <p><b>Interna memorija: </b>128 GB, 6 GB RAM</p>
                                        <p><b>Baterija: </b>Brzo punjenje 25WBrzo bežično punjenje 15WReverzno bežično punjenje 4, 5WUSB Power Delivery 3.0</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>890 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id06" class="modal1">
                        <span onclick="document.getElementById('id06').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/gal-1.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>APPLE IPHONE 12 PRO</h1>
                                        <p>Apple iPhone 12 Pro 5G Dual eSIM 128GB 6GB RAM Pacific Plavi</p>
                                        <p><b>Tehnologija: </b>GSM / CDMA / HSPA / EVDO / LTE / 5G</p>
                                        <p><b>Izrada: </b>Staklo sprijeda (Gorilla Glass), staklo straga (Gorilla Glass), okvir od nehrđajućeg čelika</p>
                                        <p><b>SIM: </b>Pojedinačna SIM (Nano-SIM i / ili eSIM)</p>
                                        <p><b>Veličina: </b>6, 1 inča, 90, 2 cm2 (~ 86, 0% omjera zaslona i tijela)</p>
                                        <p><b>OS: </b>iOS 14.1</p>
                                        <p><b>Interna memorija: </b>128 GB, 6 GB RAM</p>
                                        <p><b>Baterija: </b>Do 17 h (multimedija)</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>1980 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id07" class="modal1">
                        <span onclick="document.getElementById('id07').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/samsungs21.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>SAMSUNG GALAXY S21</h1>
                                        <p>Samsung Galaxy S21 FE 5G Dual SIM 128GB 6GB Sivi</p>
                                        <p><b>Tehnologija: </b>GSM / CDMA / HSPA / EVDO / LTE / 5G</p>
                                        <p><b>Izrada: </b>Staklo naprijed (Gorilla Glass Victus), stražnja strana od plastike, aluminijski okvir</p>
                                        <p><b>SIM: </b>Dual SIM (Nano-SIM i / ili eSIM, dvostruko čekanje)</p>
                                        <p><b>Veličina: </b>6, 2 inča, 94, 1 cm2 (~ 87, 2% omjera zaslona i tijela)</p>
                                        <p><b>OS: </b>Android 11, jedno korisničko sučelje 3.1</p>
                                        <p><b>Interna memorija: </b>128 GB, 8 GB RAM</p>
                                        <p><b>Baterija: </b>Brzo punjenje 25W, USB napajanje 3.0, brzo Qi / PMA bežično punjenje 15W, bežično punjenje obrnuto 4, 5W</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>1200 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id08" class="modal1">
                        <span onclick="document.getElementById('id08').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/samsunga51.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>SAMSUNG GALAXY A51</h1>
                                        <p>Samsung Galaxy A51 Dual SIM 128GB 4GB RAM Crni</p>
                                        <p><b>Tehnologija: </b>GSM / HSPA / LTE</p>
                                        <p><b>Izrada: </b>Prednja stakla (Gorilla Glass 3), stražnja plastika, okvir od plastike</p>
                                        <p><b>SIM: </b>Dual SIM (nano-SIM, dual stand-by)</p>
                                        <p><b>Veličina: </b>6, 5 inča, 102, 0 cm2 (~ 87, 4% omjer zaslona i tijela)</p>
                                        <p><b>OS: </b>Android 10.0; Jedno korisničko sučelje 2</p>
                                        <p><b>Interna memorija: </b>128 GB, 4 GB RAM-a</p>
                                        <p><b>Baterija: </b>Brzo punjenje baterije (15 W); Razgovor: Do 32 h (3G)</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>730 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id09" class="modal1">
                        <span onclick="document.getElementById('id09').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/honor50.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>HUAWEI HONOR 50 LITE</h1>
                                        <p>Huawei Honor 50 Lite Dual SIM 128GB 6GB RAM Plavi</p>
                                        <p><b>Tehnologija: </b>GSM / HSPA / LTE</p>
                                        <p><b>SIM: </b>Dual SIM (nano-SIM, dual stand-by)</p>
                                        <p><b>Veličina: </b>6, 67 inča, 108, 1 cm2 (~89, 5% omjer zaslona i tijela)</p>
                                        <p><b>OS: </b>Android 11, Magic UI 4.2, usluge Google Play</p>
                                        <p><b>Interna memorija: </b>128GB 6GB RAM, 128GB 8GB RAM</p>
                                        <p><b>Baterija: </b>Brzo punjenje 66W, 40% za 10 min (oglašeno)</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>420 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id10" class="modal1">
                        <span onclick="document.getElementById('id10').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/iphonese.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>APPLE IPHONE SE DUAL ESIM</h1>
                                        <p>Apple iPhone SE (2020) Dual eSIM 64GB 3GB RAM Bijeli</p>
                                        <p><b>Tehnologija: </b>GSM / CDMA / HSPA / EVDO / LTE</p>
                                        <p><b>Izrada: </b>Staklo sprijeda, staklo straga, aluminijski okvir</p>
                                        <p><b>SIM: </b>Nano-SIM i / ili eSIM</p>
                                        <p><b>Veličina: </b>60, 9 cm2, 4, 7 inča (~ 65, 4% odnos zaslona i tijela)</p>
                                        <p><b>OS: </b>iOS 13</p>
                                        <p><b>Interna memorija: </b>64 GB, 3 GB RAM</p>
                                        <p><b>Baterija: </b>Brzo punjenje 18W, 50% za 30 min (oglašava se) Qi bežično punjenje</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span >860 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id11" class="modal1">
                        <span onclick="document.getElementById('id11').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/samsunga22.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>SAMSUNG GALAXY A22</h1>
                                        <p>Samsung Galaxy A22 5G Dual SIM 64GB 4GB RAM Sivi</p>
                                        <p><b>Tehnologija: </b>GSM / HSPA / LTE / 5G</p>
                                        <p><b>Izrada: </b>Staklo sprijeda, plastični okvir, plastika straga</p>
                                        <p><b>SIM: </b>Dual SIM (nano-SIM, dual stand-by)</p>
                                        <p><b>Veličina: </b>6, 6 inča, 105, 2 cm2 (~ 82, 3% omjera zaslona i tijela)</p>
                                        <p><b>OS: </b>Android 10.0; Jedno korisničko sučelje 2</p>
                                        <p><b>Interna memorija: </b>64 GB, 4 GB RAM</p>
                                        <p><b>Baterija: </b>Brzo punjenje 15W</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>420 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id12" class="modal1">
                        <span onclick="document.getElementById('id12').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/xiaomi11t.webp">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>XIAOMI 11T PRO DUAL SIM</h1>
                                        <p>Xiaomi 11T Pro 5G Dual SIM 256GB 8GB RAM Sivi/Crni</p>
                                        <p><b>Tehnologija: </b>GSM / HSPA / LTE / 5G</p>
                                        <p><b>Izrada: </b>Staklena prednja strana (Gorilla Glass Victus), aluminijski okvir, staklena stražnja strana</p>
                                        <p><b>SIM: </b>Dual SIM (nano-SIM, dual stand-by)</p>
                                        <p><b>Veličina: </b>6, 67 inča, 107, 4 cm2 (~ 85, 1% omjera zaslona prema tijelu)</p>
                                        <p id="os"><b>OS: </b>Android 11, MIUI 12.5</p>
                                        <p><b>Interna memorija: </b>256 GB, 8 GB RAM-a</p>
                                        <p><b>Baterija: </b>Brzo punjenje 67 W, 100% u 36 minuta (oglašeno)</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>990 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div id="id13" class="modal1">
                        <span onclick="document.getElementById('id13').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <div class="modal-content1 animate" class="proiz">
                            <main class="containerproduct">
                                <div class="left-column">
                                <img src="slike/google6.jpg">
                                </div>              
                                <div class="right-column">              
                                    <div class="product-description">
                                        <span>mobiteli</span>
                                        <h1>GOOGLE PIXEL 6 PRO</h1>
                                        <p>Google Pixel 6 Pro 5G Dual eSIM 128GB 12GB RAM Crni</p>
                                        <p><b>Tehnologija: </b>GSM / CDMA / HSPA / EVDO / LTE / 5G</p>
                                        <p><b>Izrada: </b>Staklena prednja strana (Gorilla Glass Victus), staklena stražnja strana (Gorilla Glass Victus), aluminijski okvir</p>
                                        <p><b>SIM: </b>Nano-SIM i / ili eSIM</p>
                                        <p><b>Veličina: </b>6, 71 inča, 110, 5 cm2 (~88, 8% omjer zaslona i tijela)</p>
                                        <p><b>OS: </b>Android 12</p>
                                        <p><b>Interna memorija: </b>128GB 12GB RAM</p>
                                        <p><b>Baterija: </b>Brzo punjenje 30W, 50% u 30 min (oglašeno), Brzo bežično punjenje 23W, Reverzno bežično punjenje, USB Power Delivery 3.0</p>                    
                                    </div>
                                    <div class="product-price">
                                        <span>1650 KM</span>
                                        <a href="korpa.php" class="cart-btn">Dodaj u korpu</a><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </main>
                        </div>
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
    