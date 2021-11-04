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
      <h2 class="l-heading">Nagradjeni ste sa:</h2>
      <div class="testimonial bg-primary">

        <i class="fa fa-trophy fa-3x" ></i>
        <?php
        ob_start();
        include('functions.php');
        $radio=$_SESSION['ank'];
        $username=$_SESSION['user']['username'];


        $datum = date("Y-m-d H:i:s");

         switch ($radio) {
           case 'Pametni transport':
             $nagrada = rand(1,2);
             if ($nagrada===1) {
               $ime = "osvojili ste besplatno jednodnednevno parkiranje u gradu";
               echo"osvojili ste besplatno jednodnednevno parkiranje u gradu";
               $query="INSERT INTO nagrada (`naziv`, `username`, `anketa`, `vreme`) VALUES ('$ime', '$username','$radio', '$datum')";
                mysqli_query($db,$query) or die(mysqli_connect_error());
                header('Refresh: 3; URL=prikaznagrada.php');exit;
             }else {
               echo "osvojili ste jednodnevna putarina na pristupnom autoputu.";
               $ime = "osvojili ste jednodnevna putarina na pristupnom autoputu.";
               $query="INSERT INTO nagrada (`naziv`, `username`, `anketa`, `vreme`) VALUES ('$ime', '$username','$radio', '$datum')";
               mysqli_query($db,$query) or die(mysqli_connect_error());
               header('Refresh: 3; URL=prikaznagrada.php');exit;
             }
             break;
             case 'Pametno zdrastvo':
             $nagrada = rand(1,3);
             if ($nagrada===1) {
               $ime = "osvojili ste besplatan EKG";
               echo"osvojili ste besplatan EKG";
               $query="INSERT INTO nagrada (`naziv`, `username`, `anketa`, `vreme`) VALUES ('$ime', '$username','$radio', '$datum')";
                mysqli_query($db,$query) or die(mysqli_connect_error());
                header('Refresh: 3; URL=prikaznagrada.php');exit;
             }else if ($nagrada=='2')  {
               echo "osvojili ste besplatni merač krvnog pritiska.";
               $ime = "osvojili ste besplatni merač krvnog pritiska.";
               $query="INSERT INTO nagrada (`naziv`, `username`, `anketa`, `vreme`) VALUES ('$ime', '$username','$radio', '$datum')";
               mysqli_query($db,$query) or die(mysqli_connect_error());
                header('Refresh: 3; URL=prikaznagrada.php');exit;
             }
             else {
               echo "osvojili ste besplatan eho abdomena.";
               $ime = "osvojili ste besplatan eho abdomena.";
               $query="INSERT INTO nagrada (`naziv`, `username`, `anketa`, `vreme`) VALUES ('$ime', '$username','$radio', '$datum')";
               mysqli_query($db,$query) or die(mysqli_connect_error());
               header('Refresh: 3; URL=prikaznagrada.php');exit;
             }
               break;
               case 'Zaštita životne sredine':
               $nagrada = rand(1,3);
               if ($nagrada===1) {
                 $ime = "osvojili ste besplatan jednodnevni ulaz na bazen";
                 echo"osvojili ste besplatan jednodnevni ulaz na bazen";
                 $query="INSERT INTO nagrada (`naziv`, `username`, `anketa`, `vreme`) VALUES ('$ime', '$username','$radio', '$datum')";
                  mysqli_query($db,$query) or die(mysqli_connect_error());
                  header('Refresh: 3; URL=prikaznagrada.php');exit;
               }else if ($nagrada=='2')  {
                 echo "osvojili ste besplatan izlet na obližnje izletište.";
                 $ime = "osvojili ste besplatan izlet na obližnje izletište.";
                 $query="INSERT INTO nagrada (`naziv`, `username`, `anketa`, `vreme`) VALUES ('$ime', '$username','$radio', '$datum')";
                 mysqli_query($db,$query) or die(mysqli_connect_error());
                 header('Refresh: 3; URL=prikaznagrada.php');exit;
               }
               else {
                 echo "osvojili ste besplatan jedodnedni ulaz u zoološki vrt.";
                 $ime = "osvojili ste besplatan jedodnedni ulaz u zoološki vrt.";
                 $query="INSERT INTO nagrada (`naziv`, `username`, `anketa`, `vreme`) VALUES ('$ime', '$username','$radio', '$datum')";
                 mysqli_query($db,$query) or die(mysqli_connect_error());
                 header('Refresh: 3; URL=prikaznagrada.php');exit;
               }
                 break;
           default:

             break;
         }
         ?>


      </div>


    </div>
  </section>

  <footer id="main-footer">
    <p>Studentska anketa 2019.</p>
  </footer>
</body>
</html>
