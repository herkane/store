<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Domaines</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./domaine.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./header.css">

</head>

<body>
<?php include 'header.php' ?>
<section class="info" id="information">
        <h1>Enregistrez votre nom de domaine</h1>
        <div class="search">
            <input type="search" placeholder="Tapez un nom de domaine" id="search" required>
            <select id="extensions">
            <option value=".com">.com</option>
            <option value=".net">.net</option>
            <option value=".info">.info</option>
            <option value=".org">.org</option>
        </select>
            <button id="searchButton">Chercher</button>
        </div>
        <div class="pricing" id="pricing">
            <div class="com" id="com" onclick=addDomain(this.id)>
                <h1>.com</h1>
                <h2>Avec SSL</h2>
                <h3 id="price">120 MAD/an</h3>
                <button>Acheter</button>
            </div>
            <div class="ma" id="ma" onclick=addDomain(this.id)>
                <h1>.info</h1>
                <h2>Avec SSL</h2>
                <h3 id="price">130 MAD/an</h3>
                <button>Acheter</button>
            </div>
            <div class="org" id="org" onclick=addDomain(this.id)>
                <h1>.org</h1>
                <h2>Avec SSL</h2>
                <h3 id="price">140 MAD/an</h3>
                <button>Acheter</button>
            </div>
            <div class="net" id="net" onclick=addDomain(this.id)>
                <h1>.net</h1>
                <h2>Avec SSL</h2>
                <h3 id="price">100 MAD/an</h3>
                <button>Acheter</button>
            </div>
        </div>
    </section>
    <script src="./headerPricing.js"></script>
</body>

</html>