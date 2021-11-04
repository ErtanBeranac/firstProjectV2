

<?php

if (!isLoggedIn()) {
	$_SESSION['msg'] = "Uloguj se";
	header('location: login.php');
}
 ?>
 <form action="" method="post" enctype="multipart/form-data">
	<div style="width:800px;border-radius:6px;margin:0px auto">

		 <table class="minimalistBlack">
			 <thead>
				<tr>
					 <th colspan="2">Koliki je trenutni uticaj pametnih tehnologija na zdrastvo?</th>
				</tr>
			 </thead>

			 <tbody>
				<tr>
					 <td>Visok</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Visok"></td>
				</tr>
				<tr>
					 <td>Ne bas visok</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Ne bas visok"></td>
				</tr>
				<tr>
					 <td>Nikakav</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Nikakav"></td>
				</tr>
				<tr>
					 <td>Zanemarljiv</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Zanemarljiv"></td>
				</tr>
			</tbody>
		</table>

		 <table class="minimalistBlack">

			 <thead><tr><td rowspan="1">Da li pametni telefoni mogu pomoci u pracenju zdrastvenog stanja</td></tr></thead>
			 <tr><td><input type="radio" name="naziv" value="Da"/>Da</td></tr>
			 <tr><td><input type="radio" name="naziv" value="Ne"/>Ne</td></tr>
			 <tr> <td><input type="radio" name="naziv" value="Nisam siguran"/>Nisam siguran</td></tr>

		 </table >
			<table class="minimalistBlack">
		 <thead><tr><td><label>Vase misljenje o uredjajima koji se koriste u zdrastvu</label></td></tr></thead>

				<tr><td> <textarea rows="8" cols="20" name="content" required></textarea></td></tr>
			</table>

			 <table class="minimalistBlack">
			<thead>	<tr><td><label>	Da li cemo nositi pametne uredjaje koji prate nase zdrastveno stanje u realnom vremenu?</label></td></tr></thead>
			 <tr> <td><select name="country">
				 <option value="Da">Da</option>
				 <option value="Ne">Ne</option>
				 <option value="Ne znam">Ne znam</option>
			</select></td></tr>

			 <table class="minimalistBlack">
				 <thead><tr><td>Da li znate neki pametni uredjaj za zdrastvo (odgovor sa da/ne)</td></tr></thead>
				 <tr><td><input type="text" name="name"/></td>
				 </tr>
				 <tr><td><input type="submit" name="submit" class="btn btn-dark" value="Submit"/></td></tr>
			 </table>
 </div>
</form>
