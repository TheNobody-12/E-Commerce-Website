<!-- write script to find sum for individual digit -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="num" id="num">
        <input type="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['num'])){
            $num = $_POST['num'];
            $sum = 0;
            while($num > 0){
                $rem = $num % 10;
                $sum = $sum + $rem;
                $num = $num / 10;
            }
            echo "Sum of individual digit is $sum";
        }
    ?>
</body>
</html>
