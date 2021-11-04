<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Anketa | Nagrada</title>
</head>
<body>
	<header>
		<nav id="navbar">
			<div class="container">
				<h1 class="logo">DUNP</h1>
				<ul>

					<li><a class="current" href="prikaznagrada.php">Prikaz nagrada</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<section id="testimonials" class="py-3">
		<div class="container">
		<div class="testimonial bg-primary">
<?php
ob_start();
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "Uloguj se";
	header('location: login.php');
}


$query="SELECT * FROM `nagrada`";
			 $result=$db->query($query);
			 echo '<hr>';
			 echo "<table class='minimalistBlack'>";
			 echo "<thead><tr><th>Nagrada</th><th>Korisnicko ime</th><th>Anketa</th><th>Vreme</th></tr></thead>";
			 while($row=$result->fetch_array())
			 {
			 echo "<tbody><tr>";
			 echo "<td>".$row['naziv']."</td>";
			 echo "<td>".$row['username']."</td>";
			 echo "<td>".$row['anketa']."</td>";
			 echo "<td>".$row['vreme']."</td>";

			 echo "</tr></tbody>";
			 }
			 echo "</table>";
			 ?>
		 </div>
	 </div>
		 </section>
			 <footer id="main-footer">
		     <p>Studentska anketa 2019.</p>
		   </footer>
		 </body>
		 </html>
