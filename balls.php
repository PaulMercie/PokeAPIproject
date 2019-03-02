<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poké Balls</title>
    <link href="style/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/pokeball.png" alt="pokeball"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
<div class="header">
    <h1 class="title">Poké Balls</h1>
    <!-- Form -->

    <form action="#" method="get">
        <input class="text" type="text" name="name" placeholder="Enter item name" value="">
        <input class="submit" type="submit" value="Go !">
    </form>
    <button class="switch"><a href="index.php" class="switchLink">Switch to Pokédex</a></button>
</div>
<!-- Results -->
<button class="switch" id="return"><a href="itemsList.php" class="switchLink"><</a></button>
<!-- Integration of all the php file needed  -->
<?php include 'itemsUrl.php' ?>
<?php include 'infos.php' ?>
<!-- -->
<div class="container">
<?php foreach($items as $key => $infos): 
    if($key < 16)
    { ?>
        <div class="itemsInfo menu-toggle">
        <img class="previewImg" src="<?= itemsSprite($infos->name, 2)?>">
        <span class="previewName"><?= ucfirst($infos->name) ?></span>
    </div>
    <div class="menuItems">
        <div class="innerItems">
            <div class="itemsDesciption">
                <img class="itemsImg" src="<?= itemsSprite($infos->name, 2)?>">
                <h1>Sheet of <?= ucfirst($infos->name) ?></h1>
            </div>
            <div>
                <p class="itemsText"><?= ucfirst(itemsTxtEntries($infos->name, 4))?></p>
                <p class="itemsTextDescription"><?= ucfirst(itemsEffect($infos->name, 3))?></p>
                <p class="category"><strong>Category :</strong> <?= ucfirst(itemsCategory($infos->name, 1))?></p>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
<?php endforeach; ?>
</div>
<script src="scripts/scriptItems.js"></script>
</body>
</html>