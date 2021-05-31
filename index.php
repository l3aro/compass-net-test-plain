<?php

require_once 'vendor/autoload.php';
require_once 'Seller.php';
require_once 'Buyer.php';

$seller = new Seller;
echo "\t* a seller name: $seller->name</br></br>";
echo "\t* a seller array data: ";
print_r($seller);
echo "<br/><br/>";
echo "\t* a seller json data: ";
print_r(json_encode($seller));
echo "<br/><br/>";
$sellers = array_map(fn () => (new Seller), range(1, 5));
echo "\t* list sellers name: ";
echo implode(', ', array_map(fn ($seller) => $seller->name, $sellers));
echo "<br/><br/>";
echo "\t* list sellers array data: ";
print_r($sellers);
echo "<br/><br/>";
echo "\t* list sellers json data: ";
print_r(json_encode($sellers));
echo "<hr/>";

$buyer = new Buyer;
echo "\t* a buyer array data: ";
print_r($buyer);
echo "<br/><br/>";
echo "\t* a buyer json data: ";
print_r(json_encode($buyer));
echo "<br/><br/>";
$buyers = array_map(fn () => (new Buyer), range(1, 5));
echo "\t* list buyers array data: ";
print_r($buyers);
echo "<br/><br/>";
echo "\t* list buyers json data: ";
print_r(json_encode($buyers));
