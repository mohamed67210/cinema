<?php ob_start();
foreach ($requete->fetchAll() as $film) { ?>
    <div id="info_film">
        <div id="img_container">
            <img src="<?php echo $film['affiche']; ?>" alt="" />
        </div>
        <div id="info_container">
            <h4>Titre : </h4>
            <p><?= $film["nom_film"] ?></p>
            <h4>année de sortie : </h4>
            <p><?= $film["YEAR(date_sortie)"] ?></p>
            <h4>Realiser par : </h4>
            <p><?= $film["nom_personne"] . ' ' . $film["prenom_personne"] ?></p>
        </div>
    </div>
    <div id="resumee">
        <h4>Synopsis</h3>
            <p><?= $film['resume_film']; ?></p>
    </div>
<?php } ?>
<div id="casting">
    <h3>Acteurs et actrice :</h3>
    <div id="acteurs_container">
        <?php
        foreach ($requeteCasting->fetchAll() as $acteur) { ?>
            <div id="acteur_container">
                <h3><?= $acteur["prenom_personne"] . $acteur["nom_personne"] ?></h3>
                <h5><?= $acteur["nom_personnage"] ?></h5>
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