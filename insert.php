<?php
include_once 'PDO.php';
if(isset($_POST['creer']))
{    
    $new_titre = htmlspecialchars($_POST['new_titre']);
    $new_auteur = $_POST['new_auteur'];
    $new_genre = $_POST['new_genre'];
    $new_resume = htmlspecialchars($_POST['new_resume']);
    $new_prix = $_POST['new_prix'];
    $new_date = $_POST['new_date'];
    $new_page = $_POST['new_page'];
    $creer = $pdo->query("INSERT INTO livre (`titre`,`resume`,`prix`,`date`,`page`,`genre_id`,`auteur_id`)
    VALUES ('$new_titre','$new_resume',$new_prix,'$new_date',$new_page,$new_genre,$new_auteur);");
    header('Location: index.php');
}
?>