<?php ob_start();
foreach ($requete->fetchAll() as $film) { ?>
    <div id="img_container">
        <img src="<?php echo $film['affiche']; ?>" alt="" />
    </div>

<?php } ?>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Titre</th>
            <th>ANNEE SORTIE</th>
            <th>realisateur</th>
        </tr>
    </thead>
    <tbody>
        <?php
        ?>

        <tr>
            <td><?= $film["nom_film"] ?></a></td>
            <td><?= $film["YEAR(date_sortie)"] ?></td>
            <td><?= $film["nom_personne"] . ' ' . $film["prenom_personne"] ?></td>
        </tr>
        <?php ?>
    </tbody>
</table>
<h2>Casting :</h2>
<table class="table table-dark">
    <thead>
        <tr>
            <th>nom d'acteur</th>
            <th>prenom d'acteur</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($requeteCasting->fetchAll() as $casting) { ?>

            <tr>
                <td><?= $casting["nom_personne"] ?></a></td>
                <td><?= $casting["prenom_personne"] ?></td>
                <td><?= $casting["nom_personnage"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = $film["nom_film"];
$titre_secondaire = $film["nom_film"];
$contenu = ob_get_clean();
require "view/template.php";
?>