# PHPUnit 


=> Nous allons voir ensemble PHPUnit 
=> <https://phpunit.de/index.html>

<https://docs.phpunit.de/en/12.0/installation.html#composer>

- pour installer PHPUnit il faut OBLIGATOIREMENT avoir au préalable avoir installer Composer

- créer un dossier jour01-tp

```sh 
cd jour01-tp
composer require --dev phpunit/phpunit
# --dev => dépendance de développement / phpunit est une librairie que l'on doit utiliser UNIQUEMENT sur les machines de dev
```

pour Kevin D => 

1. lancer un terminal et tu dois être positionné dans le dossier du fichier Vagrantfile 

```sh
vagrant up # si ça marche pas vagrant halt puis de nouveau un vagrant up
vagrant ssh
cd /var/www/html
mkdir jour01-tp
cd jour01-tp
composer init 
composer require --dev phpunit/phpunit
```


## les fichiers intéressants 

- vendor/bin/phpunit
- composer.json 

## composer.json 

```json 
{
    "require-dev": {
        "phpunit/phpunit": "^11.5"
    }
}
```

## vendor/bin/phpunit 

- fichier PHP (bien qu'il n'ait pas de l'extension php)
- fichier PHP EXECUTABLE => fichier que l'on va exécuter dans un terminal / pas via un serveur APACHE (ou symfony serve)

## lancer des tests 

```sh
cd jour01-tp
php vendor/bin/phpunit 
php vendor/bin/phpunit [options] <dossier_qui_contient_test>
```

## organisation

- créer un dossier `tests` (norme du nom du dossier)
- Dans le dossier `tests`, créer un fichier PremierTest.php


Cas pratique

1. créer un nouveau fichier de test qui s'appeler ExoTest.php
2. ce fichier contient une class qui extends ExoTest
3. cette class contient une méthode test_demo
4. cette méthode contient une soustraction 10 - 5 contenu dans la variable $a
5. ajouter une assertion qui permet de verifier que $a est égal à 5
6. exécuter votre script via PHPUnit 
