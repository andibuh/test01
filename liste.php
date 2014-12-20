<?php
require('db.php');



$abfrage = "SELECT * FROM funktionen";
$ergebnis = mysql_query($abfrage);

if ( !$ergebnis ) die('MySQL-Fehler:') ; 

echo "<br><br>";
echo "<form>";
echo "<table>";
while($row = mysql_fetch_object($ergebnis))
   {
    echo "<tr><td><input type='text' name='FNR' value='$row->FNR' size='10'></td>";
    echo "<td><input type='text' name='FUNKTION' value='$row->FUNKTION' size='60'></td>";
    echo "<td><button name='$row->FNR' onclick='update('$row->FNR')'>Update</button></td></tr>";
   //echo "<tr><td> $row->FNR </td><td> $row->FUNKTION </td></tr>";
   }
   echo "</table></form>";
   # Info
?>