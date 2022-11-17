<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // make form to input user id
    echo "<form action='user.php' method='get'>";
    echo "<label for='user_id'>User ID:</label>";
    echo "<input type='text' name='user_id' id='user_id'>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";
    
$xml=simplexml_load_file("index.xml") or die("Error: Cannot create object");
// get user id from $xml
$user_id = $xml->string($_POST['user_id']);
echo $user_id; 
    ?>





</body>

</html>