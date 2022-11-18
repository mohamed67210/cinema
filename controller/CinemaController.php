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
        $requete = $pdo->query("SELECT * FROM personne INNER JOIN acteur ON personne.id_personne = acteur.id_personne");
        require "view/listActeurs.php";
    }

    public function listRealisateurs(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT * FROM personne INNER JOIN realisateur ON personne.id_personne = realisateur.id_personne");
        require "view/listRealisateurs.php";
    }

    public function listRoles(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT * FROM role ");
        require "view/listRoles.php";
    }

    public function listGenres(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT * FROM genre ");
        require "view/listGenres.php";
    }

    public function detailFilm($id){
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT * FROM film WHERE id_film = :id");
        $requete ->execute(["id"=> $id]);
        require "view/detailFilm.php";
    }

    public function detailRealisateur($id){
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT * FROM personne INNER JOIN realisateur ON personne.id_personne = realisateur.id_personne WHERE id_realisateur = :id");
        $requete ->execute(["id" => $id]);
        require "view/detailRealisateur.php";
    }

    public function detailActeur($id){
        $pdo = Connect::seConnecter();
        $requete = $pdo -> prepare("SELECT * FROM personne INNER JOIN acteur ON personne.id_personne = acteur.id_personne WHERE id_acteur = :id");
        $requete -> execute(["id" => $id]);
        require "view/detailActeur.php";
    }
}