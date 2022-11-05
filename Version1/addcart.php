<!-- compare addcart -->
<?php
// add to cart
include_once "file_storage.php";
include_once "create_datafile.php";
$filename = 'myfilename.json';
$data = readDataFile($filename);
// get product id from url
$product_id = $_GET['product_id'];
// find product in data
foreach ($data as $product) {
    if ($product['product_id'] == $product_id) {
        // add product to cart
        $cart = array();
        $cart['product_id'] = $product['product_id'];
        $cart['product_name'] = $product['product_name'];
        $cart['product_price'] = $product['product_price'];
        $cart['product_quantity'] = 1;
        // write cart to file
        $cart_filename = 'cart.json';
        $cart_data = readDataFile($cart_filename);
        $cart_data[] = $cart;
        writeDataFile($cart_filename, $cart_data);
        // redirect to cart page
        header("Location: cart.php");
        exit;
    }
}
?>