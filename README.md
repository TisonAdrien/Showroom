# Showroom
========

<p align="center">
	<a href="https://symfony.com" target="_blank">
    	<img src="https://symfony.com/images/v5/pictos/home-main-illu.svg">
	</a>
</p>

A [Symfony][1] project created for learn how to use this framework.
This is a simple website where we can share shows with peoples.


## Getting Started

### Prerequisites

The project is based on Symfony then you have to install it with **Composer**.

* [Install Symfony][4] with Composer (see [requirements details][3]).
* Symfony follows the [semantic versioning][5] strictly, publishes "Long Term
  Support" (LTS) versions and has a [release process][6] that is predictable and
  business-friendly.


### Installing

First step : Clone the project and install dependencies.

```
git clone https://github.com/TisonAdrien/Showroom.git

cd Showroom
composer install
```

Second step : configure your database profile in app/config/parameters.yml

Third step : Create the database

```
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
```


### Runing

Symfony want to be running like this :

```
php bin/console server:run
```

Then go to [your website](http://localhost:8000)

## Versioning

We use Doctrine migration for the versioning of the database, so if you change or add an Entity you must do this :

```
php bin/console doctrine:migrations:diff
```

Then see the lastest version's number in /app/DoctrineMigrations/ and copy this number, then :

```
php bin/console doctrine:migrations:execute {VERSION_NUMBER}
```

{VERSION_NUMBER} is the lastest version's number that you have created

## Author

* **Adrien Tison** - *Initial work* - [TisonAdrien](https://github.com/TisonAdrien)

## License

This project is licensed under the MIT License



[1]: https://symfony.com
[3]: https://symfony.com/doc/current/reference/requirements.html
[4]: https://symfony.com/doc/current/setup.html
[5]: http://semver.org
[6]: https://symfony.com/doc/current/contributing/community/releases.html