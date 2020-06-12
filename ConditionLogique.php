<?php
$heure= (int)readline('entrez une heure :');


if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)){

    echo'le magasin sera ouvert';

}else {
    echo 'le magasin sera fermé';
};




