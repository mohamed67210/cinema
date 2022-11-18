<?php ob_start() ?>
<table class="table table-dark">
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>DATE </th>
            <th>SEXE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($requete->fetchAll() as $realisateur) { ?>
            <tr>
                <td><?= $realisateur["nom_personne"] ?></td>
                <td><?= $realisateur["prenom_personne"] ?></td>
                <td><?= $realisateur["date_naissance_personne"] ?></td>
                <td><?= $realisateur["sexe_personne"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<h2>Liste des films realisé</h2>
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

$titre = 'detail sur le realisateur : ' . $realisateur["nom_personne"];
$titre_secondaire = 'detail sur le realisateur : ' . $realisateur["nom_personne"];
$contenu = ob_get_clean();
require "view/template.php";
?>