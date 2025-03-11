<?php 

namespace App\Utils ;

class Word {

    public function voyelle(string  $text):array{

        $resultat = [];

        $voyelles = ["a", "e", "i", "o", "u", "y"];

        for($i = 0 ; $i < strlen($text) ; $i++){
            $lettre = $text[$i];
            if(in_array($lettre , $voyelles)){
                $resultat[] = $lettre ; 
            }
        }

        return $resultat ; 

    }

}