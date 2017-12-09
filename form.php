<?php
	
	 $users = array('password1' => 'user1',
		'user2' => 'password2',
		'user3' => 'password3',
		'login' => 'password');

	session_start(); 
	if (isset($_POST['submit'])) {
		if (empty($_POST['login']) || empty($_POST['password'])) {
				echo "Debug: zle dane";
		}
		else
		{
		

			$login=$_POST['login'];
			$password=$_POST['password'];
			
			if (validateUser($login, $password, $users)) { 
					$_SESSION['login_user']=$login; 
					setcookie("session", $login . " " . $password, time() + 10);
					header("location: pageForRegisteredUsers.php"); 
			} 	
		}
	}

	if(isset($_COOKIE["session"])){
		 
	}


	function validateUser($username, $pswrd, $usersArray){

		

			if(array_search($username, $usersArray) == $pswrd) return True;
			else return False;
		
		return False;
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

	<form name="loginForm" action="" method="post">
		Login: <input type="text" id="login" name="login" placeholder="login"><br>
		Hasło: <input type="password" id="password" name="password" placeholder="hasło"><br>

		<input type="submit" name="submit" value="Zaloguj">
	</form>

	


	<h1>Nie masz konta? Zarejestruj się.</h1>

	<form name="registerForm" action="" method="post">
		Login: <input type="text" id="login" name="login" placeholder="login"><br>
		Hasło: <input type="password" id="password" name="password" placeholder="hasło"><br>
		Twój matiz: <input type="text" id="matiz" name="matiz" placeholder="life"></br>

	<input type="submit" name="register" value="Zarejestruj się">
	</form>


	


		<div class="footer">
				Copyright
		</div>

		<script type="text/javascript" src="dom3.js"></script>
</body>