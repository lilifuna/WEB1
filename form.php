<?php
	
	
		session_start();

				


	if (isset($_POST['submit'])) {
		if (empty($_POST['loginField']) || empty($_POST['password'])) {
				echo "Debug: zle dane";
		}
		else
		{
			$userLogin=$_POST['loginField'];
			$password=$_POST['password'];
			
			if (validateUser($userLogin, $password)) { 
					$_SESSION['login_user']=$userLogin; 
					setcookie("session", $userLogin , time() + 10);
					header("location: pageForRegisteredUsers.php"); 
			} 	
		}
	}

	if(isset($_COOKIE["session"])){
		 echo ("Twoj login to:". $_COOKIE["session"] );
	}


	function validateUser($username, $password){

		$db = new mysqli("localhost","root","","matizdb");

		if (mysqli_connect_errno()) {
    		printf("Wystąpił błąd: ", mysqli_connect_error());
    		exit;
		}	
				

		$query = mysqli_query($db,"SELECT * FROM users WHERE login='$username'");

		while($result = @mysqli_fetch_array($query)){
			if($result["password"] == $password) {
				return true;
			}
		}
		return false;
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
				<li><a href="form.php" class="link">Strona główna</a></li>
				<li><a href="pageForRegisteredUsers.php" class="link">Wersje matiza</a></li>
				<li><a href="historia.html" class="link">Historia marki</a></li>
			</ul>
		</nav>
		<br><br><br>
	</div>


<hr class="sectionDivider"/>

	<form name="loginForm" action="" method="post">
		Login: <input type="text" id="loginn" name="loginField" placeholder="login"><br>
		Hasło: <input type="password" id="password" name="password" placeholder="hasło"><br>

		<input type="submit" name="submit" value="Zaloguj">
	</form>

	


	<h1>Nie masz konta? Zarejestruj się.</h1>

	<form name="registerForm" action="" method="post">
		Login: <input type="text" id="newLogin" name="newLogin" placeholder="login"><br>
		Hasło: <input type="password" id="newPassword" name="newPassword" placeholder="hasło"><br>
		Twój matiz: <input type="text" id="matiz" name="matiz" placeholder="life"></br>

	<input type="submit" name="register" value="Zarejestruj się">
	</form>

	<?php
		if(isset($_POST["register"])){
			if (empty($_POST['newLogin']) || empty($_POST['newPassword'])) {

			}
			else{

				$db = new mysqli("localhost","root","","matizdb");

				if (mysqli_connect_errno()) {
    				printf("Wystąpił błąd: ", mysqli_connect_error());
    				exit;
				}

				$login = $_POST['newLogin'];
				$password = $_POST['newPassword'];
				$matiz = $_POST['matiz'];
				$stmt = $db->prepare("INSERT INTO users (login, password, matiz) 
							VALUES (?,?,?) ON DUPLICATE KEY 
							UPDATE login = ?, password = ?, matiz = ?");

				//mysqli_query($db, "INSERT INTO users (login, password, matiz) 
							//VALUES ('$login', '$password', '$matiz') DUPLICATE KEY 
							//UPDATE login = '$login', password = '$password', matiz = '$matiz'");

				$stmt->bind_param('ssssss',$login,$password,$matiz,$login,$password,$matiz);
				$stmt->execute();
				
				
				mysqli_close($db);
			}
		}

	?>
	


		<div class="footer">
				Copyright
		</div>

		<script type="text/javascript" src="dom3.js"></script>
</body>