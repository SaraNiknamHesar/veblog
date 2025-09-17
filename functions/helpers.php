<?php
//  config for the main system
const BASE_URL = "http://localhost/veblog/";
function redirect($url)
{
    header("location: " . BASE_URL . $url);
    exit;
};
redirect("functions/pdo_connection.php");
