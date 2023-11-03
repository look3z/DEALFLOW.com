<?php

$userID = 1; 

$dsn = 'mysql:host=localhost;dbname=laptop_store';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);     // get_class($dbh) - клас PDO

$sth = $dbh->query("SELECT * FROM `users` WHERE `UserID` = " . $userID); 
$user = $sth->fetch(PDO::FETCH_ASSOC);

/*echo "<pre>";
print_r($orderInfo);*/