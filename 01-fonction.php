<?php
/**
 * Created by PhpStorm.
 * User: webform
 * Date: 3/05/2016
 * Time: 14:26
 */

// création de notre première fonction récursive
/*
 * 1 argument obligatoire : les résultats sql du menu, si non déclarés, $parent et $niveau valent 0 au lancement de la fonction
 */

function affiche_menu1($tableau_sql,$parent=0,$niveau=0){
    // variable de sortie
    $sortie="";

    // tant qu'il y a des éléments dans notre tableau de résultats sql
    foreach($tableau_sql AS $item){
        // si le parent vaut id_parent
        if($parent==$item['id_parent']){
            // on ajoute des --- pour chaque niveau
            for($i=0;$i<$niveau;$i++){
                $sortie .= "---";
            }
                // affichage du titre
                $sortie .= " ".$item['lintitule']."<br/>";
                // on relance la fonction récursive pour traiter les "enfant" du niveau actuel
                $sortie .= affiche_menu1($tableau_sql, $item['id'], ($niveau+1) );

        }
    }

    // retour du résultat
    return $sortie;
}