<?php


$action = null;
$creneaux = [];


while (true ){

    $debut= (int)readline("Entrez les horaires d\'ouverture du magasin: ");
    $fin = (int)readline('Entrez les horaires de fermeture du magasin: ');
    if ($debut >= $fin){
        echo 'La date de début ne peut etre supérieur à la date de fin';
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('Voulez vous enregistrez un nouveau créneau (o/n)');
        if ($action === 'n'){
            break;
            

        }
    }
}



$heure = (int)readline("A qu'elle heure voulez vous visiter le magasin : ");
$CreaneauTrouve = false;

foreach($creneaux as $creneau){
    if ($heure >= $creneau[0] && $heure <= $creneau[1]){
        $CreaneauTrouve = true;
        break;
    }

}

/* if ($CreaneauTrouve){
    echo 'Le magasin sera ouvert';
    
}else {
    echo ' le magasin sera fermé';
} */

echo 'le magasin sera ouvert de ';
foreach($creneaux as $k => $creneau){   /* $k étant la clé des index du tableau je l'utilise pour rajouter me et de */ 
    if ($k > 0){
        echo ' et de ';
    }
    echo"$creneau[0]h à $creneau[1]h";
}



/* $heureouverture= (int)readline('entrez une heure :');
if($heure) */

/* $action = null;
$notes = [];

while ($action !=='fin'){
    $action = readline('Entrez une nouvelle note ou \'fin\' pour terminer la sasie : ');
    if ($action !=='fin'){
        $notes[] = (int)$action;
    }
} */



/* 

foreach ($notes as $note){
    echo "-$note \n";
}

 */

/* $notes= [10, 15 ,16];
$eleves = [
    'cm2' => ['Jean', 'Jane', 'Ducon' , 'louis'],
    'cm1'=>  ['Gille', 'Marie', 'Betty' , 'Luke']
];


foreach($eleves as $classe => $listeEleves){

    echo "la classe $classe : \n";
    foreach ($listeEleves as $eleve){
        echo " -$eleve\n";
    }
    echo"\n";

} */


 /* for ($i = 0; $i < 3; $i++){
     
    echo '- '. $notes[$i];
} */

/* while ($chiffre !==10){
    

    $chiffre = (int)readline ('entrer une valeur : ');
} */