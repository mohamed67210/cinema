<?php ob_start() ?>
<p>Il y'a  <?= $requete->rowCount() ?> acteurs</p>
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
            foreach($requete->fetchAll() as $acteur) { ?> 
                <tr>
                    <td><?= $acteur["nom_personne"] ?></td>
                    <td><?= $acteur["prenom_personne"] ?></td>
                    <td><?= $acteur["date_naissance"] ?></td>
                    <td><?= $acteur["sexe_personne"] ?></td>
                </tr>    
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "liste des acteurs";
$titre_secondaire ="liste des acteurs";
$contenu = ob_get_clean();
require "view/template.php";
 ?>