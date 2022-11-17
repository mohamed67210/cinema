<?php ob_start() ?>
<p>Il y'a  <?= $requete->rowCount() ?> roles</p>
<table>
    <thead>
        <tr>
            <th>LIBELLE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $genre) { ?> 
                <tr>
                    <td><?= $genre["libelle"] ?></td>
                    
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