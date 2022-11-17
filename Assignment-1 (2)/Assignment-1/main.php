<!-- I, Shreya Jadawala, student number 000873690, certify that this material is my original work. No other person's work has been used without due acknowledgment and I have not made my work available to anyone else. -->
<?php session_start()?><!DOCTYPE html>
<!-- create a ecommerce web page to read data and use add to cart functionality -->
<!-- 
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Store for clothes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="C:\xampp\htdocs\a0\Assignment-1\main.css" rel="stylesheet">
        <link href="C:\xampp\htdocs\a0\Assignment-1\main.html">
    </head>
    <body>
    <div class="grid-container-header">
        <div class="grid-item-header">The Hamilton Store</div>
        <div class="image"> 
        <img src="C:\xampp\htdocs\a0\Assignment-1\Image\images.jpg" alt="Hamilton Store" width="150" height="150" /></div>
        <--image was taken from google...  The link is given below:
            https://www.google.com/search?q=logo+of+hamilton+store&rlz=1C1CHBF_enCA983CA997&oq=logo+of+hamilton+store&aqs=chrome..69i57j33i160.4944j0j7&sourceid=chrome&ie=UTF-8#imgrc=__rI5ao5QDbcEM-->
        <!-- </div>
    <div class="grid-container">
    <div class="grid-item">
        <h1>Product Categories</h1>
       <div class="row">
            <form action="mens_wear.php"><a href="mens_wear.php">Mens Wear</a><br/></form>
            
            <a href="womens_wear.php">Womens Wear</a><br/>
            <a href="kids_wear.php">Kid's Wear</a>
        </div> -->
    <!-- </div>
    <div class="grid-item">
        <h1>Catalog</h1>  -->
<?php
// read data from data file
include_once "file_storage.php";
// include_once "create_datafile.php";
$filename = 'myfilename.json';
$data = readDataFile($filename);
// create table of products
print "<table border='1'>";
print "<tr><th>Product ID</th><th>Product Name</th><th>Product Category</th><th>Product Description</th><th>Product Price</th><th>Product Quantity</th><th>Add to Cart</th></tr>";
foreach ($data as $product) {
    print "<tr>";
    print "<td>".$product['product_id']."</td>";
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
print "<a href='cart.php'>View Cart</a>";
?>
<!--         
    </div>
    <div class="grid-item">
        <h1>Shopping Cart</h1>
       
    </div>  
    <div class="grid-item">
        <form action="mens_wear.php"><a href="mens_wear.php">Mens Wear</a><br/></form>
            
        <a href="womens_wear.php">Womens Wear</a><br/>
        <a href="kids_wear.php">Kid's Wear</a>
    </div>
    <div class="grid-item">

    </div>
    <div class="grid-item">
        <a href="cart.php">Cart</a>
    </div>
    <div class="grid-item"></div>
    <div class="grid-item">

    </div>
</div>
    <!-- <div class="grid-item">Men</div>
    <div class="grid-item">Women</div>
    <div class="grid-item">Child</div> -->
    
</body>
</html> -->
