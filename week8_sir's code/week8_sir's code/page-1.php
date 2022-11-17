<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
    <script src="script.js"></script>
    <title>Ajax/Session Example</title>
</head>
<body>
    <div>
        <button onclick="reset()">Reset Session</button>
    </div>
    <div>
        <button onclick="doAdd()">Add To List</button>
    </div>
    <div>
        <h1>List of things</h1>
        <table class="table table-primary table-striped" id="targetTable">
        </table>
    <div>
</body>
</html>