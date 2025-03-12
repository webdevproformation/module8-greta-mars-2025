# Symfony est livré avec PHPUnit 

symfony new <projet> --webapp 

=> PHPUnit est intégré par défaut dans le téléchargement

=> TestCase (TestUnitaire)
=> Test d'intégration (proposés automatiquement lorsque )

symfony console make:crud => oui 

# cas pratique 

=> créer un nouveau projet symfony 

jour02-tp 

=> créer une base de données SQLite 

// créer une entité Auteur 

=> id PK 
=> prenom
=> nom
=> age
=> dt_creation 

// créer la table dans la base données

// créer un crud sur cette table => 
// attention mettre yes au moment où il va vous proposer des créer des tests d'intégration 

```php
 public function palindrome (string $text):string{

        $normalText = str_replace('/', '', $text);
        if ($normalText === strrev($normalText)) {
            return "True";
        }
        return "False";
    } 



public function palindrome (string $text):bool
{
    $normalText = str_replace('/', '', $text);
    return $normalText === strrev($normalText)
}

```


## découverte 

```php 
// test d'intégration 
// test qui réaliser une cas d'espèce de l'application
// complet de l'application
// final => pas possible de faire AuteurController2Test extends AuteurControllerTest {}
final class AuteurControllerTest extends WebTestCase{
    
    // méthode SPECIALE / MAGIQUE de la librairie PHPUnit 
    // exécuter automatique avant chaque méthode de test  
    // va être exécuter 5 fois 
    // méthode permet d'initialiser des variables pour l'ensemble des méthodes de test 
    protected function setUp(){ } 

    // autant de test que de méthode dans le fichier AuteurController
    public function testIndex(){}
    public function testNew(){}
    public function testShow(){}
    public function testEdit(){}
    public function testRemove(){}
}
```