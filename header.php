<?php
require 'PDO.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Bibliothèque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="d-flex">
            <div>
                <input type="text" name="fullname" id="slt_livre"  placeholder="Entrez un titre">
            </div>
            <div>
                <select name="auteur" id="slt_auteur">
                    <option value="">Selectionnez un auteur</option>
                    <?php
                        foreach ($auteur as $row_auteur) {
                            echo '<option value="'.$row_auteur['id'].'">'.$row_auteur['prenom']." ".$row_auteur['nom'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div>
                <select name="genre" id="slt_genre">
                    <option value="">Selectionnez une catégorie</option>
                    <?php
                        foreach ($genre as $row_genre) {
                            echo '<option value="'.$row_genre['id'].'">'.$row_genre['genre'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div>
                <button type="submit">Rechercher</button>
            </div>
        </nav>
        <hr>
    </header>