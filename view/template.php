<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="Public/style.css">
    <title><?= $titre ?></title>
</head>

<body>
    <nav>
        <div>
            <h1>PDO CINEMA</h1>
        </div>
        <div id="link">
            <ul>
                <li><a href="index.php?action=listFilms">Films</a></li>
                <li><a href="index.php?action=listRealisateurs">Realisateurs</a></li>
                <li><a href="index.php?action=listActeurs">Acteurs</a></li>
                <li><a href="index.php?action=listRoles">Roles</a></li>
                <li><a href="index.php?action=listGenres">Genres</a></li>
            </ul>
        </div>
    </nav>
    <div id="nav_ajout">
        <h5>Admin Panel</h5>
        <ul>
            <li><a href="index.php?action=formAjoutActeur">+ acteur</a></li>
            <li><a href="index.php?action=formatAjoutRealisateur">+ realisateur</a></li>
            <li><a href="index.php?action=formAjoutFilm">+ film</a></li>
            <li><a href="index.php?action=formatAjoutGenre">+ Genre</a></li>
            <li><a href="index.php?action=formAjoutCasting">+ casting</a></li>
            <!-- <li><a href="index.php?action=ajouRole">+ Role</a></li> -->
        </ul>
    </div>
    <h2><?= $titre_secondaire ?></h2>
    <div id="contenu_container"><?= $contenu ?></div>
</body>

</html>