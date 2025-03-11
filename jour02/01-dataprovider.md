# dataprovider 

<https://docs.phpunit.de/en/10.5/writing-tests-for-phpunit.html>



# cas pratique 

=> créer un test dans la class WordTest qui va verifier une fonction qui s'appelle fizzbuzz

cette fonction doit retourner :

=> 1 => 1
=> 2 => 2
=> 3 => "fizz"
=> 4 => 4 
=> 5 => "buzz" 
... multiple de 3 doivent retourner "fizz"
... multiple de 5 doivent retourner "buzz"
... multiple de 3 et 5 en même temps par exemple 15 30 doivent retourner "fizzbuzz"

Et créer le test avec le dataprovider associé 


# cas pratique

toujours dans la class WordTest vous avez une méthode qui permet de verifier la fonction qui s'appelle palyndrome

cette fonction retourne true si le string qu'on lui donne est une palydrome
c'est à dire un string qui a les même lettre dans les deux sens 

kayak / laval / 02/02/2020 => true
hello / bonjour / coucou => false 

créer la méthode de test ET créer la méthode palyndrome !!! 