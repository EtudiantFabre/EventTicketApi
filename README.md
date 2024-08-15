# EventTicketingAPI

## Description

EventTicketingAPI est une API développée en PHP Laravel pour la gestion de billetterie événementielle. Elle permet de consulter la liste des événements, les types de tickets disponibles, de créer et valider des intentions de commande, et de gérer les commandes.

## Fonctionnalités

- Consulter la liste des événements en cours avec pagination.
- Consulter la liste des types de tickets disponibles pour un événement donné.
- Créer une intention de commande.
- Valider une intention de commande et obtenir une URL pour télécharger les tickets.
- (Bonus) Consulter toutes les commandes effectuées par le client avec pagination.
- (Bonus) Proposer d’autres endpoints et fonctionnalités pour les utilisateurs de l’API.

## Prérequis

- PHP >= 7.3
- Composer
- Laravel >= 8.x
- SQLite (ou autre base de données supportée par Laravel)

## Installation

1. Clonez le dépôt :

    ```bash
    git clone https://github.com/votre-utilisateur/event-ticket-api.git
    cd event-ticket-api
    ```

2. Installez les dépendances :

    ```bash
    composer install
    ```

3. Créez un fichier `.env` à partir du fichier d'exemple :

    ```bash
    cp .env.example .env
    ```

4. Générez la clé de l'application :

    ```bash
    php artisan key:generate
    ```

5. Configurez votre base de données dans le fichier `.env`. Par exemple, pour SQLite :

    ```env
    DB_CONNECTION=sqlite
    DB_DATABASE=/chemin/vers/votre/database.sqlite
    ```

6. Exécutez les migrations et les seeders :

    ```bash
    php artisan migrate:fresh --seed
    ```

## Utilisation

### Endpoints de l'API

- **GET /api/events** : Liste des événements en cours avec pagination.
- **GET /api/events/{id}** : Détails d'un événement spécifique.
- **GET /api/events/{id}/ticket-types** : Liste des types de tickets pour un événement donné.
- **POST /api/order-intents** : Créer une intention de commande.
- **POST /api/order-intents/{id}/validate** : Valider une intention de commande.
- **GET /api/orders** : Liste des commandes avec pagination.
- **GET /api/orders/{id}** : Détails d'une commande spécifique.

### Authentification

L'API utilise Laravel Sanctum pour l'authentification. Assurez-vous de configurer et d'utiliser des tokens d'API pour sécuriser les endpoints.

### Documentation de l'API

La documentation complète de l'API est disponible à l'adresse suivante :
[http://localhost:8000/docs/api](http://localhost:8000/docs/api)

## Page Web pour les Demandes d'Accès à l'API

Une page web simple permet aux utilisateurs de faire une demande d'accès à l'API. Les utilisateurs doivent fournir leurs informations personnelles : nom, prénom, entreprise, adresse email, ville, et adresse. Après la soumission du formulaire, les identifiants nécessaires pour utiliser l'API seront envoyés par email.

### Accéder à la Page Web

La page web est accessible à l'adresse suivante :
[http://localhost:8000/api-access-request](http://localhost:8000/api-access-request)

## Configuration de l'Envoi d'Email

Configurez les paramètres d'email dans le fichier `.env` :

    MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=465
    MAIL_USERNAME=fabricetoyi87@gmail.com
    MAIL_PASSWORD=fsropuktactxktqd
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=fabricetoyi87@gmail.com
    MAIL_FROM_NAME="${APP_NAME}"
