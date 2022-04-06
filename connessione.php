<?php

$hostname="172.17.0.1:3306";
$user="root";
$password="my-secret-pw";
$database="mydb";

$connessione=mysqli_connect($hostname, $user, $password, $database) 

or die("Connessione non riuscita" . mysqli_connect_error());

?>