<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>175Cookies</title>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/style-phone.css">
    </head>
    
    <body>
        
    <header>
        <ul>
            <li class="phone-hidden"><a href="listing.php">Produits</a></li>
            <li class="phone-hidden"><a href="index.php">Accueil</a></li>
            <li class="header-logo-li"><a href="index.php" class="header-logo-a"><img src="public/img-layout/<?php if(basename($_SERVER['PHP_SELF']) == 'index.php') { ?>logo-white.png<?php } else { ?>logo-grey.png<?php } ?>" alt="logo"></a></li>
            <li class="phone-hidden"><a href="#">Panier</a></li>
            <li class="phone-hidden"><a href="#">Mon compte</a></li>
        </ul>
        
        <div class="burger-menu-icon-container">
            <img src="public/img-layout/burger-white.png" alt="burger-menu" class="burger-menu-icon desktop-hidden burger-menu-icon-show">
        </div>
    </header>
    
    <div class="bg-menu-container">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="listing.php">Produits</a></li>
            <li><a href="#">Panier</a></li>
            <li><a href="#">Mon compte</a></li>
        </ul>
    </div>
    
    <div class="container">