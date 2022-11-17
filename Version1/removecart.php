<!-- // compare removecart.php -->
<?php
// remove from cart
include_once "file_storage.php";
$product_id = $_GET['product_id'];
// connect to mysql
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "e-web";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// remove data from mysql
$sql = "DELETE FROM `cart` WHERE prod_id = '$product_id' ";
// fetch data from mysql
$result = $conn->query($sql);
header("Location: cart.php");
$conn->close();
?>
