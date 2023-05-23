# secureapp

Cet projet est un projet de démarrage pour l'atelier de sécurisation Web avec Symfony 6.

Cet atelier est proposé après l'étude des failles de sécurité éditées par OWASP, afin de mettre en oeuvre les préconisations résultantes au sein d'un projet créé grâce au Framework Symfony 6, sur le site ici : https://secuweb.aesisoft.fr/

___

## Prerequis

Il est nécessaire d'avoir un serveur Apache2 avec PHP de version minimum 8.1.<br/>
Il faut également une base de données MySQL ou MariaDB et un client du type PhpMyAdmin.<br/>
La version de Symfony utilisée pour créer ce projet est 6.2, celle de Composer est 2.5.5.

Pour une version précédente : https://github.com/aesisoft/secureappold

## Installation

1. Cloner l'application en local

2. Configurer l'accès au serveur de données dans le fichier .env, en fonction de la version de votre serveur Sql :

    ```INI
    DATABASE_URL=mysql://root:@127.0.0.1:3306/secureapp?serverVersion=5.7
    ```

    ```INI
    DATABASE_URL=mysql://root:@127.0.0.1:3306/secureapp?serverVersion=mariadb-10.4.28
    ```

3. Installer les composants :

    ```Bash
    composer install
    ```

4. Créer la base de données :

    ```Bash
    php bin/console doctrine:database:create
    php bin/console make:migration
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
    ```

S'il manque le dossier "migrations", créez-le à la racine du projet ...

___

## Paramétrage de PHP.ini

Pour chiffrer/déchiffrer les DCP, il faut activer la bibliothèque ***libsodium*** disponible à partir de la version PHP 7.2 :

```INI
extension=sodium
```

Si vous avez une erreur d'installation des composants, vous devrez peut-être augmenter la taille de la mémoire utilisée par PHP.

```INI
memory_limit = 512M
```

Pour tester la taille actuelle :

```Bash
php -r "echo ini_get('memory_limit').PHP_EOL;"
```
