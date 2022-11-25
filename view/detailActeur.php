<?php ob_start() ?>

<?php
foreach ($requete->fetchAll() as $acteur) { ?>
    <div class="personne_detail_container">
        <div class="personne_img_container">
            <img src="<?= $acteur["photo_acteur"] ?>" alt="">
        </div>
        <div class="personne_info_container">
            <h5>Nom : <?= $acteur["nom_personne"] ?></h5>
            <h5>Prenom : <?= $acteur["prenom_personne"] ?></h5>
            <h5>Date de naissance : <?= $acteur["date_naissance_personne"] ?></h5>
            <h5>Sexe : <?= $acteur["sexe_personne"] ?></h5>
        </div>

    </div>
<?php } ?>
<div class="filmographie_container">
    <h2>Filmographie</h2>
    <div class="carts_container">
        <?php
        foreach ($requeteListFilms->fetchAll() as $film) { ?>
            <div class="cart">
                <div class="cart_img">
                    <img src="<?= $film["affiche"] ?>" alt="">
                </div>
                <h5 id="biographie_film_title"><?= $film["nom_film"]?></h5>
                <h6><?= $film["date_sortie"] ?></h6>
            </div>
        <?php } ?>
    </div>
</div>
<?php

$titre = "detail sur l'acteur : " . $acteur["nom_personne"];
$titre_secondaire = "detail sur l'acteur : "  . $acteur["nom_personne"];
$contenu = ob_get_clean();
require "view/template.php";
?>