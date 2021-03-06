<!DOCTYPE html>
<head>
	<title>Daewoo Matiz</title>
	<meta charset="utf-8">
	<meta name="description" content="Fanklub Matiza">
	<meta name="keywords" content="Matiz, Deawoo, Auto, Samochody, Fanklub">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>



<body class="index">


	<div class="title"> <h1 id="anchor"><b>DAEWOO MATIZ</b></h1> </div>
	<div class="navBar">
		<nav>
			<ul>
				<li><a href="index.html#anchor" class="link">Strona główna</a></li>
				<li><a href="wersje.html" class="link">Wersje matiza</a></li>
				<li><a href="historia.html" class="link">Historia marki</a></li>
			</ul>
		</nav>
		<br><br><br>
	</div>


<hr class="sectionDivider"/>

		<form id="stylesDiv" method="post" action="ciastka.php">

			<select id="fontType" name="fontType">
				<option>Bebas</option>
				<option>Default</option>
			</select>

			<select id="bgColor" name="bgColor">
				<option>White</option>
				<option>Gray</option>
			</select>

			<select id="fontColor" name="fontColor">
				<option>Black</option>
				<option>Magenta</option>
			</select>

			<input type="submit" id="setStyle" value="USTAW"></button>


		</form>

		<?php
		if(isset($_COOKIE["ft"]) || isset($_COOKIE["bgc"]) || isset($_COOKIE["fc"]))
		{	
		$styleBlock = sprintf('
			<style type="text/css">
				body {
				font-family:%s;
				background-color:%s;
				color:%s;
				}
			</style>
		', $_COOKIE["ft"], $_COOKIE["bgc"], $_COOKIE["fc"]);
		echo $styleBlock;
		echo $_COOKIE["bgc"];
		}
  		?> 


	<section class="mainSection">
	
	<h2>O Matizie</h2>
		<section class="imageSection">
			<h3>Piękny matiz</h3>
			<a href="http://www.daewoo.com">
				<div id="crossfade">
					<img src="content/wallpaper.jpg" alt="Daewoo Matiz" class="wallpaper" />
				</div>
			</a>
		</section>

		<section class="articleSection">
		<h2>Daewoo Matiz to najszybszy samochód</h2>
			<article class="article">
				<h2>Opis</h2>
				<p>Daewoo <mark>Matiz</mark> to jedno z najważniejszych dzieł współczesnej techniki...</p>
				
				<aside>
					<p>Jeśli nim nie jeździłeś, to tego nie zrozumiesz!</p>
				</aside>

			</article>
		</section>
	</section>
	
	<div class="container" id="newsletter">

		<h2 id="newsletterHeader"> Zapisz się do naszego newslettera! </h2>
		
		<form id="newsletterForm" class="form" autocomplete="on" action="form.php" method="post">
			Imię:  <input type="text" name="firstName" autofocus placeholder="Jan"><br>
			Nazwisko:  <input type="text" name="lastName" required placeholder="Nowak"><br>
			Miesiąc urodzin: <input list="months" name="birthMonth"><br>
			<datalist id="months">
			<select>
				<option label="Styczeń"> Styczeń  	</option>
				<option value="Luty"> Luty			</option>
				<option value="Marzec"> Marzec		</option>
				<option value="Kwiecień">Kwiecień 	</option>
				<option value="Maj ">Maj			</option>
				<option value="Czerwiec">Czerwiec 	</option>
				<option value="Lipiec"> Lipiec		</option>
				<option value="Sierpień">Sierpień 	</option>
				<option value="Wrzesień">Wrzesień 	</option>
				<option value="Październik">Październik</option>
				<option value="Listopad">Listopad 	</option>
				<option value="Grudzień">Grudzień 	</option>
			</select>
			</datalist>
			Adres email: <input type="email" name="email" required placeholder="alice@wonder.land"><br>
			Telefon: <input type="tel" name="telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="123-456-789"><br>

			Jakiego typu informacje chcesz otrzymywać? <br>
			<input type="checkbox" name="newsType" value="zloty"> Zloty<br>
			<input type="checkbox" name="newsType" value="newModel"> Nowe modele matiza<br>

			Jesteś: <br>
			<input type="radio" name="gender" value="female"> Kobietą<br>
			<input type="radio" name="gender" value="male">Mężczyzną<br>

			Jakim typem matiza jeździsz?<br>
			<select name="model">
				<optgroup label="FSO">
					<option>0.8</option>
					<option>1.0</option>
				</optgroup>
				<optgroup label="Daewoo">
					<option>0.8</option>
					<option>1.0</option>
				</optgroup>
				<optgroup label="Chevrolet">
					<option>1.0</option>
					<option>1.2</option>
				</optgroup>
			</select><br>


			<textarea id="textarea" name="message" placeholder="Zostaw nam wiadomość"></textarea><br>

			<input type="submit" value="Wyślij"> <input type="reset" value="Resetuj formularz" disabled>
		</form>
			
		<a href="form.html" id="carFormLink">Opowiedz nam coś więcej o swoim samochodzie</a>
		<h2> Możesz też wysłać nam email z zapytaniem!</h2>

		<form action="mailto:fanklub@matiz.com">
  		  <input type="submit" value="EMAIL" />
		</form>

		<details>
				<summary id="regulamin">Regulamin</summary>
				<p>Twoje dane są chronione ustawą o ochronie danych osobowych
				<script>
					document.writeln(Date());
				</script>
				</p>	
		</details>

		
			<div class="handheldOnly">
				UŻYWASZ TELEFONU
			</div>
		
	</div>

	<div id="dynamicDiv">


	</div>

		<div class="footer">
				Copyright
		</div>





	

		

		<script type="text/javascript" src="dom3.js"></script>
</body>