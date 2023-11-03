<?php

$productID = 4;
$userID = 2;  

$dsn = 'mysql:host=localhost;dbname=laptop_store';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);     // get_class($dbh) - клас PDO

$sth = $dbh->query("SELECT `p`.`Model`, `p`.`Price`, `p`.`ImageURL`
FROM `products` as `p` 
INNER JOIN `popularproducts` as `pp` ON `pp`.`ProductID` = `p`.`ProductID`" ); 
$similar = $sth->fetchAll(PDO::FETCH_ASSOC);

$sth = $dbh->query("SELECT `p`.*, `pd`.`DiscountPercentage` 
FROM `products` as `p` 
INNER JOIN `productdiscounts` as `pd` ON `p`.`ProductID` = `pd`.`ProductID` 
WHERE `p`.`ProductID` = " . $productID); 
$product = $sth->fetch(PDO::FETCH_ASSOC);

$sth = $dbh->query("SELECT `pc`.*, `u`.`UserName`
FROM `productcomments` as `pc`
INNER JOIN `users` as `u` ON `u`.`UserID` = $userID
WHERE `pc`.`ProductID` = $productID AND `pc`.`UserID` = `u`.`UserID`"); 
$questions = $sth->fetchAll(PDO::FETCH_ASSOC);


/*echo "<pre>";
print_r($questions);*/