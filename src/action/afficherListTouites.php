<?php

namespace touiteur\action;

require_once 'vendor/autoload.php';

class afficherListTouites{
    public function __construct()
    {

    }

    public function execute():string
    {
        $pdo = \touiteur\bd\ConnectionFactory::makeConnection();
        $s= "<h2>Affiche les touite les plus recent</h2></br>";

        $query = $pdo->query('SELECT * FROM `touite` ORDER BY datePubli desc');
        $s=$s."<div>";
        while ($data = $query->fetch()) {
             $s= $s."<br>".$data['idTouite']." ".$data['idUtil']."</br>".$data['contenue'] ."</br>"."Likes : ".$data['note']." "."date :".$data['datePubli']."</br></div>";
        }
        $s=$s."</div>";
        return $s;
    }
}