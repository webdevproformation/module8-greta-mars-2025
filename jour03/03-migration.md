# migrer un projet Symfony (Sqlite)

- prendre un hébergement
- code FTP
- transfère  le code source votre ordinateur vers hébergeur avec FileZilla (client)
- .env => APP_ENV=dev  =>  APP_ENV=prod
- dans le dossier public/ fichier .htaccess => à tranférer 
- le tranfert des fichiers peut prendre entre 10 min et 30 min (tout dépend votre connexion)


# migrer un projet Symfony (MySQL)

- en plus de tout ce qui vient d'être présenté 
- en local sur MySQL 
    - lancer XAMPP ou MAMP (IL FAUT OBLIGATOIREMENT que ces logiciels SOIENT démarrés)
    - modifier le fichier .env => 
        - XAMPP on travaille sur MariaDB
        - MAMP on travaille sur MySQL 
    
    - supprimer les migrations 
    - symfony console d:d:c
    - symfony console make:migration (attention au niveau de version de MariaDB)
    - symfony console d:m:m

- 
- puis faire un DUMP de la base de données en local
    - phpmyadmin
    - sélectionner ma base de données (projet3)
    - onglet exporter
    - clique sur le bouton exporter
    - avoir un fichier .....sql (=> ce fichier qui est le DUMP)
    - un fichier contient l'ensemble des CREATE TABLE de mes tables dans ma base de données 

- puis importer ce dump sur le phpMyAdmin de l'hébergement 
- 
    - sur l'hébergement => créer une base de données 
    - il me donne des identifiants (à garder précieusement)

    - 