<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokédex</title>
    <link href="style/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/pokeball.png" alt="pokeball"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
<div class="header">
    <h1 class="title">Pokédex</h1>
    <!-- Form -->

    <form action="#" method="get">
        <input class="text" type="text" name="name" placeholder="Enter pokemon name" value="">
        <input class="submit" type="submit" value="Go !">
    </form>
    <button class="switch"><a href="itemsList.php" class="switchLink">Switch to Items</a></button>
</div>
<!-- Results -->

<!-- Integration of all the php file needed  -->
<?php include 'url.php' ?>
<?php include 'infos.php' ?>
<!-- -->
<div class="container">
<?php foreach($pokemon as $infos): ?>
    <div class="pokemonInfo menu-toggle">
        <p><?= pokemonId($infos->name, 1)?></p>
        <img src="<?= pokemonSprite($infos->name, 2)?>">
        <span><?= ucfirst($infos->name) ?></span>
    </div>
    <div class="menu">
        <div class="inner">
            <div class="pokeInfos">
                <p class="number"><?= pokemonId($infos->name, 1)?></p>
                <img class="pokeImg" src="<?= pokemonSprite($infos->name, 2)?>">
                <h1>Sheet of <?= ucfirst($infos->name) ?></h1>
            </div>
            <p class="blocTxt"><?= pokemonTxt($infos->name, 13)?></p>
            <div class="blocInfos">
                <div>
                    <p><strong>Color : </strong><?= ucfirst(pokemonSpecies($infos->name, 10))?></p>
                    <p><strong>Types : </strong><?= pokemonTypes($infos->name, 5)?></p>
                    <p><strong>Abilities : </strong><?= pokemonAbilities($infos->name, 6)?></p>
                    <p><strong>Height : </strong><?= pokemonHeight($infos->name, 7)?> dm</p>
                    <p><strong>Weight : </strong><?= pokemonWeight($infos->name, 8)?> hg</p>
                </div>
                <div>
                    <p><strong>Shape : </strong><?= ucfirst(pokemonShape($infos->name, 11))?></p>
                    <p><strong>Habitat : </strong><?= ucfirst(pokemonHabitat($infos->name, 12))?></p>
                    <p><strong>Base Happiness : </strong><?= pokemonHappiness($infos->name, 9)?></p>
                    <p><strong>Base Experience : </strong><?= pokemonBaseExp($infos->name, 3)?></p>
                    <p><strong>Capture Rate : </strong><?= pokemonCaptureRate($infos->name, 14)?></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<script src="scripts/script.js"></script>
</body>
</html> 