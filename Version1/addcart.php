<?php
include_once "file_storage.php";
include_once "db.php";
// get product id
$product_id = $_GET['product_id'];
$sql= "SELECT * FROM catalogue WHERE product_id = '$product_id'";
$result = $conn->query($sql);
if ($result->rowCount() > 0) {
    foreach ($result as $row) {
        $product_id = $row['product_id'];
        $product_name = $row['product_name'];
        $product_price = $row['product_price'];
        $product_description = $row['product_description'];
        $product_quantity = $row['product_quantity'];
        $product_quantity = $product_quantity - 1;
        // update product quantity
        $sql = "UPDATE catalogue SET product_quantity = '$product_quantity' WHERE product_id = '$product_id'";
        $result = $conn->query($sql);
        // insert data into session
        $session_id = session_id();
        $pq = $product_quantity + 1;
        $sql = "INSERT INTO `session` (`session_id`, `product_id`, `product_name`, `product_price`, `product_description`, `product_quantity`) VALUES ('$session_id', '$product_id', '$product_name', '$product_price', '$product_description','$pq')";
        $result = $conn->query($sql);
        header("Location: cart.php");
    }
} else {
    echo "0 results";
}
exit();
?>