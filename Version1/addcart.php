<?php
include_once "file_storage.php";
$product_id = $_GET['product_id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-web";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// read data from mysql
$data = "SELECT * FROM `catelogs`  WHERE product_id = '$product_id' ";
// add $data to cart
$sql = "INSERT INTO `cart` (`prod_id`, `prod_name`, `prod_price`, `prod_quantity`) VALUES ('$product_id', '$product_name', '$product_price', '$product_quantity')";
// fetch data from mysql
$result = $conn->query($sql);
header("Location: index.php");
$conn->close();
?>