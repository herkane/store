<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./host.css">
    <link rel="stylesheet" href="./header.css">
</head>
<body id="hosting" style="background-color: blueviolet;">
    <?php include './header.php' ?>
    <section class="info">
        <h1>Hébergez votre site web avec nos plans</h1>
        <div class="pricing">
            <?php $id = 'beginner'; $plan = 'Beginner'; $price = 300;include 'hosts.php' ?>
            <?php $id = 'medium'; $plan = 'Medium'; $price = 400; include 'hosts.php' ?>
            <?php $id = 'pro'; $plan = 'Pro'; $price = 500; include 'hosts.php' ?>
        </div>
    </section>
    <script src="./headerPricing.js"></script>
</body>