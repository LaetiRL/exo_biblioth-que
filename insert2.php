<?php
session_start();
include_once 'PDO.php';

if(isset($_POST['creer']))
{    
    
    if (!empty($_POST['new_titre'])) {
        $new_titre = trim(htmlspecialchars($_POST['new_titre']));
    } else {
        $_SESSION['titreErr'] = "Veuillez entrer un titre";
    }
    if ($_POST['new_auteur'] == false) {
        $_SESSION['auteurErr'] = "Veuillez sélectionner un auteur";
    } else {
        $new_auteur = $_POST['new_auteur'];
    }
    if ($_POST['new_genre'] == false) {
        $_SESSION['genreErr'] = "Veuillez sélectionner une catégorie";
    } else {
        $new_genre = $_POST['new_genre'];
    }

    if (!empty($_POST['new_prix']) and is_numeric($_POST['new_prix'])) {
        $new_prix = $_POST['new_prix'];
    } elseif (empty($_POST['new_prix'])) {
        $_SESSION['prixErr'] = "Veuillez entrer un prix";
    } elseif (!is_numeric($_POST['new_prix'])) {
        $_SESSION['prixErr2'] = "Le prix ne doit être composé que de chiffres";
    }

    if (!empty($_POST['new_date'])) {
        $new_date = $_POST['new_date'];
    } else {
        $_SESSION['dateErr'] = "Veuillez entrer une date";
        }


    $new_page = (int)$_POST['new_page'];
    $new_resume = trim(htmlspecialchars($_POST['new_resume']));
    
    

    if (empty($_SESSION)) {
        $creer = $pdo->query("INSERT INTO livre (`titre`,`resume`,`prix`,`date`,`page`,`genre_id`,`auteur_id`)
        VALUES ('$new_titre','$new_resume',$new_prix,'$new_date',$new_page,$new_genre,$new_auteur);");
        header('Location: index.php');
    } else {
        header('Location: form_new2.php'); 
    }
}
?>