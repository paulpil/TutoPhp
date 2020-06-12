<?php

function repondre_oui_non($phrase){
    while (true){
        $action = readline ($phrase . " oui/non : ");
        if ($action === 'o'){
            return true;
        } else if ($action === 'n'){
            return false;
        }
        
    }

}


 function demander_creneau ($phrase = 'Veuillez entrer un creneau'){
    echo $phrase . "\n" ;
    while (true){
        $ouverture = (int)readline ('Heure d\'ouverture : ');
        if ($ouverture >= 0 && $ouverture <= 23){
        break;

        }
    } while (true){
        $fermeture = (int) readline ("Heure de fermeture : ");
        if ($fermeture >= 0 && $fermeture <=23 && $fermeture > $ouverture){
            break;
        }
    }
    return [$ouverture, $fermeture];
 }
 $creneau = demander_creneau('Veuillez entre le créneau matin');
 $creneau2 = demander_creneau('Veuillez entrer le creneau aprem');
 $creneau3 = demander_creneau('Veuillez entrer creneau soir');
 var_dump($creneau, $creneau2,$creneau3);

 echo "le creneau du soir est de $creneau3[0]h à $creneau3[1]h";

    




