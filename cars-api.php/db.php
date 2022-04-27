<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_db = "cars-db";


$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
// conn blir false om anslutning misslyckas
if(!$conn){
    die("Connection failed");
}




?>