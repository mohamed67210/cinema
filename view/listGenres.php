<?php ob_start() ?>
<p>Il y'a  <?= $requete->rowCount() ?> genres</p>
<table class="table table-dark">
    <thead>
        <tr>
            <th>LIBELLE</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $genre) { ?> 
                <tr>
                    <td><?= $genre["libelle"] ?></td>
                    <td><a href="index.php?action=detailGenre&id=<?= $genre["id_genre"] ?>">Voir films</a></td>
                </tr>    
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "liste des genres";
$titre_secondaire ="liste des genres";
$contenu = ob_get_clean();
require "view/template.php";
 ?>