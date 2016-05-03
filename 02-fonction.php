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
 *
 * sortie en UL LI
 *
 */

function affiche_menu2($tableau_sql,$parent=0,$niveau=0){
    // variable de sortie
    $sortie="";
    // niveau par défaut
    $niveau_precedent = 0;

    if($niveau==0 && $niveau_precedent==0){
        $sortie .= "<ul>";
    }

    // tant qu'il y a des éléments dans notre tableau de résultats sql
    foreach($tableau_sql AS $item){
        // si le parent vaut id_parent
        if($parent==$item['id_parent']){
            // si le niveau précédent est plus petit que l'actuel
            if($niveau_precedent<$niveau){
                $sortie .= "<ul>";
            }
                // affichage du titre
                $sortie .= "<li>".$item['lintitule'];
                // on met le niveau précédent à jour
                $niveau_precedent = $niveau;
                // on relance la fonction récursive pour traiter les "enfant" du niveau actuel
                $sortie .= affiche_menu2($tableau_sql, $item['id'], ($niveau+1) );

        }
    }

    // groupe d'instructions pour la fermeture des ul et li
    if($niveau_precedent==$niveau && $niveau_precedent!=0){
        $sortie .= "</ul></li>";
    }elseif ($niveau_precedent==$niveau){
        $sortie .= "</ul>";
    }else{
        $sortie .= "</li>";
    }

    // retour du résultat
    return $sortie;
}