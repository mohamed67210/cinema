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
            foreach($requete->fetchAll() as $role) { ?> 
                <tr>
                    <td><a href="index.php?action=detailRole&id=<?= $role["id_role"] ?>"><?= $role["nom_personnage"] ?></a></td>
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