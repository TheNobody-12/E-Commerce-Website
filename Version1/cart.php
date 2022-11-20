                <?php
                include_once "file_storage.php";
                include_once "db.php";
                // write query to fetch data from session table adn update product quantity if product is already in cart
                $session_id = session_id();
                $sql = "SELECT * FROM `session` WHERE session_id = '$session_id '";
                $result = $conn->query($sql);
                if ($result->rowCount() > 0) 
                {
                    foreach ($result as $row)
                    {
                        $product_id = $row['product_id'];
                        $product_name = $row['product_name'];
                        $product_price = $row['product_price'];
                        $product_description = $row['product_description'];
                        $product_quantity = $row['product_quantity'];
                        $product_quantity = $product_quantity;
                        // table
                        print "<table border='1'>";
                        print "<tr><th>Product ID</th><th>Product Name</th><th>Product Price</th><th>Product Description</th><th>Product Quantity</th><th>Remove From Cart</tr>";
                        print "<tr>";
                        print "<td><img src='Image/" . $product_id . ".webp' width='100' height='100'></td>";
                        print "<td>" . $product_name . "</td>";
                        print "<td>" . $product_price . "</td>";
                        print "<td>" . $product_description . "</td>";
                        print "<td>" . $product_quantity . "</td>";
                        print "<td><a href='removecart.php?product_id=" . $product_id . "'>Remove From Cart</a></td>";
                        print "</tr>";
                        print "</table>";
                    }
                } else {
                    echo "0 results";
                }
                print "<a href='index.php'>Continue Shopping</a>";
                exit();
?>