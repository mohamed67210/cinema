<?php
ob_start()
?>
<form action="index.php?action=ajoutGenre" method="POST">
    <!-- <input type="text" class="form-control" name="action" value="ajoutGenre" readonly hidden> -->
    <div class="form-group">
        <label for="nomInput">Libellé</label>
        <input type="text" class="form-control" id="nomInput" placeholder="Ex : Drame" name="libelle" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<?php
$titre = "ajouter Genre";
$titre_secondaire = "ajouter Genre";
$contenu = ob_get_clean();
require "view/template.php";
?>