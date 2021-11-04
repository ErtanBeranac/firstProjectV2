<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" type="text/css" href="style.css">
</head>



<?php
ob_start();
include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "Uloguj se";
	header('location:login.php');
}

$query="SELECT * FROM `users` WHERE user_type='user'";
      $result=$db->query($query);
      echo '<hr>';
      echo "<table border=0>";
      echo "<tr><th>Username</th><th>Ime</th><th>Prezime</th><th>Broj indeksa</th><th>Email</th><th>Tip naloga</th></tr>";
      while($row=$result->fetch_array())
      {
      echo "<tr>";
      echo "<td>".$row['username']."</td>";
      echo "<td>".$row['ime']."</td>";
      echo "<td>".$row['prezime']."</td>";
      echo "<td>".$row['indeks']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['user_type']."</td>";

      echo "</tr>";
      }
      echo "</table>";
      echo "<br>";

      $query="SELECT * FROM `users` INNER JOIN `nagrada` ON users.username= nagrada.username ";
            $result=$db->query($query);
            echo '<hr>';
            echo "<table border=0>";
            echo "<tr><th>Username</th><th>Ime</th><th>Prezime</th><th>Broj indeksa</th><th>Email</th><th>Tip naloga</th><th>Naziv nagrade</th><th>Naziv ankete</th><th>Vreme</th></tr>";
            while($row=$result->fetch_array())
            {
            echo "<tr>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['ime']."</td>";
            echo "<td>".$row['prezime']."</td>";
            echo "<td>".$row['indeks']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['user_type']."</td>";
            echo "<td>".$row['naziv']."</td>";
     			  echo "<td>".$row['anketa']."</td>";
     			  echo "<td>".$row['vreme']."</td>";

            echo "</tr>";
            }
            echo "</table>";
            echo "<br>";


            $query="SELECT * FROM `users`
            INNER JOIN `padajucimeni` ON users.username= padajucimeni.username
            INNER JOIN `radioodgovor` ON users.username= radioodgovor.username
            INNER JOIN `tabela1`      ON users.username= tabela1.username
            INNER JOIN `tekst`      ON users.username= tekst.username
            INNER JOIN `textareaodgovor`      ON users.username= textareaodgovor.username";


                  $result=$db->query($query);
                  echo '<hr>';
                  echo "<table border=0>";
                  echo "<tr><th>Username</th><th>Ime</th><th>Prezime</th><th>Broj indeksa</th><th>Email</th><th>Tip naloga</th><th>Odgovor padajuci meni</th><th>Odgovor radio dugmic</th><th>odgovor Checkbox</th><th>Odgovor Text</th><th>Odgovor Textarea</th><th>Vreme</th></tr>";
                  while($row=$result->fetch_array())
                  {
                  echo "<tr>";
                  echo "<td>".$row['username']."</td>";
                  echo "<td>".$row['ime']."</td>";
                  echo "<td>".$row['prezime']."</td>";
                  echo "<td>".$row['indeks']."</td>";
                  echo "<td>".$row['email']."</td>";
                  echo "<td>".$row['user_type']."</td>";
                  echo "<td>".$row['vrednost']."</td>";
           			  echo "<td>".$row['naziv']."</td>";
           			  echo "<td>".$row['cekiraniodgovor']."</td>";
                  echo "<td>".$row['name']."</td>";
                  echo "<td>".$row['sadrzaj']."</td>";
                  echo "<td>".$row['vreme']."</td>";
                  echo "</tr>";
                  }
                  echo "</table>";
                  echo "<br>";


?>
