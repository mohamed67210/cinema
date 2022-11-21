<?php

namespace Controller;

use Model\Connect;

class CinemaController
{

    public function listFilms()
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT id_film,nom_film,date_sortie FROM film");
        require "view/listFilms.php";
    }

    public function listActeurs()
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT * FROM personne INNER JOIN acteur ON personne.id_personne = acteur.id_personne");
        require "view/listActeurs.php";
    }

    public function listRealisateurs()
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT * FROM personne INNER JOIN realisateur ON personne.id_personne = realisateur.id_personne");
        require "view/listRealisateurs.php";
    }
    public function listReal()
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT * FROM personne INNER JOIN realisateur ON personne.id_personne = realisateur.id_personne");
        $requetegenre = $pdo->query("SELECT * FROM genre");
        require "view/formAjout/ajoutFilm.php";
    }

    public function listRoles()
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT * FROM role ");
        require "view/listRoles.php";
    }

    public function detailRole($id)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT
        nom_personne,prenom_personne
    FROM
        jouer
    INNER JOIN acteur
    ON jouer.id_acteur = acteur.id_acteur
    INNER JOIN personne 
    ON personne.id_personne = acteur.id_personne
    WHERE id_role = :id");
        $requete->execute(["id" => $id]);
        require "view/detailRole.php";
    }

    public function listGenres()
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("SELECT * FROM genre ");
        require "view/listGenres.php";
    }
    public function listGenresforFilm()
    {
        $pdo = Connect::seConnecter();
        $requetegenre = $pdo->query("SELECT * FROM genre");
        require "view/formAjout/ajoutFilm.php";
    }

    public function detailGenre($id)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT nom_film,date_sortie FROM film INNER JOIN appartenir ON film.id_film = appartenir.id_film WHERE id_genre = :id");
        $requete->execute(["id" => $id]);
        require "view/detailGenre.php";
    }

    public function detailFilm($id)
    {
        $pdo = Connect::seConnecter();
        // $requete = $pdo->prepare("SELECT * FROM film WHERE id_film = :id");
        $requete = $pdo->prepare("SELECT nom_film,YEAR(date_sortie),nom_personne,prenom_personne,affiche FROM  film INNER JOIN realisateur ON film.id_realisateur = realisateur.id_realisateur INNER JOIN personne 
        ON personne.id_personne=realisateur.id_personne WHERE id_film = :id");
        $requete->execute(["id" => $id]);
        $requeteCasting = $pdo->prepare("SELECT nom_personne,prenom_personne,nom_personnage FROM personne INNER JOIN acteur ON personne.id_personne=acteur.id_personne INNER JOIN jouer ON jouer.id_acteur = acteur.id_acteur INNER JOIN role ON jouer.id_role=role.id_role WHERE id_film = :id");
        $requeteCasting->execute(["id" => $id]);
        require "view/detailFilm.php";
    }

    public function detailRealisateur($id)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT * FROM personne INNER JOIN realisateur ON personne.id_personne = realisateur.id_personne WHERE id_realisateur = :id");
        $requete->execute(["id" => $id]);
        $requeteListFilms = $pdo->prepare("SELECT * FROM film INNER JOIN realisateur ON   realisateur.id_realisateur = film.id_realisateur WHERE id_personne = :id");
        $requeteListFilms->execute(["id" => $id]);
        require "view/detailRealisateur.php";
    }

    public function detailActeur($id)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT * FROM personne INNER JOIN acteur ON personne.id_personne = acteur.id_personne WHERE id_acteur = :id");
        $requete->execute(["id" => $id]);
        $requeteListFilms = $pdo->prepare("SELECT nom_film,date_sortie FROM film INNER JOIN jouer ON film.id_film = jouer.id_film WHERE id_acteur = :id");
        $requeteListFilms->execute(["id" => $id]);
        require "view/detailActeur.php";
    }

    public function formAjoutActeur()
    {
        require 'view/formAjout/ajoutActeur.php';
    }

    public function ajoutPersonne($nom, $prenom, $dn, $sexe)
    {
        $pdo = Connect::seConnecter();
        $requetePersonne = $pdo->prepare("INSERT INTO personne VALUES('',:nom,:prenom,:dn,:sexe)");
        $requetePersonne->execute([
            "nom" => $nom,
            "prenom" => $prenom,
            "dn" => $dn,
            "sexe" => $sexe
        ]);
        // require 'view/formAjout/ajoutActeur.php';
    }

    public function ajoutActeur()
    {
        $pdo = Connect::seConnecter();
        $requetePersonne = $pdo->query("INSERT INTO acteur(id_personne) SELECT MAX(id_personne) FROM personne");
        require 'view/formAjout/ajoutActeur.php';
    }

    public function formAjoutRealisateur()
    {
        require 'view/formAjout/ajoutRealisateur.php';
    }

    public function ajoutRealisateur()
    {
        $pdo = Connect::seConnecter();
        $requetePersonne = $pdo->query("INSERT INTO realisateur(id_personne) SELECT MAX(id_personne) FROM personne");
        require 'view/formAjout/ajoutRealisateur.php';
    }

    public function formAjoutGenre()
    {
        require 'view/formAjout/ajoutGenre.php';
    }

    public function ajoutGenre($libelle)
    {
        $pdo = Connect::seConnecter();
        $requeteGenre = $pdo->prepare("INSERT INTO Genre VALUES('',:libelle)");
        $requeteGenre->execute(['libelle' => $libelle]);
        require 'view/formAjout/ajoutRealisateur.php';
    }

    public function formAjoutFilm()
    {
        require 'view/formAjout/ajoutFilm.php';
    }

    public function ajoutFilm($titre, $date, $duree, $resumee, $realisateur,$affiche)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("INSERT INTO film VALUES('',:nom_film,:date_sortie,:duree_minute,:resumee_film,:id_realisateur,:affiche)");
        $requete->execute([
            'nom_film' => $titre,
            'date_sortie' => $date,
            'duree_minute' => $duree,
            'resumee_film' => $resumee,
            'id_realisateur' => $realisateur,
            'affiche' => $affiche
        ]);
        require 'view/formAjout/ajoutFilm.php';
    }
    public function choixGenre($genre)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("INSERT INTO appartenir (id_film,id_genre) VALUES((SELECT MAX(id_film) FROM film),:genre)");
        $requete->execute(['genre' => $genre]);
    }
}
