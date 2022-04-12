<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./signin.css">
</head>

<body>
    <?php include 'header.php' ?>
    <div class="signin">
        <form action="login.php" method='POST'>
            <h1>Sign In</h1>
            <input type="text" name="user" id="user" placeholder="username" required>
            <input type="password" name="password" id="password" placeholder="password" required>
            <input type="submit" value="Sign In">
        </form>
    </div>
    <script src="./headerPricing.js"></script>
</body>