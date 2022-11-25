<?php ob_start() ?>
<p>Il y'a <?= $requete->rowCount() ?> realisateurs</p>
<div class="wrapper">
    <div class="carts_container">
        <?php
        foreach ($requete->fetchAll() as $realisateur) { ?>

            <div class="cart">
                <div class="cart_img">
                    <a href="index.php?action=detailRealisateur&id=<?= $realisateur["id_realisateur"] ?>">
                        <img src="<?= $realisateur["photo_realisateur"] ?>" alt="" srcset="">
                    </a>
                </div>
                <a href="index.php?action=detailRealisateur&id=<?= $realisateur["id_realisateur"] ?>">
                    <?= $realisateur["prenom_personne"] . ' ' . $realisateur["nom_personne"] ?>
                </a>

            </div>

        <?php } ?>
    </div>
</div>

<?php

$titre = "liste des Realisateurs";
$titre_secondaire = "liste des Realisateurs";
$contenu = ob_get_clean();
require "view/template.php";
?>