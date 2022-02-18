<?php
require 'PDO.php';
$id = $_GET['id'];
?>


<form action="delete.php?id=<?php echo $id;?>" method="POST">
    <h2>Etes vous sûr de vouloir supprimer ?</h2>
    <input type="submit" name="suppprimer" value="OUI" class="bouton">
    <a href="index.php" class="bouton">NON</a>
</form>