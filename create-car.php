<?php

$input_json = file_get_contents('php://input');
$input = json_decode($input_json, true);

$car = [
    "id" => 5,
    "make" => "BMW",
    "model" => "X6"
]
?>