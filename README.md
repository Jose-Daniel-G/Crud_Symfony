
```bash
symfony new demoapp --webapp
php bin/console make:entity Product
php bin/console make:crud
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate

symfony serve -d

php bin/console make:controller Product
php bin/console debug:router


php bin/console doctrine:fixtures:load
php bin/console doctrine:database:create
```
symfony new demoapp 
* if you use docker execute:
  
```bash
docker-compose up -d
```

  *SQLITE*
```bash
php bin/console doctrine:schema:create
php bin/console doctrine:migrations:migrate
```

**execute QUERY**
```bash
 php bin/console dbal:run-sql "SELECT * FROM product"
```

 **packages**
```bash
 composer require --dev symfony/profiler-pack
 composer require symfony/form
 composer require symfony/validator
 php bin/console make:form
 ```
 **fake**
```bash
 php bin/console doctrine:fixtures:load
```

```bash
symfony new demoapp --webapp
php bin/console make:entity Product
php bin/console make:crud
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate

symfony serve -d

php bin/console make:controller Product
php bin/console debug:router


php bin/console doctrine:fixtures:load
php bin/console doctrine:database:create
```
symfony new demoapp 
* if you use docker execute:
  
```bash
docker-compose up -d
```

  *SQLITE*
```bash
php bin/console doctrine:schema:create
php bin/console doctrine:migrations:migrate
```

**execute QUERY**
```bash
 php bin/console dbal:run-sql "SELECT * FROM product"
```

 **packages**
```bash
 composer require --dev symfony/profiler-pack
 composer require symfony/form
 composer require symfony/validator
 php bin/console make:form
 ```
 **fake**
```bash
 php bin/console doctrine:fixtures:load
```
