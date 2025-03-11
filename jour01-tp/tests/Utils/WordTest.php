<?php

use App\Utils\Word;
use PHPUnit\Framework\TestCase;

class WordTest extends TestCase{

    public function test_voyelle(){

        $word = new Word();
        $resultat = $word->voyelle("bonjour");
        $this->assertSame($resultat , ["o","o", "u"]);

        $resultat = $word->voyelle("");
        $this->assertSame($resultat , []);

        $resultat = $word->voyelle("hello");
        $this->assertSame($resultat , ["e", "o"]);

        $resultat = $word->voyelle("rrrrrrrr");
        $this->assertSame($resultat , []);

        $resultat = $word->voyelle("aaaa");
        $this->assertSame($resultat , ["a","a", "a", "a"]);
    }


}
                       
