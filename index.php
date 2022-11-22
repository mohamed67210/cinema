
<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : null;
$nom = (isset($_POST["nom_acteur"])) ? $_POST["nom_acteur"] : null;
$prenom = (isset($_POST["prenom_acteur"])) ? $_POST["prenom_acteur"] : null;
$dn = (isset($_POST["date_naissance_acteur"])) ? $_POST["date_naissance_acteur"] : null;
$sexe = (isset($_POST["sexe_acteur"])) ? $_POST["sexe_acteur"] : null;
// pour ajouter genre
$libelle = (isset($_POST["libelle"])) ? $_POST["libelle"] : null;
// pour ajouter film
$titre = (isset($_POST["nom_film"])) ? $_POST["nom_film"] : null;
$date = (isset($_POST["date_sortie_film"])) ? $_POST["date_sortie_film"] : null;
$duree = (isset($_POST["duree_minutes_film"])) ? $_POST["duree_minutes_film"] : null;
$resumee = (isset($_POST["resumee_film"])) ? $_POST["resumee_film"] : null;
$realisateur = (isset($_POST["realisateur"])) ? $_POST["realisateur"] : null;
$affiche = (isset($_POST["affiche"])) ? $_POST["affiche"] : null;
$genre = (isset($_POST["genre"])) ? $_POST["genre"] : null;



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
            $ctrlCinema->ajoutGenre();
            break;
        case 'formAjoutFilm':
            $ctrlCinema->listReal();
            // $ctrlCinema->listGenresforFilm();
            break;
        case 'ajoutFilm':
            $ctrlCinema->ajoutFilm($titre, $date, $duree, $resumee, $realisateur,$affiche);
            $ctrlCinema->choixGenre($genre);
            break;
    }
}
