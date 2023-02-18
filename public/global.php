<?php

    $base = "https://transilvanian-brew.herokuapp.com/";
    $url = $_SERVER['REQUEST_URI'];

    $lang = "ro";

    if (strpos($url, 'index.php') !== false || strpos($url, 'index.html') !== false) {
        $url = str_replace("index.php", "", $url);
        $url = str_replace("index.html", "", $url);
    }
