<?php

$cars = [
     [
        "id" => 1,
        "make" => "BMW",
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

$method = $_SERVER['REQUEST_METHOD'];

if($method == "POST"){
    //Create a car

$input_json = file_get_contents('php://input');
$input = json_decode($input_json, true);

if(isset($input["make"]) && isset($input["model"])){
    http_response_code(201);
    echo "Created";

}

}
else if($method == "GET" && isset($_GET["id"]) ){
    //Get a car by id

    $id = intval($_GET["id"]);
    $car = $cars[$id-1];
    header('Content-Type: application/json; charset=utf-8;');
    echo json_encode($car);
}
else if($method == "GET"){
    //Get all cars
    
    header('Content-Type: application/json; charset=utf-8;');
    echo json_encode($cars);
}
else{
    //Invalid method
    echo "Invalid method";
}




?>