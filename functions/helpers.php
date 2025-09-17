<?php
//  config for the main system
const BASE_URL = "http://localhost/veblog/";
function redirect($url)
{
    header("location: " . trim(BASE_URL, '/') . '/' . trim($url, '/'));
    exit;
};
function assets($file)
{
    return trim(BASE_URL, '/' . '/' . trim($file, '/'));
}
function url($url)
{
    return trim(BASE_URL, '/' . '/' . trim($url, '/')); // یو آر ال مارو جایی نمیبره برعکس ریدایرکت این برای مثلا کلیک کردن روی دکمه هاس
    // که میخوام مثلا برم توی صفحه پست
}
function dd($var)
{ // dump and die=> we use the var_dump in the normal this is the var_dump and die the program
    var_dump($var);
    exit;
}
