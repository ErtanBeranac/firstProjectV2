<?php
session_start();

// konekcija na bazu
$db = mysqli_connect('localhost', 'id3374059_baza1', '12345', 'id3374059_baza1');

// deklaracija promenljivih
$username = "";
$ime= "";
$prezime= "";
$indeks= "";
$email    = "";
$errors   = array();

// poziva se register() funkcija ako je register_btn kliknuto
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTRACIJA KORISNIKA
function register(){

	global $db, $errors, $username, $email;

	// uzima sve vrednosti iz forme.

	$username    =  e($_POST['username']);
	$ime=e($_POST['username']);
	$prezime=e($_POST['prezime']);
	$indeks=e($_POST['indeks']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// validacija forme: proverava se da li je sve popunjeno
	if (empty($username)) {
		array_push($errors, "Username je zahtevano polje");
	}
	if (empty($ime)) {
		array_push($errors, "Ime je zahtevano polje");
	}
	if (empty($prezime)) {
		array_push($errors, "Prezime je zahtevano polje");
	}
	if (empty($indeks)) {
		array_push($errors, "Indeks je zahtevano polje");
	}
	if (empty($email)) {
		array_push($errors, "Email je zahtevano polje");
	}
	if (empty($password_1)) {
		array_push($errors, "Sifra je zahtevano polje");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "Sifre se ne podudaraju");
	}

	// registruje se korisnik ako nema gresaka u formi
	if (count($errors) == 0) {
		$password = ($password_1);

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, ime, prezime, indeks, email, user_type, password)
					  VALUES('$username', '$ime', '$prezime', '$indeks', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Novi korisnik je dodat!!";
			header('location: login.php');
		}else{
			$query = "INSERT INTO users (username, ime, prezime, indeks, email, user_type, password)
					  VALUES('$username', '$ime', '$prezime', '$indeks', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			// uzima se Id registrovanog korisnika
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // loginovani korisnik se stavlja u sesiju
			$_SESSION['success']  = "Ulogovani ste";
			header('location: login.php');
		}
	}
}


function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}


function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}


if (isset($_POST['login_btn'])) {
	login();
}

// Loginovanje korisnika
function login(){
	global $db, $username, $errors;

	// uzimaju se vrednosti iz forme
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// proverava se da li je neko polje prazno
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// loguj se ako nema gresaka
	if (count($errors) == 0) {
		$password = ($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // korisnik pronadjen
			// proverava se da li je tip naloga admin ili user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "Ulogovani ste";
				header('location: admin/home.php');
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "Ulogovani ste";

				header('location: index.php');

			}
		}else {
			array_push($errors, "Pogresna username/password kombinacija");
		}
	}
}


function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}
