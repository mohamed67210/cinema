<?php ob_start() ?>
<p>Il y'a  <?= $requete->rowCount() ?> roles</p>
<table class="table table-dark">
    <thead>
        <tr>
            <th>NOM</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $acteur) { ?> 
                <tr>
                    <td><?= $acteur["nom_personnage"] ?></td>
                </tr>    
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "liste des roles";
$titre_secondaire ="liste des roles";
$contenu = ob_get_clean();
require "view/template.php";
 ?>