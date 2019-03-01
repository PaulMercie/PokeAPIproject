<?php
    // Create API url for count and name
    $url = 'https://pokeapi.co/api/v2/item/?';
    $url .= http_build_query([
        'offset' => 0,
        'limit' => 954,
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

    // Function to create new links for each items
    function createNewItemsUrl($itemsName, $index)
    {
        global $results;
        // Creation of a new item url to access to all of the data
        $itemsUrl = 'https://pokeapi.co/api/v2/item/';
        $itemsUrl .= $itemsName;
        createUrl($itemsUrl, $index);
    }

    // Creation of new url for the parameters picked in the first link
    createUrl($url, 0);

    $items = $results[0]->results;
?>