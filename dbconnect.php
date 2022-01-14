<?php
//connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "tara_hotel";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Error connecting". mysqli_connect_error());
}
 



?>