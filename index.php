<?php
require('vendor/autoload.php');

use aitsydney\Product;
$products = new Product();
$products_result = $products -> getProducts();

//create twig loader
$loader = new Twig_Loader_Filesystem('templates');

//create twin environment
$twig = new Twig_Environment($loader);

//load a twig template
$template = $twig -> load('home.twig');

//pass values to twig
echo $template ->render([
    'products' => $products_result,
    'title' => 'Hello shop'
]);
?>
