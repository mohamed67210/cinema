<?php ob_start() ?>
<p>Il y'a  <?= $requete->rowCount() ?> realisateurs</p>
<table>
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>DATE DE NAISSANCE</th>
            <th>SEXE</th>

        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $realisateur) { ?> 
                <tr>
                    <td><?= $realisateur["nom_personne"] ?></td>
                    <td><?= $realisateur["prenom_personne"] ?></td>
                    <td><?= $realisateur["date_naissance"] ?></td>
                    <td><?= $realisateur["sexe_personne"] ?></td>
                </tr>    
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "liste des Realisateurs";
$titre_secondaire ="liste des Realisateurs";
$contenu = ob_get_clean();
require "view/template.php";
 ?>