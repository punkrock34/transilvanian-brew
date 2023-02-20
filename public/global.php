<?php

    $base = "https://transilvanian-brew.herokuapp.com/";
    $url = $_SERVER['REQUEST_URI'];

    $lang = "ro";
    $page = str_replace($base, "", str_replace(".html", "", str_replace("/", "", $url)));

    if (strpos($url, 'index.php') !== false || strpos($url, 'index.html') !== false) {
        $url = str_replace("index.php", "", $url);
        $url = str_replace("index.html", "", $url);
    }
