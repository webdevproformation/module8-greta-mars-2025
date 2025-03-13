# migrer votre projet sur un hébergement

=> je pars du principe Symfony 


=> PHP 

# cas concrêt => je veux migrer le projet jour02-tp sur l'hébergement


## hébergement 

=> machine qui est loué à l'année 
=> 24h/24 et 7j/7
=> Linux avec Apache / PHP / MySQL (vagrant que vous aviez quand vous avez fait du PHP)
=> l'hébergeur va vous mettre à disposition un site internet (manager) qui va permettre de gérer votre hébergement 

--- 

pour acheter hébergement  + domaine 

https://www.nuxit.com/pack-etudiant/

code IFOCOP

=> ATTENTION ne pas oublier d'inclure le domaine à 0€ dans votre PANIER 

=> temps entre le moment du paiement et la mise à disposition du l'hébergement + domaine (entre 2h et 24h)
=> il y a des emails que vous allez recevoir au fur et à mesure

=> processus de commande décrit en détail sur le lien suivant :

<https://formation.webdevpro.net/symfony/16-deploiement.html>

## manager 

- Domaine
    - nom de domaine 
    - expiration
    - Zone DNS
    - super-site.fr <=======> IP (machine) ne pas toucher / ouvrir en cas de problème


- Hébergement web
    - mes sites => gérer un ou plusieurs site internet sur l'hébergement
                => avec 1 ou plusieurs domaines
    - base de données SQL
                => créer jusqu'à 4 base de données 
    - configuration PHP
                => choisir la version de PHP et activer certaines options 
    - compte FTP
                => permet de créer un compte FTP qui va être utilisé via un logiciel qui s'appelle FileZila
    - certificat SSL 
                => mettre en place le https sur votre site internet (Let'Encrypt)


# installation 

=> <https://filezilla-project.org/download.php>


## préparer du projet 


## transfert 