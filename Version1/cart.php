<?php
// create link to index.php
print "<a href='index.php'>Back to Products</a>";
// read data from cart file
include_once "file_storage.php";
// include_once "create_datafile.php";
// $data_file = 'myfilename.json';
$filename = 'cart.json';
$data = readDataFile($filename);
// create table of products
print "<table border='1'>";
print "<tr><th>Product ID</th><th>Product Name</th><th>Product Price</th><th>Product Quantity</th><th>Remove from Cart</th></tr>";
foreach ($data as $product) {
        print "<tr>";
        print "<td>".$product['product_id']."</td>";
        print "<td>".$product['product_name']."</td>";
        print "<td>".$product['product_price']."</td>";
        print "<td>".$product['product_quantity']."</td>";
        print "<td><a href='removecart.php?product_id=".$product['product_id']."'>Remove from Cart</a></td>";
        print "</tr>";
    }
print "</table>";
?>

