<?php

$insultes = ['merde', 'con'];
$phrase = readline("entrez votre mot:");
    
foreach($insultes as $insulte){
    $taille = strlen($insulte);
    $replace = str_repeat('*',strlen($insulte));
    $phrase = str_replace($insulte,$replace,$phrase);
}

echo $phrase;
    




/* while (true){
    $mot = readline('entrez votre mot: ');
    if ($mot === 'exit'){
        exit('fin du programme');
    }

} */


/* $notes = [20,13,10];
array_push($notes, 16,17);
print_r($notes);
 */

/* $somme = array_sum ($notes);
$nombre = count($notes);
$moyenne = $somme / $nombre; */




/* echo "vous avez " . round($somme / $nombre, 2) . " de moyenne"; */












/* $word = readline('Entrez un mot: ');
$word2 = strtolower(strrev ($word));


if (strtolower($word) === $word2){
    echo "le mot '$word' est un palindrome";

}else
 {echo "le mot '$word' n'est pas un palindrome";
} */


