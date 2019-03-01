<?php

// Get front sprite of each pokemon
function pokemonSprite($pokemonName, $index)
{
    global $results;
    createNewPokeUrl($pokemonName, $index);
    $pokemonSprite = $results[$index]->sprites->front_default;
    return $pokemonSprite;
}

// Get ID of each pokemon
function pokemonId($pokemonName, $index)
{
    global $results;
    createNewPokeUrl($pokemonName, $index);
    $pokemonId = $results[$index]->id;
    return $pokemonId;
}

// Get BaseExp of each pokemon
function pokemonBaseExp($pokemonName, $index)
{
    global $results;
    createNewPokeUrl($pokemonName, $index);
    $pokemonBaseExp = $results[$index]->base_experience;
    return $pokemonBaseExp;
}

//////// Don't work well (jumping numbers on listing)
// Get Order of each pokemon
function pokemonOrder($pokemonName, $index)
{
    global $results;
    createNewPokeUrl($pokemonName, $index);
    $pokemonOrder = $results[$index]->order;
    return $pokemonOrder;
}

// Get Types of each pokemon

function pokemonTypes($pokemonName, $index)
{
    $types = "";
    global $results;
    createNewPokeUrl($pokemonName, $index);
    $pokemonTypes = $results[$index]->types;
    // Creating foreach in order to get all the infos on the tab
    foreach($pokemonTypes as $pokemonType):
    $types .= ucfirst($pokemonType->type->name);
    $types .= " ";
    endforeach;
    return $types;
}

// Get Abilities of each pokemon
function pokemonAbilities($pokemonName, $index)
{
    $abilities = "";
    global $results;
    createNewPokeUrl($pokemonName, $index);
    $pokemonAbilities = $results[$index]->abilities;
    // Creating foreach in order to get all the infos on the tab
    foreach($pokemonAbilities as $pokemonAbility):
    $abilities .= ucfirst($pokemonAbility->ability->name);
    $abilities .= " ";
    endforeach;
    return $abilities;
}

// Get Height of each pokemon
function pokemonHeight($pokemonName, $index)
{
    global $results;
    createNewPokeUrl($pokemonName, $index);
    $pokemonHeight = $results[$index]->height;
    return $pokemonHeight;
}

// Get Weight of each pokemon
function pokemonWeight($pokemonName, $index)
{
    global $results;
    createNewPokeUrl($pokemonName, $index);
    $pokemonWeight = $results[$index]->weight;
    return $pokemonWeight;
}

// Get Species of each pokemon
function pokemonSpecies($speciesPokemon, $index)
{
    global $results;
    createNewSpeciesUrl($speciesPokemon, $index);
    $pokemonSpecies = $results[$index]->color->name;
    return $pokemonSpecies;
}

// Get Shape on Species of each pokemon
function pokemonShape($speciesPokemon, $index)
{
    global $results;
    createNewSpeciesUrl($speciesPokemon, $index);
    $pokemonShape = $results[$index]->shape->name;
    return $pokemonShape;
}

// Get Happiness on Species of each pokemon
function pokemonHappiness($speciesPokemon, $index)
{
    global $results;
    createNewSpeciesUrl($speciesPokemon, $index);
    $pokemonHappiness = $results[$index]->base_happiness;
    return $pokemonHappiness;
}

// Get Habitat on Species of each pokemon
function pokemonHabitat($speciesPokemon, $index)
{
    global $results;
    createNewSpeciesUrl($speciesPokemon, $index);
    $pokemonHabitat = $results[$index]->habitat->name;
    return $pokemonHabitat;
}

// Get Txt on Species of each pokemon
function pokemonTxt($speciesPokemon, $index)
{
    global $results;
    createNewSpeciesUrl($speciesPokemon, $index);
    $pokemonTxt = $results[$index]->flavor_text_entries[1]->flavor_text;
    return $pokemonTxt;
}

// Get CaptureRate on Species of each pokemon
function pokemonCaptureRate($speciesPokemon, $index)
{
    global $results;
    createNewSpeciesUrl($speciesPokemon, $index);
    $pokemonCaptureRate = $results[$index]->capture_rate;
    return $pokemonCaptureRate;
}

////////////////////////////////////////////// ITEM PAGE ////////////////////////////////////////////////

// Get Sprites of each items
function itemsSprite($itemsName, $index)
{
    global $results;
    createNewItemsUrl($itemsName, $index);
    $itemsSprite = $results[$index]->sprites->default;
    return $itemsSprite;
}

// Get Effect of each items
function itemsEffect($itemsName, $index)
{
    global $results;
    createNewItemsUrl($itemsName, $index);
    $itemsEffect = $results[$index]->effect_entries[0]->effect;
    return $itemsEffect;
}

// Get Category of each items
function itemsCategory($itemsName, $index)
{
    global $results;
    createNewItemsUrl($itemsName, $index);
    $itemsCategory = $results[$index]->category->name;
    return $itemsCategory;
}

// Get txtEntries of each items
function itemsTxtEntries($itemsName, $index)
{
    global $results;
    createNewItemsUrl($itemsName, $index);
    $itemsTxtEntries = $results[$index]->flavor_text_entries[2]->text;
    return $itemsTxtEntries;
}

?>