<?php

$userID = 1; 
$orderID = 1; 

$dsn = 'mysql:host=localhost;dbname=laptop_store';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);     // get_class($dbh) - клас PDO

$sth = $dbh->query("SELECT * FROM `users` WHERE `UserID` = " . $userID); 
$user = $sth->fetch(PDO::FETCH_ASSOC);

$sth = $dbh->query("SELECT * FROM `useraddresses` WHERE `UserID` = " . $userID); 
$userAddress = $sth->fetch(PDO::FETCH_ASSOC);

$sth = $dbh->query("SELECT * FROM `orders` WHERE `UserID` =  " . $userID); 
$orderNumber = $sth->fetch(PDO::FETCH_ASSOC);

$sth = $dbh->query("SELECT `p`.*, `op`.`Quantity`, `pd`.`DiscountPercentage`
FROM `products` AS `p` 
INNER JOIN `productdiscounts` as `pd` ON `p`.`ProductID`=`pd`.`ProductID`
INNER JOIN `orderproducts` as `op` ON `p`.`ProductID`=`op`.`ProductID`
WHERE `op`.`OrderID`= " . $orderID); 
$orderInfo = $sth->fetch(PDO::FETCH_ASSOC);

$sth = $dbh->query("SELECT `sm`.* 
FROM `shippingmethods` as `sm` 
INNER JOIN `ordershipments` as `os` ON `os`.`ShippingID` = `sm`.`ShippingID` AND `os`.`OrderID` = " . $orderID); 
$shipping = $sth->fetch(PDO::FETCH_ASSOC);

/*echo "<pre>";
print_r($orderInfo);*/