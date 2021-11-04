<?php
ob_start();
include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Anketa | Registracija</title>
</head>
<body>
  <header>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo"><a href="login.php">DUNP</a></h1>
        <ul>
          <li><a  href="login.php">Login</a></li>
          <li><a class="current" href="register.php">Registruj se</a></li>

        </ul>
      </div>
    </nav>
  </header>

  <section id="contact-form" class="py-3">
    <div class="container">
      <h1 class="l-heading"><span class="text-primary">Registruj</span> se!</h1>
      <p>Popunite polja ispod da bi ste se registrovali.</p>
      <form method="post" action="register.php">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="form-group">
          <label>Ime</label>
          <input type="text" name="ime">
        </div>
        <div class="form-group">
          <label>Prezime</label>
      		<input type="text" name="prezime">
        </div>
        <div class="form-group">
          <label>Indeks</label>
      		<input type="text" name="indeks">
        </div>
        <div class="form-group">
          <label>Email</label>
      		<input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
          <label>Password</label>
      		<input type="password" name="password_1">
        </div>
        <div class="form-group">
          <label>Confirm password</label>
      		<input type="password" name="password_2">
        </div>
        <button type="submit" class="btn btn-dark" name="register_btn">Registruj se</button>

    	<p>Uloguj se ako imas nalog <a href="login.php">Login</a></p>

      </form>
    </div>
  </section>



  <footer id="main-footer">
    <p>Studentska anketa 2019.</p>
  </footer>
</body>
</html>
