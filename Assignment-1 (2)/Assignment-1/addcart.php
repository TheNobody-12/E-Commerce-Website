<!-- I, Shreya Jadawala, student number 000873690, certify that this material is my original work. No other person's work has been used without due acknowledgment and I have not made my work available to anyone else. -->
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
        header("Location: new.html");
        exit;
    }
}
?>