# Projet Laravel - Stage DUT MMI Chambéry

Lors de mon stage de fin de d'étude, j'ai pu travailler sur le site web du LearningLab et l'adapter sous le Framework Laravel.

Vous trouverez dans ce repository tous les fichiers nécessaires à l'initialisation du projet.

Merci aux personnes qui reprennent ce projet !

Pham Théo - Ancien étudiant MMI - 2022

# Installation

Vous devez d'abord posséder une plateforme de développement web telles **XAMPP** ou **WAMP**.

XAMPP : [https://www.apachefriends.org/fr/download.html](https://www.apachefriends.org/fr/download.html)

WAMP : [https://sourceforge.net/projects/wampserver/](https://sourceforge.net/projects/wampserver/)

Version de PHP : 8.1.5

Installez Composer.

Composer veresion 2.3.5 : [https://getcomposer.org/download/](https://getcomposer.org/download/)

Ensuite ouvrez Composer et entrer la commande suivante pour installer Laravel :

`composer global require laravel/installer`

## Partie 1 - Clôner le git

Rendez-vous dans votre dossier **htdocs** de votre XAMPP ou WAMP.

Chemin (exemple) : **C:\xampp\htdocs**

Faites la commande suivant en ouvrant un terminal **GIT** :

`git clone https://github.com/Pheo73/LearningLab.git`

## Partie 2 - Initialiser le projet

Ouvrez le projet avec un éditeur de code telles que **Visual Studio Code** par exemple.

Rendez vous dans votre répertoire grâce à votre **invite de commande** : cd C:\xampp\htdocs\Learninglab

Dans le **terminal** entrez les commandes :

`composer install`

`npm install`

`cp .env.example .env`

`php artisan key:generate`

Si vous rencontrez des **erreurs** essayez ces commandes :

`php artisan cache:clear`

`php artisan view:clear`

`php artisan config:clear`

## Partie 3 - Modifier le .env pour lier la BDD et le serveur SMTP

Vous pouvez retouver le fichier .sql de la base de données dans le dossier **database**

Rendez vous dans votre [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/) de votre XAMPP ou WAMP et importer le fichier .sql

Enfin modifier votre fichier .env :

DB_DATABASE=LearninglabBDD

DB_USERNAME=root

DB_PASSWORD=

Pour le serveur SMTP vous pourrez vous addresser à M.Carron pour les id/mdp du compte

Enfin modifier le fichier .env pour le relier au serveur:

MAIL_MAILER=smtp

MAIL_HOST=smtp.mailtrap.io

MAIL_PORT=2525

MAIL_USERNAME=e9810508ec0415

MAIL_PASSWORD=53ebd725989f94

MAIL_ENCRYPTION=tls

MAIL_FROM_ADDRESS="learninglab73@gmail.com"

MAIL_FROM_NAME="${APP_NAME}"

## Partie 4 - Démarrer votre serveur web

Ouvrez le logiciel XAMPP ou WAMP, et appuyer sur **start** pour le module **Apache** et **MySQL**.

Ouvez ensuite votre navigateur internet et rendez-vous dans l'url suivant.

URL : [127.0.0.1](127.0.0.1)

Il nous vous reste plus qu'à développer vos fonctionnalités !

Bon courage !
