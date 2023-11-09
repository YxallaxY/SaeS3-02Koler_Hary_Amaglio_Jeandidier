<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Touiteur</title>
    <link rel="stylesheet" type
    "text/css" href="style.css">

</head>


<body>
<header>
    <div class="d1"><h1>Touiteur</h1></div>
    <div class="d2">
        <a href="src/pages/connexion.php?action=connexion">
            <button class="bouton">connexion</button>
        </a>
        <a href="src/pages/connexion.php?action=inscription">
            <button class="bouton">inscription</button>
        </a>
    </div>

</header>

<div class="main">
    <nav>
        <a href="?action=afficherListTouites">
            <button>Afficher la liste des derniers Touites</button>
        </a>
    </nav>
    <section>
        <br>


        <?php

        require_once "vendor/autoload.php";


        \touiteur\bd\ConnectionFactory::setConfig("conf/bd.ini");

        $dispach = new \touiteur\dispatch\dispatcher();
        $dispach->run(); ?>
    </section>
</div>