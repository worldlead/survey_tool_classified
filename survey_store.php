<?php
session_start();
require_once "db_functions.php";
$conn = connectDB();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $validator = test_input($_POST['validator']);
    $selectedPlace = test_input($_POST['selected_area']);
    $buyPrice = test_input($_POST['buy_price']);
    $sellPrice = test_input($_POST['sell_price']);
    $note = test_input($_POST['note']);
    
    $stmt = $conn->query("SELECT email FROM survey_tokens WHERE token = '" . $validator. "'");
	$res = $stmt->fetch();
    
    $query = $conn->prepare("INSERT INTO survey (podio_link, email, buyPrice, sellPrice, note) VALUES (:podio_link, :email, :buyPrice, :sellPrice, :note)");

    $query->execute([
        "podio_link" => $selectedPlace,
        "email" => $res['email'],
        "buyPrice" => $buyPrice,
        "sellPrice" => $sellPrice,
        "note" => $note
    ]);
    
}

header('location: survey.php?validator='.$validator);

$conn = null;
