<?php

$catalogID = 1;
$categoriesID = 1;  

$dsn = 'mysql:host=localhost;dbname=laptop_store';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);     // get_class($dbh) - клас PDO

$sth = $dbh->query("SELECT `p`.*, `pd`.`DiscountPercentage`
FROM `products` as `p`
INNER JOIN `productdiscounts` as `pd` ON `pd`.`ProductID` = `p`.`ProductID`
WHERE `p`.`CategoryID` =  " . $catalogID); 
$product = $sth->fetchAll(PDO::FETCH_ASSOC);

$sth = $dbh->query("SELECT `c`.`CategoryName`
FROM `categories` as `c`
WHERE `c`.`CategoryID` =  " . $categoriesID); 
$categories = $sth->fetch(PDO::FETCH_ASSOC);

/*echo "<pre>";
print_r($product);

/*SELECT `p`.*, `pd`.`DiscountPercentage`
FROM `products` as `p`
INNER JOIN `productdiscounts` as `pd` ON `pd`.`ProductID` = `p`.`ProductID`
WHERE `p`.`CategoryID` = 1
<?= $product[2]['Price'] ?>*/
