<?php


// ---- Get this from database ----
$cars = [
    [
        "id" => 1,
        "make" => "BMWk",
        "model" => "750"
    ],
    [
        "id" => 2,
        "make" => "Volvo",
        "model" => "V60"
    ],
    [
        "id" => 3,
        "make" => "Tesla",
        "model" => "G40"
    ],
    [
        "id" => 4,
        "make" => "Saab",
        "model" => "C80"
    ],
];

$cars = json_encode($cars);

// --- Set headers ---
header('Content-Type: application/json; charset=utf-8;');


// --- Set body ----
echo json_encode($cars);



?>