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

    public function fizzbuzz(int $chiffre) : int|string{
        echo "lancement du test avec $chiffre \n";
        if($chiffre % 3 === 0 && $chiffre % 5 === 0){
            return "fizzbuzz" ;
        }else if($chiffre % 3 === 0) {
            return "fizz" ;
        }else if($chiffre % 5 === 0) {
            return "buzz" ;
        }
        return $chiffre ; 
    }

}