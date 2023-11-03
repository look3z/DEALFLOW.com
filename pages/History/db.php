<?php

$userID = 1; 
//$orderID = 1; 

$dsn = 'mysql:host=localhost;dbname=laptop_store';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);     // get_class($dbh) - клас PDO

$sth = $dbh->query("SELECT * FROM `users` WHERE `UserID` = " . $userID); 
$user = $sth->fetch(PDO::FETCH_ASSOC);


$sth = $dbh->query("SELECT `p`.`Price`, `p`.`ImageURL`, `op`.*, `o`.`OrderID`, `o`.`UserID`, `o`.`OrderDate`, `u`.`UserID` , `os`.`OrderID`, `os`.`ShipmentStatusID`, `ss`.*
FROM `products` as `p`
INNER JOIN `orderproducts` as `op` ON `p`.`ProductID` = `op`.`ProductID`
INNER JOIN `orders` as `o` ON `o`.`OrderID` = `op`.`ProductID`
INNER JOIN `ordershipments` as `os` ON `os`.`OrderID` = `o`.`OrderID`
INNER JOIN `shipmentstatus` as `ss` ON `ss`.`ShipmentStatusID` = `os`.`ShipmentStatusID`
INNER JOIN `users` as `u` ON `u`.`UserID` = `o`.`UserID` WHERE `u`.`UserID` = " . $userID); 
$historyInfo = $sth->fetchAll(PDO::FETCH_ASSOC);

/*echo "<pre>";
print_r($historyInfo);*/

/*SELECT `p`.`Price`, `p`.`ImageURL`, `op`.*, `o`.`OrderID`, `o`.`UserID`, `u`.`UserID` , `os`.`OrderID`, `os`.`ShipmentStatusID`, `ss`.*
FROM `products` as `p`
INNER JOIN `orderproducts` as `op` ON `p`.`ProductID` = `op`.`ProductID`, `op`.`ProductID` = `o`.`OrderID`
INNER JOIN `orders` as `o` ON `o`.`OrderID` = `os`.`OrderID`
INNER JOIN `users` as `u` ON `u`.`UserID` = `o`.`UserID`
INNER JOIN `ordershipments` as `os` ON `os`.`ShipmentStatusID` = `ss`.`ShipmentStatusID`
INNER JOIN `shipmentstatus` as `ss`



SELECT `p`.`Price`, `p`.`ImageURL`, `op`.*, `o`.`OrderID`, `o`.`UserID`, `u`.`UserID` , `os`.`OrderID`, `os`.`ShipmentStatusID`, `ss`.*
FROM `products` as `p`
INNER JOIN `orderproducts` as `op` ON `p`.`ProductID` = `op`.`ProductID`
INNER JOIN `orders` as `o` ON `o`.`OrderID` = `op`.`ProductID`
INNER JOIN `users` as `u` ON `u`.`UserID` = `o`.`UserID`
INNER JOIN `ordershipments` as `os` ON `os`.`OrderID` = `o`.`OrderID`
INNER JOIN `shipmentstatus` as `ss` ON `ss`.`ShipmentStatusID` = `os`.`ShipmentStatusID`


SELECT `p`.`Price`, `p`.`ImageURL`, `op`.*, `o`.`OrderID`, `o`.`UserID`, `o`.`OrderDate`, `u`.`UserID` , `os`.`OrderID`, `os`.`ShipmentStatusID`, `ss`.*
FROM `products` as `p`
INNER JOIN `orderproducts` as `op` ON `p`.`ProductID` = `op`.`ProductID`
INNER JOIN `orders` as `o` ON `o`.`OrderID` = `op`.`ProductID`
INNER JOIN `ordershipments` as `os` ON `os`.`OrderID` = `o`.`OrderID`
INNER JOIN `shipmentstatus` as `ss` ON `ss`.`ShipmentStatusID` = `os`.`ShipmentStatusID`
INNER JOIN `users` as `u` ON `u`.`UserID` = `o`.`UserID` WHERE `u`.`UserID` = 1*/