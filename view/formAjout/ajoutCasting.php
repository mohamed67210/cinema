<?php ob_start() ?>
<form action="index.php?action=ajoutCasting" method="POST">
    <div class="form-group">
        <label for="sel1">Acteur :</label>
        <select class="form-control" id="sel1" name="acteur">
            <?php
            foreach ($requeteActeur as $acteur) { ?>
                <option value="<?= $acteur['id_acteur'] ?>"><?= $acteur['prenom_personne'] . ' ' . $acteur['nom_personne'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="sel2">Acteur :</label>
        <select class="form-control" id="sel2" name="film">
            <?php
            foreach ($requeteFilm as $film) { ?>
                <option value="<?= $film['id_film'] ?>"><?= $film['nom_film'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="RoleInput">Role</label>
        <input type="text" class="form-control" id="RoleInput" name="role" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<?php

$titre = "Nouveau Casting";
$titre_secondaire = "Nouveau casting";
$contenu = ob_get_clean();
require "view/template.php";
?>