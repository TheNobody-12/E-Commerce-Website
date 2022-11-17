<!-- create a ecommerce web page to read data and use add to cart functionality -->
<?php
// read data from data file
include_once "file_storage.php";
// include_once "create_datafile.php";
$filename = 'myfilename.json';
$data = readDataFile($filename);
// fetch category = women data from $data
$women_data = array_filter($data, function($product) {
    return $product['product_category'] == "Women's Wear";
}); 
print "<a href='new.html'>Home</a>";
print "<table border='1'>";
print "<tr><th>Product ID</th><th>Product Name</th><th>Product Category</th><th>Product Ddescription</th><th>Product Price</th><th>Product Quantity</th><th>Add to Cart</th></tr>";
foreach ($women_data as $product) {
    print "<tr>"; 
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
print "</table>";
?>
