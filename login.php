<?php
  ob_start();
  include('functions.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Anketa | Welcome</title>
</head>
<body>
  <header>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo"><a href="login.php">DUNP</a></h1>
        <ul>
          <li><a class="current" href="#login">Login</a></li>
          <li><a href="register.php">Registruj se</a></li>

        </ul>
      </div>
    </nav>

    <div id="showcase">
      <div class="container">
        <div class="showcase-content">
          <h1><span class="text-primary">Dobro</span> došao korisniče</h1>
          <p class="lead">Hvala Vam što ste zainteresovani da popunite našu anketu.</p>
          <a class="btn btn-light" href="#login">Uloguj se</a>
        </div>
      </div>
    </div>
  </header>

  <section id="home-info" class="bg-dark">
    <div class="info-img"></div>
    <div id="login" class="info-content">
      <h2><span class="text-primary">Login</span> forma</h2>
      <form method="post" action="login.php">

        			<label>Username</label>
        			<input type="text" name="username" ><br>
        			<label>Password </label>
        			<input type="password" name="password">
              <p>Izaberi jednu od ponuđenih anketa i stisni dugme Uloguj se</p>
		          <p>Nisi registrovan? <a href="register.php">Registruj se</a></p>




  </div>
  </section>

  <section id="features">
    <div class="box bg-light">
      <i class="fas fa-car fa-3x"></i>
      <h3><input type="radio" name="anketa" value="Pametni transport">Pametni transport</h3>
      <p>Svrha ankete je da se prikaze kako ispitanici razmisljaju o pametnom transportu.</p>
    </div>
    <div class="box bg-primary">
        <i class="fas fa-heartbeat fa-3x"></i>
        <h3><input type="radio" name="anketa" value="Pametno zdrastvo">Pametno zdrastvo</h3>
        <p>Svrha ankete je da se prikaze kako ispitanici razmisljaju o pametnom zdrastvu.</p>
    </div>
    <div class="box bg-light">
        <i class="fas fa-tree fa-3x"></i>
        <h3><input type="radio" name="anketa" value="Zaštita životne sredine">Zaštita životne sredine</h3>
        <p>Svrha ankete je da se prikaze kako ispitanici razmisljaju o zaštiti životne sredine.</p>
    </div>
  </section>

  <div class="clr"></div>
  <div class="input-group">

    <button type="submit" class="btn btn-dark" name="login_btn">Uloguj se</button>
  </div>

  </form>
  <?php
      error_reporting(0);
      $_SESSION['ank']=$_POST['anketa'];
      $radio=$_SESSION['ank'];
      $username=$_SESSION['user']['username'];
   ?>
  <footer id="main-footer">
    <p>Studentska anketa 2019.</p>
  </footer>
</body>
</html>
