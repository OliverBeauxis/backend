<?php

require_once 'db.php';

// Vytvoření instance MySQL driveru
$db = new MySQL();

// Připojení k databázi
$db->connect('localhost', 'username', 'password', 'MojeDatabaze');

// Získání dat z databáze
$query = "SELECT * FROM Rodic";
$rodice = $db->select($query);

$query = "SELECT * FROM Dite";
$dite = $db->select($query);

// Zobrazení dat v podobě HTML tabulky
include 'design.php';

?>
