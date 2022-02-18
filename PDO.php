<?php
$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root');
$auteurQuery = $pdo->query('SELECT * FROM auteur ORDER BY id');
$genreQuery = $pdo->query('SELECT * FROM genre ORDER BY id');
$livreQuery = $pdo->query('SELECT livre.id, page, auteur_id, titre, genre_id, date, prix, resume, genre, nom, prenom FROM livre JOIN genre ON genre.id = livre.genre_id JOIN auteur ON auteur.id = livre.auteur_id ORDER BY titre');

$auteur = $auteurQuery->fetchAll(PDO::FETCH_ASSOC);
$genre = $genreQuery->fetchAll(PDO::FETCH_ASSOC);
$livre = $livreQuery->fetchAll(PDO::FETCH_ASSOC);
?>