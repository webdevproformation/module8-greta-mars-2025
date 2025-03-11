<?php

use App\Utils\Word;
use PHPUnit\Framework\Attributes\DataProvider;
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

    #[DataProvider("voyelleProvider")]
    public function test_voyelle2(string $text , array $expected){

        $word = new Word();
        $resultat = $word->voyelle($text);
        $this->assertSame($resultat , $expected);

    }
    public static function voyelleProvider(){
        return [
           "cas bonjour"     => [ "bonjour"  , ["o","o", "u"]       ],
           "cas string vide" => [ ""         , [ ]                  ],
           "cas hello"       => [ "hello"    , ["e", "o" ]          ],
           "cas rrrrrrrr"    => [ "rrrrrrrr" , []                   ],
           "cas aaaa"        =>  [ "aaaa"    , ["a","a", "a", "a"]  ]
        ];
    }
}
                       
