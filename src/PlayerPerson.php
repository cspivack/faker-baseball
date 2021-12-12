<?php

namespace Faker\Provider;

final class PlayerPerson extends \Faker\Provider\Person
{
    public static function make(\Faker\Generator $generator, array $data)
    {
        $provider = new self($generator);

        $provider::$firstNameMale = [$data['first']];
        $provider::$firstNameFemale = [$data['first']];
        $provider::$lastName = [$data['last']];

        return $provider;
    }
}
