

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
					 <th colspan="2">Sta ce se desiti sa javnim transportom u buducnosti?</th>
				</tr>
			 </thead>

			 <tbody>
				<tr>
					 <td>Postace automatizovan</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Postace automatizovan"></td>
				</tr>
				<tr>
					 <td>Bice zamenjen samovozecim automobilima</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Bice zamenjen samovozecim automobilima"></td>
				</tr>
				<tr>
					 <td>Nece se promeniti</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Nece se promeniti"></td>
				</tr>
			</tbody>
		</table>

		 <table class="minimalistBlack">

			 <thead><tr><td rowspan="1">Da li rast samovozecih automobila ubrzava trend urbanog prevoza?</td></tr></thead>
			 <tr><td><input type="radio" name="naziv" value="Da"/>Da</td></tr>
			 <tr><td><input type="radio" name="naziv" value="Ne"/>Ne</td></tr>
			 <tr> <td><input type="radio" name="naziv" value="Mozda"/>Mozda</td></tr>

		 </table >
			<table class="minimalistBlack">
		 <thead><tr><td><label>Vase misljenje o samovozecim automobilima</label></td></tr></thead>

				<tr><td> <textarea rows="8" cols="20" name="content" required></textarea></td></tr>
			</table>

			 <table class="minimalistBlack">
			<thead>	<tr><td><label>Da li verujete samovozecim automobilima?</label></td></tr></thead>
			 <tr> <td><select name="country">
				 <option value="U potpunosti verujem">U potpunosti verujem</option>
				 <option value="Verujem">Verujem</option>
				 <option value="Ne verujem">Ne verujem</option>
				 <option value="Nisam siguran">Nisam siguran</option>
			 </select></td></tr>

			 <table class="minimalistBlack">
				 <thead><tr><td>Za koliko godina ce pametni saobracaj zaziveti kod nas?</td></tr></thead>
				 <tr><td><input type="text" name="name"/></td>
				 </tr>
				 <tr><td><input type="submit" name="submit" class="btn btn-dark" value="Submit"/></td></tr>
			 </table>
 </div>
</form>
