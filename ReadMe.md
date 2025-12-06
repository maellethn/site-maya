## Site Ernest

# Présentattion

![Static Badge](https://img.shields.io/badge/symfony-v7.4-black?logo=symfony)
![Static Badge](https://img.shields.io/badge/php-v8.1-blue?logo=php)

# Initialisation et instalation
* copier coller le .env.local et le renommer en .env

* Lancement des container docker 
`make up`

Build du symphony
```bash
. ./.env
.bin/composer install
.bin/php bin/console doctrine:database:create
.bin/mysql --database=ernestidb --user=root --host=127.0.3.1 --port=3306 < db/dump.sql
.bin/php bin/console ckeditor:install
.bin/php bin/console assets:install public
.bin/php bin/console c:c
echo "
$IP ernest-thinon.dev.com
" | sudo tee -a /etc/hosts
```
Votre site local est maintenant accessibe sur l'url [ernest-thinon.dev.com](http://ernest-thinon.dev.com)
## Comandes utiles

lancement des commandes php dans le container php
```bash
.bin/php
```
Créer un dump 
```bash
.bin/mysqldump -u root -p ernestidb --set-gtid-purged=OF | gzip > db/data-dump.sql.gz
```