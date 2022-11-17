<!-- create a ecommerce web page to read data and use add to cart functionality -->
<?php
// read data from data file
include_once "file_storage.php";
include_once "create_datafile2.php";
$filename = 'myfilename2.json';
$data = readDataFile($filename);
foreach ($data as $product) {
    print "<tr>";
    // aana thi thass project 
    print "<td><img src='Image/" . $product['product_id'] . ".webp' width='100' height='100'></td>";
    // print "<td>".$product['product_id']."</td>";
    print "<td>".$product['product_name']."</td>";
    print "<td>".$product['product_category']."</td>";
    print "<td>".$product['product_description']."</td>";
    print "<td>".$product['product_price']."</td>";
    print "<td>".$product['product_quantity']."</td>";
    // if product quantity is greater than 0, allow user to add to cart
    if ($product['product_quantity'] > 0) {
        print "<td><a href='addcart.php?product_id=".$product['product_id']."'>Add to Cart</a></td>";
    } else {
        print "<td>Out of Stock</td>";
    }
    print "</tr>";
}
?>

