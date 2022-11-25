<?php ob_start();
foreach ($requete->fetchAll() as $realisateur) { ?>
    <div class="personne_detail_container">
        <div class="personne_img_container">
            <img src="<?= $realisateur["photo_realisateur"] ?>" alt="">
        </div>
        <div class="personne_info_container">
            <h5>Nom : <?= $realisateur["nom_personne"] ?></h5>
            <h5>Prenom : <?= $realisateur["prenom_personne"] ?></h5>
            <h5>Date de naissance : <?= $realisateur["date_naissance_personne"] ?></h5>
            <h5>Sexe : <?= $realisateur["sexe_personne"] ?></h5>
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

$titre = 'detail sur le realisateur : ' . $realisateur["nom_personne"];
$titre_secondaire = 'detail sur le realisateur : ' . $realisateur["nom_personne"];
$contenu = ob_get_clean();
require "view/template.php";
?>