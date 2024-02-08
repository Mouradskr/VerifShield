## Auteur - Mourad SEKKAR

## Informations Techniques

- **Framework:** Laravel
- **Version de PHP recommandée:** 7.4 ou supérieure
- **Base de données:** MySQL

## Comment Utiliser

1. **Clonage du Projet:**
    ```bash
    git clone https://github.com/Mouradskr/VerifShield.git 
    ```

2. **Installation des Dépendances:**
    ```bash
    cd verifshield
    composer install
    ```

3. **Configuration du Fichier .env:**
    - Copier le fichier `.env.example` en un nouveau fichier `.env` et configurer les paramètres, notamment ceux de la base de données.
    ```bash
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=verifshield_db
      DB_USERNAME=root
      DB_PASSWORD=
    ```

4. **Génération de la Clé d'Application:**
    ```bash
    php artisan key:generate
    ```

5. **Migrations de la Base de Données:**
    ```bash
    php artisan migrate
    ```

6. **Lancement du Serveur de Développement:**
    ```bash
    php artisan serve
    ```
   L'application sera accessible à l'adresse [http://localhost:8000](http://localhost:8000) par défaut.



