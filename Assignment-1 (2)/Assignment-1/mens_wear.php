<?php session_start()?><!DOCTYPE html>
<?php

$a = filter_input(INPUT_GET, "a1", FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION["a1"] = $a;
?>
<html>

<head>
    <title>Mens Wear</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

</html>