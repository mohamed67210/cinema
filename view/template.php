<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?= $titre ?></title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?action=listFilms">Films</a></li>
            <li><a href="index.php?action=listRealisateurs">Realisateurs</a></li>
            <li><a href="index.php?action=listActeurs">Acteurs</a></li>
            <li><a href="index.php?action=listRoles">Roles</a></li>
            <li><a href="index.php?action=listGenres">Genres</a></li>
        </ul>
        <ul>
            <li><a href="index.php?action=formAjoutActeur">Ajout acteur</a></li>
            <li><a href="index.php?action=formatAjoutRealisateur">Ajout realisateur</a></li>
            <li><a href="index.php?action=formAjoutFilm">Ajout film</a></li>
            <li><a href="index.php?action=formatAjoutGenre">Ajout Genre</a></li>
            <li><a href="index.php?action=ajouRole">Ajout Role</a></li>
        </ul>
    </nav>
    <h2><?= $titre_secondaire ?></h2>
    <div id="contenu_container"><?= $contenu ?></div>
</body>

</html>