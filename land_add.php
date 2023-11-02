<?php
session_start();
require_once "db_functions.php";
$conn = connectDB();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $state_country = test_input(isset($_POST['state']) ? $_POST['state'] : "");
    $county = test_input(isset($_POST['county']) ? $_POST['county'] : "");
    $area = test_input(isset($_POST['area']) ? $_POST['area'] : "");
    $apn = test_input(isset($_POST['apn']) ? $_POST['apn'] : "");
    $podioLink = test_input(isset($_POST['podio_link']) ? $_POST['podio_link'] : "");

    $queryPrepared = $conn->prepare("INSERT INTO land_info
                                                (state_country, county, area, apn, podio_link)
                                                VALUES 
                                                (:state_country, :county, :area, :apn, :podio_link)");
    
    $queryPrepared->execute([
        "state_country" => $state_country,
        "county" => $county,
        "area" => $area,
        "apn" => $apn,
        "podio_link" => $podioLink,
    ]);



$conn == null;
header('location: new_land_register.php');
}