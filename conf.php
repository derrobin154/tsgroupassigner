<?php
$ip = ""; //TSIP
$port = ""; //TS Port
$username = ""; //TS Query Username
$password = ""; // TS Query Passwort
$queryport = ""; // TS Query Port
$tsname = urlencode(""); // Query Username (welcher im TS auftritt)

$groups = array("0","1"); //Servergruppen welche zur Vergabe bestimmt werden.
$disallowed = array("1","2"); //Servergruppen welche nicht zur Vergabe bestimmt sind (Vorbeugung von POST Manipulation)

?>