<?php

if($_SERVER["REQUEST_METHOD"] != "GET"){
    die("Invalid request");
}

require_once "./db.php";

$query = "SELECT * FROM cars";

$result = mysqli_query($conn, $query) or die("Selected query failed");

$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

header("Content-Type: application/json; charset=utf-8");

echo json_encode($cars);


?>