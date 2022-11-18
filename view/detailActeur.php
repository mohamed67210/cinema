<?php ob_start() ?>
<table>
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>DATE NAISSANCE</th>
            <th>SEXE</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($requete->fetchAll() as $acteur) { ?>
            <tr>
                <td><?= $acteur["nom_personne"] ?></td>
                <td><?= $acteur["prenom_personne"] ?></td>
                <td><?= $acteur["date_naissance_personne"] ?></td>
                <td><?= $acteur["sexe_personne"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "detail sur l'acteur : " . $acteur["nom_personne"];
$titre_secondaire = "detail sur l'acteur : "  . $acteur["nom_personne"];
$contenu = ob_get_clean();
require "view/template.php";
?>