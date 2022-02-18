<?php
session_start();
require 'PDO.php';

$idUrl = $_GET['id'];
$result = $pdo->query("SELECT * FROM livre WHERE livre.id = $idUrl");
$data = $result->fetch();

?>

<form action="update2.php?id=<?php echo $idUrl;?>" method="POST">
    <div class="col-flex livre">
        <div>
            <label for="mod_titre">Titre du livre*</label>
            <input type="text" id="mod_titre" name="mod_titre" value="<?= $data['titre']?>">
            <p><?php if (!empty($_SESSION['titreErr'])){echo($_SESSION['titreErr']); unset($_SESSION['titreErr']);} ?></p>
        </div>
        <div>
            <label for="mod_auteur">Auteur*</label>
            <select name="mod_auteur" id="mod_auteur">
                <?php
                    foreach ($auteur as $row_auteur) {
                        echo '<option value="'.$row_auteur['id'].'" ';
                        if ($row_auteur['id'] === $data['auteur_id']){
                            echo 'selected';
                        }
                        echo '>'.$row_auteur['prenom']." ".$row_auteur['nom'].'</option>';
                    }
                ?>
            </select>
            <p><?php if (!empty($_SESSION['auteurErr'])){echo($_SESSION['auteurErr']); unset($_SESSION['auteurErr']);} ?></p>
            <label for="mod_genre">Catégorie*</label>
            <select name="mod_genre" id="mod_genre">
                <?php
                    foreach ($genre as $row_genre) {
                        echo '<option value="'.$row_genre['id'].'" ';
                        if ($row_genre['id'] === $data['genre_id']){
                            echo 'selected';
                        }
                        echo '>'.$row_genre['genre'].'</option>';
                    }
                ?>
            </select>
            <p><?php if (!empty($_SESSION['genreErr'])){echo($_SESSION['genreErr']); unset($_SESSION['genreErr']);} ?></p>
        </div>
        <div>
            <label for="mod_resume">Synopsis</label>
            <textarea id="mod_resume" name="mod_resume"><?= $data['resume']?></textarea>
        </div>
        <div>
            <label for="mod_prix">Prix*</label>
            <input type="text" id="mod_prix" name="mod_prix" value="<?= $data['prix']?>">
            <p><?php if (!empty($_SESSION['prixErr'])){echo($_SESSION['prixErr']); unset($_SESSION['prixErr']);}if (!empty($_SESSION['prixErr2'])){echo($_SESSION['prixErr2']); unset($_SESSION['prixErr2']);} ?></p>
            <label for="new_date">Date de parution*</label>
            <input type="date" id="mod_date" name="mod_date" value="<?= $data['date']?>">
            <p><?php if (!empty($_SESSION['dateErr'])){echo($_SESSION['dateErr']); unset($_SESSION['dateErr']);} ?></p>
            <label for="mod_page">Nombre de pages</label>
            <input type="text" id="mod_page" name="mod_page" value="<?= $data['page']?>">
            <p><?php if (!empty($_SESSION['pageErr'])){echo($_SESSION['pageErr']); unset($_SESSION['pageErr']);} ?></p>
        </div>
        <div>
            <a href="index.php">Annuler</a>
            <input type="submit" name="modifier" value="Sauvegarder">
        </div>
    </div>
</form>