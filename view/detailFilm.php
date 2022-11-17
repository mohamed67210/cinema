<?php ob_start() ?>
<table>
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
                    <td><?= $film["nom_film"] ?></a></td>
                    <td><?= $film["date_sortie"] ?></td>
                </tr>    
        <?php } ?>
    </tbody>
</table>

<?php

$titre = $film["nom_film"] ;
$titre_secondaire =$film["nom_film"] ;
$contenu = ob_get_clean();
require "view/template.php";
 ?>