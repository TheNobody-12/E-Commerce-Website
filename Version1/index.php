<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navbar -->
    <!-- <div class="container-fluid p-0"> -->

    </div>
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid p-0">
            <img src="./image/logo.jpeg" alt="logo" style="width:7%;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mainCart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Total Price</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-auto p-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Welcome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </nav>
    <!-- third child -->
    <div class="bg-light">
        <h3 class="text-center">Hidden Store</h3>
        <p class="text-center">cknojdncdcn</p>
    </div>

    <!-- fourth child -->
    <div class="row">
        <div class="col-md-2 bg-secondary p-0">
            <ul class="navbar-nav me-auto text-center">
                <!-- Categories -->
                <li class="nav-item bg-info">
                    <a class="nav-link" href="#">  Categories</a>
                </li>
                <li>  Category 1</li>
                <li>  Category 2</li>
                <li>  Category 3</li>
                <li>  Category 4</li>
                <li>  Category 5</li>
            </ul>
        </div>
        <div class="col-md-7">
            <!-- Products -->
            <div class="row">
                <!-- Repeat card for each prodcut in sql database php -->
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
                $sql = "SELECT * FROM catelogs";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-md-4'>
                        <div class='card'>
                            <img src='" . $row["product_id"] . "' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title
                                '>" . $row["product_name"] . "</h5>
                                <p class='card-text'>" . $row["product description"] . "</p>
                                <a href='addcart.php?product_id=".$row['product_id']."' class='btn btn-primary'>Add to cart</a>
                            </div>
                        </div>
                    </div>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
            <div class="col">
                <h2>ADD TO CART</h2>
                <?php include 'cart.php'; ?>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>
    </div>




    <!-- Last child -->
    <div class="bg-info p-3 text-center">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet expedita nam dicta rem beatae et iure
            praesentium temporibus nostrum ratione repellat, illum distinctio, blanditiis, similique maxime voluptatum
            facere voluptatem mollitia!</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>