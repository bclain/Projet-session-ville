Prérequis
Assurez-vous d'avoir installé les éléments suivants sur votre machine :

PHP (version 8.1 ou supérieure)
Composer
MySQL
Node.js et npm (pour la compilation des assets)
Installation
Suivez ces étapes pour installer le projet :

Installer les dépendances PHP

Dans le dossier du projet, exécutez :


composer install

Configurer l'environnement
Modifiez les variables suivantes dans le fichier .env pour correspondre à votre configuration MySQL :


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base_de_donnees
DB_USERNAME=utilisateur_mysql
DB_PASSWORD=mot_de_passe_mysql
Générer une clé d'application

Générez une nouvelle clé d'application Laravel :
php artisan key:generate
Exécuter les migrations et les seeders

Pour créer les tables dans votre base de données et les remplir avec des données initiales, exécutez :
php artisan migrate --seed


Lancer le serveur de développement

Démarrez le serveur de développement Laravel :
php artisan serve
Votre application devrait maintenant être accessible à l'adresse : http://localhost:8000.
