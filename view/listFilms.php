<!--  (temporisation de sortie) pour stocker le contenu dans une variable $contenu
 -->
<?php ob_start() ?>
<p>Il y'a  <?= $requete->rowCount() ?> films</p>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Titre</th>
            <th>ANNEE SORTIE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $film) { ?> 
                <tr>
                    <td><a href="index.php?action=detailFilm&id=<?= $film['id_film']?>"><?= $film["nom_film"] ?></a></td>
                    <td><?= $film["date_sortie"] ?></td>
                </tr>    
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "liste des films";
$titre_secondaire ="liste des films";
$contenu = ob_get_clean();
require "view/template.php";
 ?>