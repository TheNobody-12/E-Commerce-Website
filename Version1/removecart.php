<!-- // compare removecart.php -->
<?php
include_once "file_storage.php";
include_once "db.php";
// get product id
$product_id = $_GET['product_id'];
// remove product from session
$session_id = session_id();
$sql = "DELETE FROM `session` WHERE session_id = '$session_id' AND product_id = '$product_id'";
$result = $conn->query($sql);   
// update product quantity
$sql = "SELECT * FROM catalogue WHERE product_id = '$product_id'";
$result = $conn->query($sql);
if ($result->rowCount() > 0) {
    foreach ($result as $row) {
        $product_id = $row['product_id'];
        $product_quantity = $row['product_quantity'];
        $product_quantity = $product_quantity + 1;
        // update product quantity
        $sql = "UPDATE catalogue SET product_quantity = '$product_quantity' WHERE product_id = '$product_id'";
        $result = $conn->query($sql);
    }
} else {
    echo "0 results";
}
header("Location: cart.php");
exit();
?>
