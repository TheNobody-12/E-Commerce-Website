<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h3>Welcome to Registration site</h3>
    <form action="registration.php" method="post">
        <label for="name">Username</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>