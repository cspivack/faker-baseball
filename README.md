# Faker Baseball :baseball:
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)
[![Build Status](https://github.com/cspivack/faker-baseball/actions/workflows/tests.yml/badge.svg)](https://github.com/cspivack/faker-baseball/actions/workflows/tests.yml)
[![StyleCI](https://styleci.io/repos/432312645/shield)](https://styleci.io/repos/432312645)

A [Faker](https://github.com/fakerphp/faker) provider that uses the Fighting Baseball roster to generate names, teams, and positions.

## Installation

Add the Faker Baseball library to your `composer.json` file:

```
composer require cspivack/faker-baseball
```

## Usage

To use this provider with Faker, you must add the provider class to the Faker generator:

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Faker\Provider\FightingBaseballProvider($faker));

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

To use this provider with Laravel factories, add this to your AppServiceProvider's register() method:

```php
public function register()
{
    $this->app->singleton(Generator::class, function () {
        $faker = Factory::create();
        $faker->addProvider(new \Faker\Provider\FightingBaseballProvider($faker));
        return $faker;
    });
}
```

## Tests

Run tests with `composer test` and run static analyis with `composer phpstan`.

## Roadmap

- [ ] Add support for team/player relationships (getting a list of all players on a particular team, getting a player's teammates, etc.)