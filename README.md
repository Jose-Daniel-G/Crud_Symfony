symfony new demoapp
symfony serve

php bin/console make:controller Product
php bin/console debug:router

php bin/console make:entity Product
php bin/console make:migration
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
php bin/console doctrine:database:create

-------- SQLITE 
php bin/console doctrine:schema:create
php bin/console doctrine:migrations:migrate

------ execute QUERY
 php bin/console dbal:run-sql "SELECT * FROM product"

 ----- packages
 composer require --dev symfony/profiler-pack
 composer require symfony/form

 ----------------
 php bin/console make:form