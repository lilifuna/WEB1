<?php
		session_start();

		$db = new mysqli("localhost","root","","matizdb");

		if (mysqli_connect_errno()) {
    		printf("Wystąpił błąd: ", mysqli_connect_error());
    		exit;
		}		

?>


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

	
	<h2>Użytkownicy i ich Matizy</h2>
	
	<?php
			
			$sql = $db->query("SELECT * FROM users");
			$liczba_rekordow = $sql->num_rows; // odpowiednik mysqli_num_rows
				echo '<p>Liczba rekordów tabeli: '.$liczba_rekordow.'</p>';

			if ($liczba_rekordow > 0) {
				for ($i=0;$i<=$liczba_rekordow;$i++) {
					$wynik = $sql->fetch_assoc(); 
							// fetch_assoc - zwraca tablicę asocjacyjną pobranych wierszy, lub FALSE jeżeli nie ma więcej wyników
							// no i w "pętli" (for) wyświetlamy kolejne wyniki
						echo $wynik["login"]." ".$wynik["matiz"]."<br />";
				}
			}

				$sql->free(); // zwalniamy pamięć
				$db->close(); // zamykamy połączenie z bazą	
		
		}
	?>



		<script type="text/javascript" src="dom3.js"></script>
</body>