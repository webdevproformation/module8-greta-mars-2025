<?php


use App\Utils\Exemple;
use PHPUnit\Framework\TestCase;

class ExempleTest extends TestCase{

    public function test_assertion1(){

        $tableau = [
            "id" => 1 ,
            "nom" => "Alain",
            "time" => time()
        ];

        sleep(1);

        $expected_tableau = [
            "id" => 1 ,
            "nom" => "Alain",
            "time" => time()
        ];

        $this->assertArrayIsIdenticalToArrayOnlyConsideringListOfKeys($tableau , $expected_tableau , ["id", "nom"]); 
    }


    public function test_assertion2(){

        // verification en type et en valeur 
        //$this->assertSame("2" , 2); // erreur !  ce n'est pas le même type string versus int  ===
        $this->assertEquals("2" , 2); // == vérification QUE la valeur pas le type 

        $tableau = [0, null , [] , "" , -0 , false]; // considéré comme une valeur vide  
        foreach($tableau as $valeur){
            $this->assertEmpty($valeur);
        }
        $this->assertContains("Alain" , ["Alain", "Céline", "Zorro"]);

        $this->assertStringContainsString("Alain" , "Bonjour Alain");

        /* $this->assertException(); */

    }

    public function test_toto(){

        $exemple = new Exemple();

        $resultat = $exemple->toto(1) ;

        $this->assertEquals(1, $resultat); 

        // il faut mettre l'interception de l'exception AVANT 
        $this->expectException(\Exception::class) ; 
        // le traitement 
        $exemple->toto(-1);


    }

}