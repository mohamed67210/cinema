<?php ob_start() ?>
<form action="index.php?action=ajoutRealisateur" method="POST">
    <!-- <input type="text" class="form-control"  name="action" value="ajoutRealisateur" readonly hidden> -->
    <div class="form-group">
        <label for="nomInput">Nom de realisateur</label>
        <input type="text" class="form-control" id="nomInput" placeholder="Entrer Nom" name="nom_acteur" required>
    </div>
    <div class="form-group">
        <label for="prenomInput">Prenom de realisateur</label>
        <input type="text" class="form-control" id="prenomInput" placeholder="Entrer Prenom" name='prenom_acteur' required>
    </div>
    <div class="form-group">
        <label for="dateInput">Date de naissance</label>
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
    <div class="form-group">
        <label for="ImageInput">Image (lien)</label>
        <input type="text" class="form-control" id="ImageInput" placeholder="Entrer un lien" name="photo" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<?php

$titre = "ajouter realisateur";
$titre_secondaire = "ajouter realisateur";
$contenu = ob_get_clean();
require "view/template.php";
?>