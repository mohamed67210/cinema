<?php ob_start() ?>
<table class="table table-dark">
    <thead>
        <tr>
            <th>TITRE</th>
            <th>DATE SORTIE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($requete->fetchAll() as $film) { ?>
            <tr>
                <td><?= $film["nom_film"] ?></td>
                <td><?= $film["date_sortie"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php

$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";
?>