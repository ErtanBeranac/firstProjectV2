

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
					 <th colspan="2">Ko najvise zagadjuje u nasem gradu?</th>
				</tr>
			 </thead>

			 <tbody>
				<tr>
					 <td>Fabrike</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Fabrike"></td>
				</tr>
				<tr>
					 <td>Stanovnistvo</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Stanovnistvo"></td>
				</tr>
				<tr>
					 <td>Automobili</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Automobili"></td>
				</tr>
				<tr>
					 <td>Niko ne zagadjuje</td>
					 <td><input type="checkbox" name="cekiraniodgovor[]" value="Niko ne zagadjuje"></td>
				</tr>
			</tbody>
		</table>

		 <table class="minimalistBlack">

			 <thead><tr><td rowspan="1">Da li bi ste promenili lose navike zbog okruzenja?</td></tr></thead>
			 <tr><td><input type="radio" name="naziv" value="Da"/>Da</td></tr>
			 <tr><td><input type="radio" name="naziv" value="Ne"/>Ne</td></tr>
			 <tr> <td><input type="radio" name="naziv" value="Nisam siguran"/>Nisam siguran</td></tr>

		 </table >
			<table class="minimalistBlack">
		 <thead><tr><td><label>Napisite slogan kojim bi ste uticali na druge da se promene.</label></td></tr></thead>

				<tr><td> <textarea rows="8" cols="20" name="content" required></textarea></td></tr>
			</table>

			 <table class="minimalistBlack">
			<thead>	<tr><td><label>	Koliko je bezbedno koristiti nukleadnu energiju?</label></td></tr></thead>
			 <tr> <td><select name="country">
				 <option value="Veoma bezbedno">Veoma bezbedno</option>
				 <option value="nije bezbedno">Nije bezbedno</option>
				 <option value="Ne znam">Ne znam</option>
			</select></td></tr>

			 <table class="minimalistBlack">
				 <thead><tr><td>Koji vid energije ce zameniti fosilna goriva?</td></tr></thead>
				 <tr><td><input type="text" name="name"/></td>
				 </tr>
				 <tr><td><input type="submit" name="submit" class="btn btn-dark" value="Submit"/></td></tr>
			 </table>
 </div>
</form>
