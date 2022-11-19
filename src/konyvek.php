<?php
require_once('head.php');
?>
<section class="container">

   <h1>Könyvek felvitele</h1>

   <form method="POST" action="konyvfelvitel.php" accept-charset="utf-8">

      <label>Könyv száma: </label>
      <input type="text" name="konyvszam" />
      <br>
      <label>Könyv címe: </label>
      <input type="text" name="cim" />
      <br>
      <label>Szerző: </label>
      <input type="text" name="szerzo" />
      <br>
      <label>Kiadó: </label>
      <input type="text" name="kiado" />
      <br>
      <label>Kiadás éve: </label>
      <input type="text" name="ev" />
      <br>
      <input type="submit" value="Elküld" />
   </form>
   <hr />
</section>
<section class="container">
   <h1>Könyvek listája</h1>

   <table border="1">
      <tr>
         <th>Könyvszám</th>
         <th>Cím</th>
         <th>Szerző</th>
         <th>Kiadó</th>
         <th>Év</th>
      </tr>

</section>
<?php

$konyvek = konyvlistatLeker(); // ez egy eredményhalmazt ad vissza

// soronként dolgozzuk fel az eredményt
// minden sort egy asszociatív tömbben kapunk meg
while ($egySor = mysqli_fetch_assoc($konyvek)) {
   echo '<tr>';
   echo '<td>' . $egySor["konyvszam"] . '</td>';
   echo '<td>' . $egySor["cim"] . '</td>';
   echo '<td>' . $egySor["szerzo"] . '</td>';
   echo '<td>' . $egySor["kiado"] . '</td>';
   echo '<td>' . $egySor["ev"] . '</td>';
   echo '</tr>';
}
mysqli_free_result($konyvek); // töröljük a listát a memóriából

?>
</table>

<?php
require_once('footer.php');
?>