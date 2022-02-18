<?php

include_once 'PDO.php';


if(isset($_POST['modifier']))
{   
    $mod_id = $_GET['id'];
    $mod_titre = htmlspecialchars($_POST['mod_titre']);
    $mod_auteur = $_POST['mod_auteur'];
    $mod_genre = $_POST['mod_genre'];
    $mod_resume = htmlspecialchars($_POST['mod_resume']);
    $mod_prix = $_POST['mod_prix'];
    $mod_date = $_POST['mod_date'];
    $mod_page = (int)$_POST['mod_page'];
    $modifier= $pdo->query("UPDATE livre SET `titre`= '$mod_titre',`resume`= '$mod_resume',`prix`= $mod_prix,`date`= '$mod_date',`page`= $mod_page,`genre_id`= $mod_genre,`auteur_id`= $mod_auteur WHERE id = $mod_id;");
    header('Location: index.php');
}
?>