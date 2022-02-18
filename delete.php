<?php

include_once 'PDO.php';

if(isset($_POST['suppprimer']))
{   
    $del_id = $_GET['id'];
    $modifier= $pdo->query("DELETE FROM livre WHERE id = $del_id;");
    header('Location: index.php');
}