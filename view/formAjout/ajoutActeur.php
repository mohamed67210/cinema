<?php ob_start() ?>
<form action="index.php?action=ajoutActeur" method="POST">
    <!-- <input type="text" class="form-control"  name="action" value="ajoutActeur" readonly hidden> -->
    <div class="form-group">
        <label for="nomInput">nom d'acteur</label>
        <input type="text" class="form-control" id="nomInput" placeholder="Entrer Nom" name="nom_acteur" required>
    </div>
    <div class="form-group">
        <label for="prenomInput">prenom d'acteur</label>
        <input type="text" class="form-control" id="prenomInput" placeholder="Entrer Prenom" name='prenom_acteur' required>
    </div>
    <div class="form-group">
        <label for="dateInput">date de naissance</label>
        <input type="date" class="form-control" id="dateInput" name="date_naissance_acteur" required>
    </div>
    <div class="form-group">
        <label for="select">Choix de sexe</label>
        <select id="select" class="custom-select" name="sexe_acteur" required>
            <option value="">Open this select menu</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<?php

$titre = "ajouter acteur";
$titre_secondaire = "ajouter acteur";
$contenu = ob_get_clean();
require "view/template.php";
?>