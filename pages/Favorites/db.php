<?php

$userID = 1;
$productID = 3;  

$dsn = 'mysql:host=localhost;dbname=laptop_store';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);     // get_class($dbh) - клас PDO

$sth = $dbh->query("SELECT `p`.`Model`, `p`.`Price`, `p`.`ImageURL` 
FROM `products` as `p` 
INNER JOIN `users` as `u` ON `u`.`UserID` = $userID  
INNER JOIN `favoriteproducts` as `fp` ON `fp`.ProductID = `p`.`ProductID` AND `fp`.`UserID` = `u`.`UserID` "); 
$favorites = $sth->fetchAll(PDO::FETCH_ASSOC);

$sth = $dbh->query("SELECT `pd`.`DiscountPercentage`
FROM `productdiscounts` as `pd` WHERE `pd`.`ProductID` = " . $productID); 
$ds = $sth->fetch(PDO::FETCH_ASSOC);

/*echo "<pre>";
print_r($favorites);*/