<?php
// dépendances
require_once "PDO.php";
require_once "01-fonction.php";

// requête pour récupérer toutes les entrées dans 'monmenu'
$recup_menu = $pdo->query("SELECT * FROM monmenu");

// création du tableau associatif contenant les éléments du menu
$recup_menu = $recup_menu->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Affichage de nos fonctions récursives</title>
</head>
<body>
<h1>Affichage de nos fonctions récursives</h1>
<h2>First</h2>
<p>Une fonction récursive est appelée par elle-même. D'une certaine manière il s'agit d'une forme de boucle. ! La fonction récursive ne doit pas être infinie<br/>Pour créer un menu multiniveaux sans connaître le nombre et la profondeur de chaque rubrique, elle est indispensable!</p>
<p>
  <?php

  echo affiche_menu1($recup_menu);

  ?>
</p>
<h2>Seconds</h2>
</body>
</html>