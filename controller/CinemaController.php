<?php 

namespace Controller;

use Model\Connect;

class CinemaController {
    /**lister les films */

    public function listFilms(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT nom_film,date_sortie FROM film");
        require "view/listFilms.php";
    }

    public function listActeurs(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT nom_personne,prenom_personne FROM personne INNER JOIN acteur ON personne.id_personne = acteur.id_personne");
        require "view/listActeurs.php";
    }

    public function listRealisateurs(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT prenom_personne,nom_personne FROM personne INNER JOIN realisateur ON personne.id_personne = realisateur.id_personne");
        require "view/listRealisateurs.php";
    }
}