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

<div id="stylesDiv">

			<select id="fontType">
				<option>Bebas</option>
				<option>Default</option>
			</select>

			<select id="bgColor">
				<option>White</option>
				<option>Gray</option>
			</select>

			<select id="fontColor">
				<option>Black</option>
				<option>Magenta</option>
			</select>

			<button id="setStyle">USTAW</button>


		</div>
	
	<div class="container" id="newsletter">

	<p>
	<h1>Witaj w naszym fanklubie  
		<?php 
			$firstName = $_POST["firstName"];
				if($firstName=='') {
					die("Podaj swoje imię!");
				}
				else {
					print($firstName);
				}
		?>
	</h1>
	Twoje IP to:
		<?php
			$ip = $_SERVER['REMOTE_ADDR'];
			print($ip);
			?>
			<br>

	Twój Matiz 
		<?php
			$matiz = $_POST["model"];
			print($matiz);
			?>
			 to świetny samochód. Zadzwonimy pod numer 
			 <?php 
				$telefon=$_POST["telephone"];
					if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/",$telefon)) {
						echo preg_replace("/-/"," ",$telefon);
					}
				?> 
				aby doradzić Ci jak o niego dbać.
	</p>

		
	</div>

	<div id="dynamicDiv">


	</div>

		<div class="footer">
				Copyright
		</div>





	

		

		<script type="text/javascript" src="dom3.js"></script>
</body>