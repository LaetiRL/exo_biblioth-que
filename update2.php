<?php
session_start();
include_once 'PDO.php';


if(isset($_POST['modifier']))
{   
    $mod_id = $_GET['id'];

    if (!empty($_POST['mod_titre'])) {
        $mod_titre = htmlspecialchars($_POST['mod_titre']);
	} else {
        $_SESSION['titreErr'] = "Veuillez entrer un titre";
	}
    if (!empty($_POST['mod_prix']) and is_numeric($_POST['mod_prix'])) {
        $mod_prix = $_POST['mod_prix'];
	} elseif (empty($_POST['mod_prix'])) {
        $_SESSION['prixErr'] = "Veuillez entrer un prix";
	} elseif (!is_numeric($_POST['mod_prix'])) {
        $_SESSION['prixErr2'] = "Le prix ne doit être composé que de chiffres";
    }
    if (!empty($_POST['mod_date'])) {
        $mod_date = $_POST['mod_date'];
	} else {
        $_SESSION['dateErr'] = "Veuillez entrer une date";
    }
    $mod_auteur = $_POST['mod_auteur'];
    $mod_genre = $_POST['mod_genre'];
    $mod_resume = htmlspecialchars($_POST['mod_resume']);
    $mod_page = (int)$_POST['mod_page'];

    if (empty($_SESSION)) {
        $modifier= $pdo->query("UPDATE livre SET `titre`= '$mod_titre',`resume`= '$mod_resume',`prix`= $mod_prix,`date`= '$mod_date',`page`= $mod_page,`genre_id`= $mod_genre,`auteur_id`= $mod_auteur WHERE id = $mod_id;");
        header('Location: index.php');
    } else {
        header('Location: form_mod2.php?id='.$mod_id); 
    }
}
?> 