<?php 
// connect to mysql
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// take data from form
$name = $_POST['name'];
$password = $_POST['password'];
// insert data into database
// check name is unique
$sql = "SELECT * FROM regis WHERE username = '$name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Name already exists";
} else {
    $sql = "INSERT INTO regis (username, password)
    VALUES ('$name', '$password')";
    if ($conn -> query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>



