<?php

use PHPUnit\Framework\TestCase;

class PremierTest extends TestCase{
    public function test_exemple1(){ // règle de nommage des fonctions de test
        // dans la méthode que l'on va écrire un test 
        // traitement 
        $a = 1 + 1 ;
        // assertion 
        $this->assertSame($a , 2);
    }
    /** @test */
    public function exemple2(){ // ou utiliser une annotation avant la méthode
        $a = "bonjour" . "les amis";
        $this->assertSame($a , "bonjourles amis");
    }
}

// php vendor/bin/phpunit --color tests
// composer run test