## Créer un projet Symfony 6.4 avec Composer et y installer API-platform

## Installation de Symfony

```sh
# Installer symfony
composer create-project symfony/skeleton:"6.4.*" repertoire_du_projet
# Se positionner dans le répertoire du projet
cd repertoire_du_projet
```

## Installation des dépendances

```sh
# Ajout d'api-platform
composer require api
# Ajout du maker-bundle
composer require symfony/maker-bundle -- dev
```

## Créer la base de données et configurer symfony pour cette base de données

Créer la base de donnée dans MySQL

Dans le fichier `.env`, décommenter la ligne correspondant à votre serveur de base de données (et commenter les autres). On utilisera ici MySQL

```sh
DATABASE_URL="mysql://root@localhost:3306/nom_base_de_donnees?serverVersion=8.0.30&charset=utf8mb4"
```
Adapter le numéro de version avec celui de votre installation Laragon.

![Laragon-mysql](./assets/laragon-mysql.jpg)


## Créer une entité 

```sh
# Dans le répertoire du projet
php bin/console make:entity
# Repondre "yes" à la 1ere question (exposer l'entité sur l'API)
# Répondre aux questions de l'utilitaire (ajout des attributs)
```

## Appliquer les migrations

```sh
# Créer la migration
php bin/console make:migration
# Appliquer la migration (met à jour la base de données)
php bin/console doctrine:migrations:migrate
```

Une fois votre ou vos entités créé et migrées, lancer le serveur web de PHP

```sh
php -S localhost:3000 -t public
```

Accéder à l'application via [http://localhost:3000/api](http://localhost:3000/api)