<?php ob_start() ?>
<table class="table table-dark">
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
<h2>Filmographie</h2>
<table class="table table-dark">
    <thead>
        <tr>
            <th>TITRE</th>
            <th>DATE SORTIE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($requeteListFilms->fetchAll() as $film) { ?>
            <tr>
                <td><?= $film["nom_film"] ?></td>
                <td><?= $film["date_sortie"] ?></td>
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