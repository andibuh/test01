<?php
// Verbindung aufbauen, auswählen einer Datenbank
$link = mysql_connect("localhost", "root", "")
    or die("Keine Verbindung möglich: " . mysql_error());
 
// Datenbank auswählen
mysql_select_db("kursverwaltung") or die("Auswahl der Datenbank fehlgeschlagen\n");

?>