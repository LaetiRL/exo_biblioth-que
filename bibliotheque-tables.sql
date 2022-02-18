CREATE TABLE `livre` (
`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
`titre` VARCHAR(100) NOT NULL,
`auteur_id` INT NOT NULL,
FOREIGN KEY (`auteur_id`) REFERENCES `auteur`(`id`),
`genre_id` INT NOT NULL,
FOREIGN KEY (`genre_id`) REFERENCES `genre`(`id`),
`resume` VARCHAR(500) NULL,
`prix` DECIMAL(3, 2) NOT NULL,
`date` DATE NOT NULL,
`pages` INT NULL);

CREATE TABLE `auteur` (
`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
`prenom` VARCHAR(80),
`nom` VARCHAR(80),
CONSTRAINT `UC_auteur` UNIQUE (`prenom`,`nom`));

CREATE TABLE `genre` (
`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
`genre` VARCHAR(80) UNIQUE);

CREATE TABLE `genre_test` (
`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
`genre` VARCHAR(80));

INSERT INTO livre(`id`,`titre`,`auteur_id`,`genre_id`,`resume`,`prix`,`date`,`page`) VALUES
(1,'Simetierre',1,1,'',8.90,'2003-09-03',636),
(2,'La Conjuration primitive',2,2,'',8.40,'2014-11-13',544),
(3,"L'alliance des Trois (Autre-Monde, Tome 1)",2,3,'',8.70,'2012-10-31',456),
(4,'Le choix vous appartient',3,2,'',3.61,'2011-05-18',512);


SELECT livre.id, titre, nom, prenom, genre, prix, date, page FROM livre
JOIN auteur
ON auteur.id = livre.auteur_id
JOIN genre
ON genre.id = livre.genre_id
ORDER BY livre.id;

UPDATE livre
SET `resume` = "Louis Creed, un jeune médecin de Chicago, vient s’installer avec sa famille à Ludlow, petite bourgade du Maine. 
Leur voisin, le vieux Jud Crandall, les emmène visiter le pittoresque « simetierre » où des générations d’enfants ont enterré leurs animaux familiers. 
Mais, au-delà de ce « simetierre », tout au fond de la forêt, se trouvent les terres sacrées des Indiens, lieu interdit qui séduit pourtant par ses monstrueuses promesses.
Un drame atroce va bientôt déchirer l’existence des Creed, et l’on se trouve happé dans un suspense cauchemardesque…"
WHERE id = 1;

UPDATE livre
SET `resume` = "Et si seul le Mal pouvait combattre le Mal ?
Une véritable épidémie de meurtres ravage la France.
D'un endroit à l'autre, les scènes de crime semblent se répondre. Comme un langage ou un jeu.
Plusieurs tueurs sont-ils à l'oeuvre ? Se connaissent-ils ?
Très vite, l'hexagone ne leur suffit plus : l'Europe entière devient l'enjeu de leur monstrueuse compétition.
Pour mettre fin à cette escalade de l'horreur, pour tenter de comprendre, une brigade pas tout à fait comme les autres, épaulée par un célèbre profiler."
WHERE id = 2;

UPDATE livre
SET `resume` = "Personne ne l'a vue venir. 
La Grande Tempête : un ouragan de vent et de neige qui plonge le pays dans l'obscurité et l'effroi. 
D'étranges éclairs bleus rampent le long des immeubles, à la recherche de leurs proies, qu’ils tuent ou transforment... 
Après leur passage, Matt et Tobias se retrouvent sur une Terre ravagée, différente. 
Désormais seuls, ils vont devoir s’organiser. Pour comprendre. Pour survivre... à cet Autre-Monde."
WHERE id = 3;

UPDATE livre
SET `resume` = "Un soir, après sa journée de travail comme serveur dans une taverne, Billy Wiles trouve un mot dactylographié sur le pare-brise de sa voiture.
Si vous ne montrez pas ce billet à la police, et qu'elle n'intervient pas, je vais tuer une jolie enseignante blonde... 
Mais si vous montrez ce billet aux policiers, c'est une vieille dame très active que je vais tuer. Vous avez six heures pour décider. Le choix vous appartient. 
Pour le policier Lanny Olsen, l'ami de Billy, c'est juste une plaisanterie de mauvais goût. Il lui conseille de rentrer chez lui et d'oublier l'incident.
Moins de vingt-quatre heures plus tard, une jeune enseignante blonde est retrouvée assassinée. Et voilà que Billy reçoit une deuxième lettre, avec un nouvel ultimatum..."
WHERE id = 4;