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
}