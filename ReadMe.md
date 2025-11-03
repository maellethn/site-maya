## Site Ernest

# Initialisation et instalation
Lancement des container docker 
`make up`

Build du symphony
* `.bin/composer install`
* ``.bin/php bin/console doctrine:database:create``
* `` .bin/mysql --database=ernestidb --user=root --host=127.0.3.1 --port=3306 < db/dump.sql``
* `.bin/php bin/console ckeditor:install`
* `.bin/php bin/console assets:install public`
* `.bin/php bin/console c:c`
## Comandes utiles

lancement des commandes php dans le container php
`.bin/php`
