                <?php
                include_once "file_storage.php";
                // connect to mysql
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "e-web";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                // echo "Connected successfully";
                // get products from database
                $sql = "SELECT * FROM cart";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        // table form of cart
                        echo "<table class='table'>
                        <thead>
                            <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>Product Name</th>
                                <th scope='col'>Product Price</th>
                                <th scope='col'>Product Quantity</th>
                                <th scope='col'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope='row'>" . $row["prod_id"] . "</th>
                                <td>" . $row["prod_name"] . "</td>
                                <td>" . $row["prod_price"] . "</td>
                                <td>" . $row["prod_quantity"] . "</td>
                                <td><a href='removecart.php?product_id=".$row['prod_id']."' class='btn btn-primary'>Remove</a></td>
                            </tr>
                        </tbody>
                    </table>";
                    
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>