<?php
require_once "db_functions.php";
$conn = connectDB();
$email = "";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST['email'];
  
    $sql = "Select lastname, firstname from survey_takers where email = '".$email."'";
    $result = $conn->query($sql);
    $rows = $result->fetchAll();
    echo json_encode($rows);
}
?>