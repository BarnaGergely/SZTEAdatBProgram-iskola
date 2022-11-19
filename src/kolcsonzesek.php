<?php 
require_once('head.html');
?>
	

<h1>Új kölcsönzés</h1>

<form method="POST" action="kolcsonzesfelvitel.php" accept-charset="utf-8">
<label>Könyv : </label>
<select name="valasztottKonyv">
<?php 
	$szabadKonyvek = szabad_konyveket_listaz();
	while( $egySor = mysqli_fetch_assoc($szabadKonyvek) ) {
		echo '<option value="'.$egySor["konyvszam"].'">'.$egySor["konyv"].'</option>';
	}
	mysqli_free_result($szabadKonyvek);

?>
</select>
<br>
<label>Könyv címe: </label>
<select name="olvaso">
<?php 
	$olvasok = olvasolistatLeker();
	while( $egySor = mysqli_fetch_assoc($olvasok) ) {
		echo '<option value="'.$egySor["olvasojegy"].'">'. 
		      $egySor["olvasojegy"]. ' - '. 
		      $egySor["nev"]. ', ' . 
		      $egySor["lakcim"] .'</option>';
	}
	mysqli_free_result($olvasok);

?>
</select>
<br>
<input type="submit" value="Elküld" />

</form>


<hr/>
<h1>Kölcsönzött könyvek listája</h1>

<table border="1">
<tr>
<th>Könyvszám</th>
<th>Cím</th>
<th>Szerző</th>
<th>Kiadó</th>
<th>Év</th>
<th>Olvasója</th>
</tr>

<?php

	$konyvek = kolcsonzott_konyvek_listaja(); // ez egy eredményhalmazt ad vissza
	
	// soronként dolgozzuk fel az eredményt
	// minden sort egy asszociatív tömbben kapunk meg
    while( $egySor = mysqli_fetch_assoc($konyvek) ) { 
		echo '<tr>';
		echo '<td>'. $egySor["konyvszam"] .'</td>';
		echo '<td>'. $egySor["cim"] .'</td>';
		echo '<td>'. $egySor["szerzo"] .'</td>';
		echo '<td>'. $egySor["kiado"] .'</td>';
		echo '<td>'. $egySor["ev"] .'</td>';
		echo '<td>'. $egySor["olvaso"] .'</td>';
		echo '<td><form method="POST" action="kolcsonzestorles.php">
				  <input type="hidden" name="toroltkonyv" value="'.$egySor["konyvszam"].'" />
				  <input type="submit" value="Kölcsönzés torlése" />
		          </form></td>';
		echo '</tr>';
	} 
	mysqli_free_result($konyvek); // töröljük a listát a memóriából

?>
</table>


<?php 
require_once('footer.html');
?>
