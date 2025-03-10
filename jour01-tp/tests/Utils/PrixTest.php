<?php

use App\Utils\Prix;
use PHPUnit\Framework\TestCase;

class PrixTest extends TestCase{

    public function test_prixTTC(){

        $prix = new Prix();
        $resultat1 = $prix->prixTTC(1, "euro");
        $this->assertSame($resultat1 , 1.2);
        $resultat2 = $prix->prixTTC(1, "dollar");
        $this->assertSame($resultat2 , 1.4); 

    }

    public function test_totalFacture(){
        
        $prix = new Prix();
        $resultat = $prix->totalFacture([1,2]);
        $this->assertSame($resultat , 3); 

    }

}