<?php

ob_start()
?>
<form action="index.php" method="GET">
    <input type="text" class="form-control" name="action" value="ajoutFilm" readonly hidden>
    <div class="form-group">
        <label for="nomInput">Titre</label>
        <input type="text" class="form-control" id="nomInput" name="nom_film" required>
    </div>
    <div class="form-group">
        <label for="dateInput">Date de sortie</label>
        <input type="date" class="form-control" id="dateInput" name="date_sortie_film" required>
    </div>
    <div class="form-group">
        <label for="timeInput">Duree en minute</label>
        <input type="number" class="form-control" id="timeInput" name="duree_minutes_film" required>
    </div>
    <div class="form-group">
        <label for="resumeeInput">Resumée</label>
        <textarea type="number" class="form-control" id="resumeeInput" name="resumee_film" required></textarea>
    </div>
    <div class="form-group">
        <label for="sel1">Realisateur:</label>
        <select class="form-control" id="sel1" name="realisateur">
            <?php
            foreach ($requete as $realisateur) { ?>
                <option value="<?= $realisateur['id_realisateur'] ?>"><?php echo $realisateur['nom_personne'] ?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<?php

$titre = "ajouter Film";
$titre_secondaire = "ajouter Film";
$contenu = ob_get_clean();
require "view/template.php";
?>