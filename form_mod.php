<?php
require 'PDO.php';


$id = $_GET['id'];
$result = $pdo->query("SELECT * FROM livre WHERE livre.id = $id");
$data = $result->fetch();

?>

<form action="update.php?id=<?php echo $id;?>" method="POST">
    <div class="col-flex livre">
        <div>
            <label for="mod_titre">Titre du livre*</label>
            <input type="text" id="mod_titre" name="mod_titre" value="<?= $data['titre']?>">
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
        </div>
        <div>
            <label for="mod_resume">Synopsis</label>
            <textarea id="mod_resume" name="mod_resume"><?= $data['resume']?></textarea>
        </div>
        <div>
            <label for="mod_prix">Prix*</label>
            <input type="text" id="mod_prix" name="mod_prix" value="<?= $data['prix']?>">
            <label for="new_date">Date de parution*</label>
            <input type="date" id="mod_date" name="mod_date" value="<?= $data['date']?>">
            <label for="mod_page">Nombre de pages</label>
            <input type="text" id="mod_page" name="mod_page" value="<?= $data['page']?>">
        </div>
        <div>
            <a href="index.php">Annuler</a>
            <input type="submit" name="modifier" value="Sauvegarder">
        </div>
    </div>
</form>