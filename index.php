<?php
    require "system/Routing.php";
    $url = key($_GET);

    $r = new Router();
    $r->addRoute("/", "/dealflow/index.php");
    $r->addRoute("/catalog", "/Catalog/index.php");
    $r->addRoute("/profile", "/Profile/index.php");
    $r->addRoute("/signin", "/SignIn/index.html");
    $r->addRoute("/forgot", "/Forgot/index.html");
    $r->addRoute("/reset", "/Reset/index.html");
    $r->addRoute("/registre", "/Registre/index.html");
    $r->addRoute("/about", "/AboutUs/index.html");
    $r->addRoute("/help", "/Help/index.html");
    $r->addRoute("/services", "/Services/index.html");
    $r->addRoute("/partners", "/ForPartners/index.html");
    $r->addRoute("/orders", "/History/index.php");
    $r->addRoute("/favorites", "/Favorites/index.php");
    $r->addRoute("/order_plecement", "/orderPlecement/index.php");
    $r->addRoute("/profile_open", "/ProfileOpen/index.php");
    $r->addRoute("/catalog/ASUS_ROG_Strix_Scar_18", "/3html/index.php");
    $r->addRoute("/catalog/ASUS_ROG_Strix_Scar_18/features", "/Features/index.php");
    $r->addRoute("/catalog/ASUS_ROG_Strix_Scar_18/reviews", "/Reviews/index.php");
    $r->addRoute("/catalog/ASUS_ROG_Strix_Scar_18/questions", "/Questions/index.php");

    $r->route("/".$url);
?>