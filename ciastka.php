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

<?php
		$styleBlock = sprintf('
			<style type="text/css">
				body {
				font-family:%s;
				background-color:%s;
				color:%s;
				}
			</style>
		', $_POST["fontType"], $_POST["bgColor"], $_POST["fontColor"]);
		echo $styleBlock;
  ?> 

<p>
	<h1> Twój styl: </h1>
<p>Typ czcionki: 
<?php 
	$ft=$_POST["fontType"];
	setcookie("fontType",$ft);
	echo $ft;
?>
</p>
<p>Tło: 
<?php 
	$bgc=$_POST["bgColor"];
	setcookie("bgColor",$bgc);
	echo $bgc;
?>
</p>
<p>Kolor czcionki: 
<?php 
	$fc=$_POST["fontColor"];
	setcookie("fontColor",$fc);
	echo $fc;
?>
</p>
</p>


		<a href="index.php">POWRÓT</a>


	

		<div class="footer">
				Copyright
		</div>





	

		

		<script type="text/javascript" src="dom3.js"></script>
</body>