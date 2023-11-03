<?php

$productID = 4;  

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

$sth = $dbh->query("SELECT `pi`.`ImageURL` 
FROM `productimages` as `pi`  
WHERE `pi`.`ProductID` =" . $productID); 
$image = $sth->fetchAll(PDO::FETCH_ASSOC);



$description = $product['Description'];
// Разбиваем описание на абзацы
$paragraphs = explode("\n", $description);
/*echo $paragraphs[0];

echo "<pre>";
print_r($similar); /*<img class="play-stream-and" src="img/play-stream-and-create-the-scar-series-laptops-are-designed-wi.png" />
SELECT `pi`.`ImageURL` 
FROM `productimages` as `pi`  
WHERE `pi`.`ProductID` = 4
*/