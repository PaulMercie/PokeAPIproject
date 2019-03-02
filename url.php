<?php
    // // Connection to dataBase
    // define('DB_HOST', 'localhost');
    // define('DB_PORT', '3306');
    // define('DB_NAME', 'pokeAPI');
    // define('DB_USER', 'root');
    // define('DB_PASS', 'root');

    // try
    // {
    //     // Try to connect to database
    //     $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASS);
    // }
    // catch (Exception $e)
    // {
    //     // Failed to connect
    //     die('Could not connect to database');
    // }

    // $query = $db->query('SELECT * FROM pokedex');
    // // Boucle exécuté tant que le fetch renvoie quelque chose
    // while($user = $query->fetch())
    // {
    //     // Affichage de la donnée
    //     echo '<pre>';
    //     print_r($user);
    //     echo '</pre>';
    // }

    // Create API url for count and name
    $url = 'https://pokeapi.co/api/v2/pokemon/?';
    $url .= http_build_query([
        'offset' => 0,
        'limit' => 151,
    ]);

    // Function to create urls when it's needed
    function createUrl($url, $index)
    {
        global $results;
        // Create cache info
        $cacheKey = md5($url);
        $cachePath = './cache/'.$cacheKey;
        $cacheUsed = false;

        // If cache available
        if(file_exists($cachePath))
        {
            $results[$index] = file_get_contents($cachePath);
            $cacheUsed = true;
        }
        
        // If cache not available
        else
        {
            // Make request to API
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            // Setup in order to fix windows error
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

            // Result of the request
            $results[$index] = curl_exec($curl);
            curl_close($curl);

            // Save in cache
            file_put_contents($cachePath, $results[$index]);
        }

        // Decode JSON
        $results[$index] = json_decode($results[$index]);
    };

    // Function to create new URL for each pokemons
    function createNewPokeUrl($pokemonName, $index)
    {
        global $results;
        // Creation of a new pokemon url to access to all of the data
        $pokemonUrl = 'https://pokeapi.co/api/v2/pokemon/';
        $pokemonUrl .= $pokemonName;
        createUrl($pokemonUrl, $index);
    }

    // Function to create new URL for each species
    function createNewSpeciesUrl($speciesPokemon, $index)
    {
        global $results;
        // Creation of a new species url to access to all of the data
        $speciesUrl = 'https://pokeapi.co/api/v2/pokemon-species/';
        $speciesUrl .= $speciesPokemon;
        createUrl($speciesUrl, $index);
    }

    // Creation of new url for the parameters picked in the first link
    createUrl($url, 0);

    $pokemon = $results[0]->results;
?>
