<?php 
$id = (isset($_GET["id"])) ? $_GET["id"] : null;
$nom = (isset($_GET["nom_acteur"])) ? $_GET["nom_acteur"] : null;
$prenom = (isset($_GET["prenom_acteur"])) ? $_GET["prenom_acteur"] : null;
$dn = (isset($_GET["date_naissance_acteur"])) ? $_GET["date_naissance_acteur"] : null;
$sexe = (isset($_GET["sexe_acteur"])) ? $_GET["sexe_acteur"] : null;
use Controller\CinemaController;

spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

$ctrlCinema = new CinemaController();

if(isset($_GET["action"])){
    switch ($_GET["action"]) {
        case 'listFilms':
            $ctrlCinema->listFilms();
            break;
        case 'listActeurs':$ctrlCinema->listActeurs();
            break;
        case 'listRealisateurs':$ctrlCinema->listRealisateurs();
            break;
        case 'listRoles':$ctrlCinema->listRoles();
            break;
        case 'listGenres':$ctrlCinema->listGenres();
            break;
        case 'detailFilm':$ctrlCinema->detailFilm($id);
            break;
        case 'detailRealisateur':$ctrlCinema->detailRealisateur($id);
            break;
        case 'detailActeur':$ctrlCinema->detailActeur($id);
            break;
        case 'detailGenre':$ctrlCinema->detailGenre($id);
            break;
        case 'detailRole':$ctrlCinema->detailRole($id);
            break;
        case 'formAjoutActeur':$ctrlCinema->formAjoutActeur();
            break;
        case 'ajoutActeur':$ctrlCinema->ajouActeur($nom,$prenom,$dn,$sexe);
            break;
        
    }
}