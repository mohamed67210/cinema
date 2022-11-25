<?php ob_start() ?>
<p>Il y'a <?= $requete->rowCount() ?> acteurs</p>
<div class="wrapper">
    <div class="carts_container">
        <?php
        foreach ($requete->fetchAll() as $acteur) { ?>

            <div class="cart">
                <div class="cart_img">
                    <a href="index.php?action=detailActeur&id=<?= $acteur["id_acteur"] ?>">
                        <img src="<?= $acteur["photo_acteur"] ?>" alt="" srcset="">
                    </a>
                </div>
                <a href="index.php?action=detailActeur&id=<?= $acteur["id_acteur"] ?>">
                    <?= $acteur["prenom_personne"] . ' ' . $acteur["nom_personne"] ?>
                </a>

            </div>

        <?php } ?>
    </div>
</div>
<?php

$titre = "liste des acteurs";
$titre_secondaire = "liste des acteurs";
$contenu = ob_get_clean();
require "view/template.php";
?>