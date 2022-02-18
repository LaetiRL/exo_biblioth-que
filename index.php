
<?php
require 'header.php';

?>

<main>
    <section>
        <a href="form_new2.php" class="bouton">Ajouter</a>
    </section>
    <section class="col-flex">
        <?php
            foreach ($livre as $row_livre) {
                echo '<div class="livre">';
                    echo '<div><h2>'.$row_livre['titre'].'</h2></div>';
                    echo '<div><span>'.'Auteur: '.$row_livre['prenom'].' '.$row_livre['nom'].'</span><span>'.'Catégorie: '.$row_livre['genre'].'</span></div>';
                    echo '<div><p>'.$row_livre['resume'].'</p></div>';
                    echo '<div><span>'.'Prix: '.$row_livre['prix'].'€'.'</span><span>'.'Parution: '.$row_livre['date'].'</span><span>'.'Nombre de pages: '.$row_livre['page'].'</span></div>';
                    echo '<div><a href="form_mod2.php?id='.$row_livre['id'].'" class="bouton">Modifier</a><a href="form_del.php?id='.$row_livre['id'].'" class="bouton">Supprimer</a></div>';
                echo '</div>';
            }
        ?>
    </section>
</main>

<?php
require 'footer.php';
?>


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