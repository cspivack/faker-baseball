# Faker Baseball
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/cspivack/faker-baseball/main.svg?style=flat-square)](https://travis-ci.org/cspivack/faker-baseball)
[![StyleCI](https://styleci.io/repos/432312645/shield)](https://styleci.io/repos/432312645)
[![Quality Score](https://img.shields.io/scrutinizer/g/cspivack/faker-baseball.svg?style=flat-square)](https://scrutinizer-ci.com/g/cspivack/faker-baseball)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/cspivack/faker-baseball/main.svg?style=flat-square)](https://scrutinizer-ci.com/g/cspivack/faker-baseball/?branch=main)



A [Faker](https://github.com/fakerphp/faker) provider that uses the Fighting Baseball roster to generate names, teams, and positions.


## Installation


Add the Faker Baseball library to your `composer.json` file:

```
composer require cspivack/faker-baseball
```

Usage
-----

To use this provider with Faker, you must add the provider class to the Faker generator:

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Cspivack\Faker\FightingBaseballProvider($faker));

/* General data */
$faker->playerName();          // A name using random first and last names
$faker->playerPosition();      // One of the positions in the game
$faker->playerTeam();          // One of the teams in the game

/* Data for a specific player */
$faker->player()->name();      // A player's full name
$faker->player()->firstName(); // A player's first name
$faker->player()->lastName();  // A player's first name
$faker->player()->team();      // A player's team
$faker->player()->position();  // A player's position
$faker->player()->benched();   // Whether the player is coming off the bench or not (boolean)
```

Tests
-----

Run tests with `composer test`