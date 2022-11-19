<?php
require_once('head.php');
?>

<section class="container">

	<h1>Olvasók felvitele</h1>

	<form method="POST" action="olvasofelvitel.php" accept-charset="utf-8">
		<label>Olvasójegy: </label>
		<input type="text" name="olvasojegy" />
		<br>
		<label>Név: </label>
		<input type="text" name="nev" />
		<br>
		<label>Születési dátum: </label>
		<select name="szulev" />
		<?php
		for ($i = 1900; $i < 2100; $i++) {
			echo '<option value="' . $i . '">' . $i . '</option>';
		}
		?>
		</select> év

		<select name="szulhonap" />
		<?php
		for ($i = 1; $i < 12; $i++) {
			echo '<option value="' . $i . '">' . $i . '</option>';
		}
		?>
		</select> hónap

		<select name="szulnap" />
		<?php
		for ($i = 1; $i < 31; $i++) {
			echo '<option value="' . $i . '">' . $i . '</option>';
		}
		?>
		</select> nap
		<br>
		<label>Lakcím: </label>
		<input type="text" name="lakcim" />
		<br>
		<input type="submit" value="Elküld" />
	</form>


	<hr />
</section>
<section class="container">
	<h1>Olvasók listája</h1>

	<table border="1">
		<tr>
			<th>Olvasójegy</th>
			<th>Név</th>
			<th>Születési dátum</th>
			<th>Lakcím</th>
		</tr>

		<?php

		$olvasok = olvasolistatLeker(); // ez egy eredményhalmazt ad vissza

		// soronként dolgozzuk fel az eredményt
		// minden sort egy asszociatív tömbben kapunk meg
		while ($egySor = mysqli_fetch_assoc($olvasok)) {
			echo '<tr>';
			echo '<td>' . $egySor["olvasojegy"] . '</td>';
			echo '<td>' . $egySor["nev"] . '</td>';
			echo '<td>' . date_format(date_create($egySor["szuldatum"]), 'Y. m. d.') . '</td>';
			echo '<td>' . $egySor["lakcim"] . '</td>';

			echo '</tr>';
		}
		mysqli_free_result($olvasok); // töröljük a listát a memóriából

		?>
	</table>
</section>

<?php
require_once('footer.php');
?>