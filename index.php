<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : null;
$nom = (isset($_GET["nom_acteur"])) ? $_GET["nom_acteur"] : null;
$prenom = (isset($_GET["prenom_acteur"])) ? $_GET["prenom_acteur"] : null;
$dn = (isset($_GET["date_naissance_acteur"])) ? $_GET["date_naissance_acteur"] : null;
$sexe = (isset($_GET["sexe_acteur"])) ? $_GET["sexe_acteur"] : null;
// pour ajouter genre
$libelle = (isset($_GET["libelle"])) ? $_GET["libelle"] : null;
// pour ajouter film
$titre = (isset($_GET["nom_film"])) ? $_GET["nom_film"] : null;
$date = (isset($_GET["date_sortie_film"])) ? $_GET["date_sortie_film"] : null;
$duree = (isset($_GET["duree_minutes_film"])) ? $_GET["duree_minutes_film"] : null;
$resumee = (isset($_GET["resumee_film"])) ? $_GET["resumee_film"] : null;
$realisateur = (isset($_GET["realisateur"])) ? $_GET["realisateur"] : null;
$genre = (isset($_GET["genre"])) ? $_GET["genre"] : null;



use Controller\CinemaController;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$ctrlCinema = new CinemaController();

if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case 'listFilms':
            $ctrlCinema->listFilms();
            break;
        case 'listActeurs':
            $ctrlCinema->listActeurs();
            break;
        case 'listRealisateurs':
            $ctrlCinema->listRealisateurs();
            break;
        case 'listRoles':
            $ctrlCinema->listRoles();
            break;
        case 'listGenres':
            $ctrlCinema->listGenres();
            break;
        case 'detailFilm':
            $ctrlCinema->detailFilm($id);
            break;
        case 'detailRealisateur':
            $ctrlCinema->detailRealisateur($id);
            break;
        case 'detailActeur':
            $ctrlCinema->detailActeur($id);
            break;
        case 'detailGenre':
            $ctrlCinema->detailGenre($id);
            break;
        case 'detailRole':
            $ctrlCinema->detailRole($id);
            break;
        case 'formAjoutActeur':
            $ctrlCinema->formAjoutActeur();
            break;
        case 'ajoutActeur':
            $ctrlCinema->ajoutPersonne($nom, $prenom, $dn, $sexe);
            $ctrlCinema->ajoutActeur();
            break;
        case 'formatAjoutRealisateur':
            $ctrlCinema->formAjoutRealisateur();
            break;
        case 'ajoutRealisateur':
            $ctrlCinema->ajoutPersonne($nom, $prenom, $dn, $sexe);
            $ctrlCinema->ajoutRealisateur();
            break;
        case 'formatAjoutGenre':
            $ctrlCinema->formAjoutGenre();
            break;
        case 'ajoutGenre':
            $ctrlCinema->ajoutGenre($libelle);
            break;
        case 'formAjoutFilm':
            $ctrlCinema->listReal();
            // $ctrlCinema->listGenresforFilm();
            break;
        case 'ajoutFilm':
            $ctrlCinema->ajoutFilm($titre, $date, $duree, $resumee, $realisateur);
            $ctrlCinema->choixGenre($genre);
            break;
    }
}
