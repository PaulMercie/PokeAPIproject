<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items</title>
    <link href="style/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/pokeball.png" alt="pokeball"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
<div class="header">
    <h1 class="title">Items</h1>
    <!-- Form -->

    <form action="#" method="get">
        <input class="text" type="text" name="name" placeholder="Enter item name" value="">
        <input class="submit" type="submit" value="Go !">
    </form>
    <button class="switch"><a href="index.php" class="switchLink">Switch to Pokédex</a></button>
</div>
<!-- Results -->
<div class="placement">
    <div class="menuList">
        <button class="switch"><a href="balls.php" class="switchLink">Balls</a></button>
        <button class="switch"><a href="potions.php" class="switchLink">Potions</a></button>
        <button class="switch"><a href="stones.php" class="switchLink">Stones/Other</a></button>
        <button class="switch"><a href="berries.php" class="switchLink">Berries</a></button>
        <button class="switch"><a href="objects.php" class="switchLink">Objects</a></button>
        <button class="switch"><a href="tm.php" class="switchLink">Tm/Hm</a></button>
        <button class="switch"><a href="useItems.php" class="switchLink">Use Items</a></button>
        <button class="switch"><a href="dataCard.php" class="switchLink">Data Card</a></button>
        <button class="switch"><a href="mails.php" class="switchLink">Mails</a></button>
        <button class="switch"><a href="gems.php" class="switchLink">Gems and Relics</a></button>
        <button class="switch"><a href="megaStones.php" class="switchLink">Mega-Stones</a></button>
        <button class="switch"><a href="zCrystals.php" class="switchLink">Z-crystals</a></button>
    </div>
</div>
<!-- Integration of all the php file needed  -->
<?php include 'itemsUrl.php' ?>
<?php include 'infos.php' ?>
<!-- -->

<script src="scripts/scriptItems.js"></script>
</body>
</html>