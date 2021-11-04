<?php
ob_start();
include('functions.php');
error_reporting(0);
if (!isLoggedIn()) {
	$_SESSION['msg'] = "Uloguj se";
	header('location: login.php');
}
 ?>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Anketa | Pametni transport</title>
</head>
<body>
	<header>
		<nav id="navbar">
			<div class="container">
				<h1 class="logo">DUNP</h1>
				<ul>
					<li><a  href="prikaznagrada.php">Prikaz nagrada</a></li>
					<li><a class="current" href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<section>
	<div class="testimonial bg-primary">
		<?php
		if(isset($_POST['submit']))
		{
		$checkbox1=$_POST['cekiraniodgovor'];
		$chk="";
		foreach($checkbox1 as $chk1)
		   {
		      $chk .= $chk1.",";
		   }

			$username=$_SESSION['user']['username'];
			$date=date('d.m.y h:i:s');
				$in_ch=mysqli_query($db,"INSERT INTO tabela1 (username, cekiraniodgovor, vreme) values ('$username','$chk','$date')");
		}


		$naziv = $_POST['naziv'];
		if($_POST['submit'])
		{
		  $date=date('d.m.y h:i:s');
			$username=$_SESSION['user']['username'];
		 		$sql = "INSERT INTO radioodgovor (username,naziv,vreme) values('$username','$naziv','$date')";
		 		mysqli_query($db, $sql) or die(mysqli_connect_error());

		}

		if(isset($_POST['submit']))
		{
			$textareaValue = trim($_POST['content']);
				$date=date('d.m.y h:i:s');
				$username=$_SESSION['user']['username'];
			$sql = "INSERT INTO textareaodgovor (username,sadrzaj, vreme) VALUES ('$username','$textareaValue','$date')";
			$rs = mysqli_query($db, $sql);
			$affectedRows = mysqli_affected_rows($db);
		}

		if(isset($_REQUEST["submit"]))
		{
			$vrednost=$_REQUEST["country"];
			$date=date('d.m.y h:i:s');
			$username=$_SESSION['user']['username'];

		  	$sql = "INSERT INTO padajucimeni (username, vrednost, vreme) VALUES ('$username','$vrednost', '$date')";
		  	$rs = mysqli_query($db, $sql);

		}
			if($_POST['submit'])
			{
				$name = $_POST['name'];
			  $date=date('d.m.y h:i:s');
				$username=$_SESSION['user']['username'];
			 		$sql = "INSERT INTO tekst (username, name,vreme) values('$username','$name','$date')";
			 		mysqli_query($db, $sql) or die(mysqli_connect_error());
					echo "Uspesno sacuvano. ";
					echo " Klikni ovde za ";?><a href="nagrada.php">Nagradu</a>
			<?php
			}
		?>
<?php

								if($_SESSION['ank']=="Pametni transport"){
									include 'pitanja11.php';
								}
								elseif ($_SESSION['ank']=="Pametno zdrastvo") {
												include 'pitanja21.php';
								}else {
												include 'pitanja31.php';
								}
 ?>






<footer id="main-footer">
	<p>Studentska anketa 2019.</p>
</footer>
</div>
</section>
</body>
</html>
