<?php
$host = "localhost";
$db = "kolokvijumi";
$user = "Djordje";
$pass = "300599";

$conn = new mysqli($host,$user,$pass,$db,3306);


if ($conn->connect_errno){
    exit("Nauspesna konekcija: greska> ".$conn->connect_error.", err kod>".$conn->connect_errno);
}

?>