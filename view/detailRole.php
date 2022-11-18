<?php ob_start() ?>
<table class="table table-dark">
    <thead>
        <tr>
            <th>ACTEUR</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($requete->fetchAll() as $acteur) { ?>
            <tr>
                <td><?= $acteur["prenom_personne"].' '.$acteur["nom_personne"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php

$titre = "Liste des Acteurs";
$titre_secondaire = "Liste des Acteurs";
$contenu = ob_get_clean();
require "view/template.php";
?>