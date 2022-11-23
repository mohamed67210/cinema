<?php ob_start();
foreach ($requete->fetchAll() as $film) { ?>
    <div id="info_film">
        <div id="like_button">
            <a href="index.php?action=updateLike&id=<?= $film['id_film'] ?>">
                <p>❤️</p>
            </a>
        </div>
        <div id="img_container">
            <img src="<?php echo $film['affiche']; ?>" alt="" />
        </div>
        <div id="info_container">
            <h4>Titre : </h4>
            <p><?= $film["nom_film"] ?></p>
            <h4>Année de sortie : </h4>
            <p><?= $film["YEAR(date_sortie)"] ?></p>
            <h4>Realiser par : </h4>
            <p><?= $film["nom_personne"] . ' ' . $film["prenom_personne"] ?></p>
            <h4>Genre : </h4>
            <div id="genres_container">
                <?php foreach ($requeteGenre->fetchAll() as $genre) { ?>
                    <p class="genre"><?= $genre["libelle"] ?>&nbsp</p>
                <?php } ?>
            </div>
        </div>
    </div>
    <div id="resumee">
        <h4>Synopsis</h3>
            <p><?= $film['resume_film']; ?></p>
    </div>
<?php } ?>
<div id="casting">
    <h4>Acteurs et actrice </h4>
    <div id="acteurs_container">
        <?php
        foreach ($requeteCasting->fetchAll() as $acteur) { ?>
            <div id="acteur_container">
                <h5><?= $acteur["prenom_personne"] . ' ' . $acteur["nom_personne"] ?></h5>
                <p>Role :</p>
                <h6><?= $acteur["nom_personnage"] ?></h6>
            </div>
        <?php } ?>
    </div>
</div>
<?php

$titre = $film["nom_film"];
$titre_secondaire = $film["nom_film"];
$contenu = ob_get_clean();
require "view/template.php";
?>