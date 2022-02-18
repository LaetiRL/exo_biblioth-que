<?php
require 'PDO.php';
?>

<form action="insert1.php" method="POST">
    <div class="col-flex livre">
        <div>
            <label for="new_titre">Titre du livre*</label>
            <input type="text" id="new_titre" name="new_titre">
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
            <label for="new_genre">Catégorie*</label>
            <select name="new_genre" id="new_genre">
                <option value="">Selectionnez une catégorie</option>
                <?php
                    foreach ($genre as $row_genre) {
                        echo '<option value="'.$row_genre['id'].'">'.$row_genre['genre'].'</option>';
                    }
                ?>
            </select>
        </div>
        <div>
            <label for="new_resume">Synopsis</label>
            <textarea id="new_resume" name="new_resume" placeholder="Entrez un synopsis..."></textarea>
        </div>
        <div>
            <label for="new_prix">Prix*</label>
            <input type="text" id="new_prix" name="new_prix">
            <label for="new_date">Date de parution*</label>
            <input type="date" id="new_date" name="new_date">
            <label for="mod_page">Nombre de pages</label>
            <input type="text" id="new_page" name="new_page">
        </div>
        <div>
            <a href="index.php" class="bouton">Annuler</a>
            <input type="submit" name="creer" value="Créer" class="bouton">
        </div>
    </div>
</form>


<!--<div class="col-flex livre">
    <div>
        <h2>Titre du livre</h2>
    </div>
    <div>
        <span>Auteur</span>
        <span>Catégorie</span> 
    </div>
    <div>
        <p>Ceci est un synopsis...Lorem ipsum dolor sit amet consectetur adipisicing elit.
        At laboriosam vero explicabo repudiandae molestiae cumque et eos provident vitae blanditiis. 
        Necessitatibus eveniet pariatur vel facere autem deserunt dolorum dignissimos temporibus.</p>
    </div>
    <div>
        <span>Prix</span>
        <span>Date</span>
        <span>Page</span>  
    </div>
    <div>
        <button type="submit">Modifier</button>
    </div>
</div>-->