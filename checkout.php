<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./checkout.css">
    <link rel="stylesheet" href="./header.css">
</head>

<body style="background-color: violet;" onload=updateCheckoutPrice(),addToCheckout()>
    <?php include 'header.php' ?>
    <div class="checkout" id="checkout">
        <div class="cart">
            <?php $id = 'domaines'; $title = 'Domain'; include 'checkoutItem.php' ?>
            <?php $id = 'hosting'; $title = 'Host'; include 'checkoutItem.php' ?>
            <?php $id = 'web'; $title = 'Web'; include 'checkoutItem.php' ?>
        </div>
        <div class="price">
            <h1 id="total">Rien a payer</h1>
            <button>Payer</button>
            <button id="annuler" onclick=reset()>Annuler commande</button>
        </div>
    </div>

    <script src="./headerPricing.js"></script>
</body>