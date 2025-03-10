# déploiement / migration


prendre le code d'une machine => pour le faire fonctionner sur une autre machine 

## Challenges 

=> Système d'exploitation différent

=> Linux 
=> Windows 

=> base de données différentes

=> base de données SQLITE
=> base de données MySQL / MariaDB 

=> installer tous les binaires nécessaires sur les machines (php / composer / git ...)

=> Plusieurs développeurs qui travaillent sur un même projet en parallèle 

=> réconcilier le travail de ces développeurs sachant que 1 seule machine finale 

## Objectif 

=> réussir ces migrations de manière FIABLE

---------------------


développeur (son code) ET machine finale (hébergement)


série de tests automatisés 

=> code qui va verifier mon code 

=> ouvrir une page web / remplir un formulaire / verifier que tout est ok en base de données / visuellement .... 