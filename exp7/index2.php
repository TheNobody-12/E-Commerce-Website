<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <input type="number" name="num" id="num">
        <input type="submit" value="submit">
    </form>
    <?php
	if(isset($_POST['num']))
    {   
        $num = (string)$_POST['num'];
        $rev = strrev($num);
        if($rev == $num){
            echo "Number is palindrom";
        }else{
            echo "Number is not palindrom";
        }
    }
    ?>
</body>
</html>