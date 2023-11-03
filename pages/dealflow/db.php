<?php  

$dsn = 'mysql:host=localhost;dbname=laptop_store';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);     // get_class($dbh) - клас PDO

$sth = $dbh->query("SELECT `p`.`Model`, `p`.`Price`, `p`.`ImageURL`
FROM `products` as `p` 
INNER JOIN `popularproducts` as `pp` ON `pp`.`ProductID` = `p`.`ProductID`" ); 
$popular = $sth->fetchAll(PDO::FETCH_ASSOC);

$sth = $dbh->query("SELECT `p`.`Model`, `p`.`Price`, `p`.`ImageURL`
FROM `products` as `p` 
INNER JOIN `newproducts` as `np` ON `np`.`ProductID` = `p`.`ProductID`"); 
$new = $sth->fetchAll(PDO::FETCH_ASSOC);

$sth = $dbh->query("SELECT `p`.`Model`, `p`.`Price`, `p`.`ImageURL`, `pd`.`DiscountPercentage` 
FROM `products` as `p` 
INNER JOIN `productdiscounts` as `pd` ON `pd`.`ProductID` = `p`.`ProductID` AND `pd`.`DiscountID` > 4"); 
$ds = $sth->fetchAll(PDO::FETCH_ASSOC);

/*echo "<pre>";
print_r($discount);*/