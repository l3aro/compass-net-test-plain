<?php

require_once 'vendor/autoload.php';
require_once 'Seller.php';
require_once 'Buyer.php';

$seller = new Seller;
echo $seller->name;
echo "<br/>";
print_r($seller);
echo "<br/>";
print_r(json_encode($seller));
echo "<br/>";
$sellers = array_map(fn () => (new Seller), range(1, 5));
print_r($sellers);
echo "<br/>";
print_r(json_encode($sellers));
echo "<hr/>";

$buyer = new Buyer;
print_r($buyer);
echo "<br/>";
print_r(json_encode($buyer));
echo "<br/>";
$buyers = array_map(fn () => (new Buyer), range(1, 5));
print_r($buyers);
echo "<br/>";
print_r(json_encode($buyers));
