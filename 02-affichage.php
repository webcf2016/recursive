<?php
// dépendances
require_once "PDO.php";
require_once "02-fonction.php";

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
<p>Faites un beau menu en CSS</p>
<p><div id="menu">
  <?php

  echo affiche_menu2($recup_menu);

  ?></div>
</p>

</body>
</html>