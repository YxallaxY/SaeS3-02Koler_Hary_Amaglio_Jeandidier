<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Touiteur</title>
    <link rel="stylesheet" type
    "text/css" href="style.css">
</head>
<body>
<h1>Touiteur</h1>


<?php

require_once "vendor/autoload.php";


\touiteur\bd\ConnectionFactory::setConfig("conf/bd.ini");

$dispach = new \touiteur\dispatch\dispatcher();
$dispach->run();