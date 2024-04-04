<?php
// database connection
$connect = new mysqli("localhost", "sixdgt", "1234", "php_xml_example");

if($connect->connect_error){
    die("Error: {$connect->connect_error}");
} else {
    // taking data from POST 
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    // hashing password with BCRYPT Algorithm
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // building sql query
    $sql = "INSERT INTO kyc(`full_name`, `email`, `contact`, `address`, `password`) VALUES('$full_name', '$email', '$contact', '$address', '$password')";

    if($connect->query($sql) === TRUE){
        echo "KYC Submitted";
        exit();
    } else {
        echo "Error: {$connect->error}";
    }
}