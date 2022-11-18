<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?= $titre ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul>
            <li><a href="index.php?action=listFilms">vois liste des films</a></li>
            <li><a href="index.php?action=listRealisateurs">vois liste des realisateurs</a></li>
            <li><a href="index.php?action=listActeurs">vois liste des Acteurs</a></li>
            <li><a href="index.php?action=listRoles">vois liste des roles</a></li>
            <li><a href="index.php?action=listGenres">vois liste des genres</a></li>
        </ul>
    </nav>
    <center><h1>PDO cinéma</h1></center>
    <h2><?= $titre_secondaire ?></h2>
    <?= $contenu ?>
</body>

</html>