<?php 

namespace Controller;

use Model\Connect;

class CinemaController {

    public function listFilms(){
        $pdo = Connect::seConnecter();
            $requete = $pdo->query("SELECT id_film,nom_film,date_sortie FROM film");
        require "view/listFilms.php";
    }

    public function listActeurs(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT nom_personne,prenom_personne,date_naissance,sexe_personne FROM personne INNER JOIN acteur ON personne.id_personnage = acteur.id_personnage");
        require "view/listActeurs.php";
    }

    public function listRealisateurs(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT prenom_personne,nom_personne,date_naissance,sexe_personne FROM personne INNER JOIN realisateur ON personne.id_personnage = realisateur.id_personnage");
        require "view/listRealisateurs.php";
    }

    public function listRoles(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT nom_role FROM role ");
        require "view/listRoles.php";
    }

    public function listGenres(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT libelle FROM genre ");
        require "view/listGenres.php";
    }

    public function detailFilm($id){
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT * FROM film WHERE id_film = :id");
        $requete ->execute(["id"=> $id]);
        require "view/detailFilm.php";
    }
}