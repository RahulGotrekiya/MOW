<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Meals on Wheels</title>
</head>

<body>

    <div class="container">
        <h1>Welcome to Meals on Wheels</h1><br>
        <a href="logout.php" class="btn btn-warning" style="background-color: #09365B;color: #fff;border-radius: 50px;padding: 10px 30px;font-weight: 600;">Logout</a>
    </div>



</body>

</html>