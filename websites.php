<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./website.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./header.css">
</head>

<body id="web">
    <?php include 'header.php' ?>
    <section class="info">
        <h1 style="color: black;">Créez votre site web personalisé</h1>
        <div class="pricing">
            <?php $id = 'classic'; $name = 'CLASSIC'; $price = 300; include 'webPlan.php' ?>
            <?php $id = 'premium'; $name = 'PREMIUM'; $price = 500; include 'webPlan.php' ?>
            <?php $id = 'pro'; $name = 'PRO'; $price = 400; include 'webPlan.php' ?>
        </div>
    </section>
    <script src="./headerPricing.js"></script>
</body>