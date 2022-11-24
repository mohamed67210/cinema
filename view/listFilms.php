<!--  (temporisation de sortie) pour stocker le contenu dans une variable $contenu
 -->
<?php ob_start() ?>
<p>TOTAL : <?= $requete->rowCount() ?> films</p>


<div id="films_container">
    <?php
    foreach ($requete->fetchAll() as $film) { ?>
        <div id="film_container">
            <div class="like">
                <p><?= $film['nb_like'] ?> 👍</p>
            </div>
            <div class="affiche_container">
                <a href="index.php?action=detailFilm&id=<?= $film['id_film'] ?>"><img src="<?= $film['affiche'] ?>" alt="affiche"></a>
            </div>
            <div class="titre"><a href="index.php?action=detailFilm&id=<?= $film['id_film'] ?>"><?= $film['nom_film'] ?></a></div>
        </div>
    <?php } ?>
</div>

<?php

$titre = "liste des films";
$titre_secondaire = "liste des films";
$contenu = ob_get_clean();
require "view/template.php";
?>