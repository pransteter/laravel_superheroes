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
create a database and enable a global setting to avoid the migration process:

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


## Running the tests

Explain how to run the automated tests for this system


## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Authors

* **Romulo Pransteter da Silva**


