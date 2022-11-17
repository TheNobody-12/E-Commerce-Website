<!-- // compare removecart.php -->
<?php
// remove from cart
include_once "file_storage.php";
include_once "create_datafile.php";
$filename = 'cart.json';
$data = readDataFile($filename);
// get product id from url
$product_id = $_GET['product_id'];
// find product in data
foreach ($data as $key => $product) {
    if ($product['product_id'] == $product_id) {
        // remove product from cart
        unset($data[$key]);
        // write cart to file
        $cart_filename = 'cart.json';
        writeDataFile($cart_filename, $data);
        // redirect to cart page
        header("Location: cart.php");
        exit;
    }
}
?>