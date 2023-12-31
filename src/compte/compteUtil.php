<?php

namespace touiteur\compte;
require_once 'vendor/autoload.php';

class compteUtil
{
    //nom de l'utilisateur
    private String $nomUtil;

    //prenom de l'utilisateur
    private String $prenomUtil;

    //mot de passe de l'utilisateur
    private String $mdpUtil;

    //adresse email de l'utilisateur
    private String $emailUtil;

    public function __construct(String $nom, String $prenom, String $mdp, String $email){
        if (strlen($nom) > 50 || strlen($prenom) > 50){
            echo '<script>window.alert("nom ou prenom trop long (max 50 caractères)")</script>';
        }
        elseif (strlen($mdp) > 200){
            echo '<script>window.alert("mot de passe trop long (max 200 caractères)")</script>';
        }
        elseif (!str_contains($email, '@') || strlen($email) > 50){
            echo '<script>window.alert("email trop long (max 50 caractères) ou non valide (@ manquant)")</script>';
        }
        else{
            $this->nomUtil = $nom;
            $this->prenomUtil = $prenom;
            $this->mdpUtil = $mdp;
            $this->emailUtil = $email;
        }
    }

    /**
     * Methode magique get permetant de recupere les parametre proteger
     * @param string $at nom du parametre a recuperer
     * @return mixed type du parametre renvoye
     * @throws ex\InvalidePropety class d'exception sur les propiete invalide
     */
    public function __get(string $at): mixed
    {
        if (property_exists($this, $at)) {
            return $this->$at;
        } else {
            throw new ex\InvalidePropety("$at: invalide propety ");
        }
    }

}