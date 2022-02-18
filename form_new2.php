<?php
session_start();
require 'PDO.php';
?>

<form action="insert2.php" method="POST">
    <div class="col-flex livre">
        <div>
            <label for="new_titre">Titre du livre*</label>
            <input type="text" id="new_titre" name="new_titre">
            <p><?php if (!empty($_SESSION['titreErr'])){echo($_SESSION['titreErr']); unset($_SESSION['titreErr']);} ?></p>
        </div>
        <div>
            <label for="new_auteur">Auteur*</label>
            <select name="new_auteur" id="new_auteur">
                <option value="">Selectionnez un auteur</option>
                <?php
                    foreach ($auteur as $row_auteur) {
                        echo '<option value="'.$row_auteur['id'].'">'.$row_auteur['prenom']." ".$row_auteur['nom'].'</option>';
                    }
                ?>
            </select>
            <p><?php if (!empty($_SESSION['auteurErr'])){echo($_SESSION['auteurErr']); unset($_SESSION['auteurErr']);} ?></p>
            <label for="new_genre">Catégorie*</label>
            <select name="new_genre" id="new_genre">
                <option value="">Selectionnez une catégorie</option>
                <?php
                    foreach ($genre as $row_genre) {
                        echo '<option value="'.$row_genre['id'].'">'.$row_genre['genre'].'</option>';
                    }
                ?>
            </select>
            <p><?php if (!empty($_SESSION['genreErr'])){echo($_SESSION['genreErr']); unset($_SESSION['genreErr']);} ?></p>
        </div>
        <div>
            <label for="new_resume">Synopsis</label>
            <textarea id="new_resume" name="new_resume" placeholder="Entrez un synopsis..."></textarea>
        </div>
        <div>
            <label for="new_prix">Prix*</label>
            <input type="text" id="new_prix" name="new_prix">
            <p><?php if (!empty($_SESSION['prixErr'])){echo($_SESSION['prixErr']); unset($_SESSION['prixErr']);}if (!empty($_SESSION['prixErr2'])){echo($_SESSION['prixErr2']); unset($_SESSION['prixErr2']);} ?></p>
            <label for="new_date">Date de parution*</label>
            <input type="date" id="new_date" name="new_date">
            <p><?php if (!empty($_SESSION['dateErr'])){echo($_SESSION['dateErr']); unset($_SESSION['dateErr']);} ?></p>
            <label for="mod_page">Nombre de pages</label>
            <input type="text" id="new_page" name="new_page">
            <p><?php if (!empty($_SESSION['pageErr'])){echo($_SESSION['pageErr']); unset($_SESSION['pageErr']);} ?></p>
        </div>
        <div>
            <a href="index.php" class="bouton">Annuler</a>
            <input type="submit" name="creer" value="Créer" class="bouton">
        </div>
    </div>
</form>