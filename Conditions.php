<?php
$action = (int)readline('Entrez votre action : (1 : attaquer , 2: défendre, 3 : passer mon tour');


if ($action === 1 ) {
    echo 'j\'attaque';
} elseif ($action === 2 ) {
    echo 'je défend';
}elseif ($action === 3 ) {
    echo 'je ne fais rien';
}else {
    echo 'commande inconnue';
}



/* switch ($action){
    case 1 : 
        echo 'j\'attaque';
    break;

    case 2 : 
        echo 'je défend';
    break;

    case 3 : 
        echo 'je ne fais rien';
    break;
    default : 
    echo 'commande inconne';


}
 */
