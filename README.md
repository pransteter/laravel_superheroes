Basic application with a simple CRUD of Heroes using Laravel Framework.

### Prerequisites

You'll need to install Docker, PHP, Composer and Mysql.
Here, as we can install using the debian bash:

Docker:
```
sudo apt-get install docker docker-compose docker.io
```

Php7.0 (necessary to use Composer)
```
sudo apt-get install php7.0 php7.0-mbstring php7.0-xml php7.0-mysql
```

Composer
```
sudo apt-get install composer
```

Mysql
```
sudo apt-get install mysql-client-5.7 mysql-server-5.7
```

### Installing

Firstly you need to create an environment to run it. So, inside laravel_superheroes folder, using the bash, hit this:

```
sudo docker-compose up
```

Now you have to install the laravel project using the Composer. 
So, enter inside the laravel_superheroes/superheroes folder and hit this:

```
sudo composer install
```

We need to start the database configuration. So we need to access the mysql container,
create a database and enable a global variable (FOREIGN_KEY_CHECKS) that can avoid the migration process of laravel:

```
*Accessing:
mysql -uroot -proot -h172.27.0.6

*Creating a database (Obs.: If docker didn't create.):
CREATE DATABASE `superheroes_app`;

*Set the global configuration:
SET GLOBAL FOREIGN_KEY_CHECKS = 0;

*Leaving the mysql service:
exit;
```

Now we'll finish the installation with Laravel artisan console:
```
sudo php artisan migrate
```

## Getting Started

Access through the url/ip:
http://172.27.0.2

If you need/want some data to check the functionalities, you can use the factory `HeroImage` to create fake data on database:
```
* Access the tinker from Laravel (inside laravel_superheroes/superheroes/ directory):
sudo php artisan tinker

* Run the factory create method (This will create 30 HeroImages and 30 Heroes):
factory(App\HeroImage::class, 30)->create()
```

## Running the tests

We just need to run this code on bash to execute all the Hero tests (inside laravel_superheroes/superheroes/ directory)::
```
vendor/bin/phpunit
```


## Built With

* [Laravel](https://laravel.com) - The PHP framework used

## Authors

* **Romulo Pransteter da Silva**


