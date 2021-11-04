<?php
ob_start();
include('functions.php');
if (!isLoggedIn()) {
	
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Welcome to the most extraordinary hotel in Boston Massachusetts">
  <meta name="keywords" content="hotel,boston hotel,new england hotel">
  <link rel="stylesheet" href="css/style.css">
  <title>Anketa | About</title>
</head>
<body>
  <header>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo"><a href="index.html">DUNP</a></h1>
        <ul>

          <li><a class="current" href="login.php">Login</a></li>
          <li><a href="register.php">Registracija</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="clr"></div>

  <section id="testimonials" class="py-3">
    <div class="container">
     
      <div class="testimonial bg-primary">
        <?php

                $radio=$_SESSION['ank'];
                $username=$_SESSION['user']['username'];
                $query="SELECT prva, druga, treca FROM `users` WHERE username='$username'";
                $result=$db->query($query);

                   while($row=$result->fetch_array())
                     {
                       $_SESSION['jedan']=$row['prva'];
                       $_SESSION['dva']=$row['druga'];
                       $_SESSION['tri']=$row['treca'];
                     }
                $anketa1= $_SESSION['jedan'];
                $anketa2=$_SESSION['dva'];
                $anketa3= $_SESSION['tri'];

            switch ($radio) {
              case 'Pametni transport':
                if ($anketa1=='0') {
                  $query= "UPDATE users SET prva='1' WHERE username='$username'";
                  mysqli_query($db,$query) or die(mysqli_connect_error());

                  header('location: zadatak1.php');
                  break;
                }else {
                  header('location: prikaznagrada.php');
                }
                case 'Pametno zdrastvo':
                if ($anketa2=='0') {
                  $query= "UPDATE users SET druga='1' WHERE username='$username'";
                  mysqli_query($db,$query) or die(mysqli_connect_error());

                  header('location: zadatak1.php');
                  break;
                }else {
                  header('location: prikaznagrada.php');
                }
                  case 'Zaštita životne sredine':
                  if ($anketa3=='0') {
                    $query= "UPDATE users SET treca='1' WHERE username='$username'";
                    mysqli_query($db,$query) or die(mysqli_connect_error());

                    header('location: zadatak1.php');
                    break;
                  }else {
                    header('location: prikaznagrada.php');
                  }
              default:

                break;
            }

        ?>

      </div>

      
    </div>
  </section>

  <footer id="main-footer">
    <p>DUNP 2019.</p>
  </footer>
</body>
</html>
