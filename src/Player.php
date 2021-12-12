<?php

namespace Faker\Provider;

class Player
{
    protected $generator;
    protected $data = [];

    public function __construct(\Faker\Generator $generator, array $data)
    {
        $provider = PlayerPerson::make($generator, $data);
        $generator->addProvider($provider);

        $this->generator = $generator;
        $this->data = $data;
    }

    public function team(): string
    {
        return $this->data['team'];
    }

    public function position(): string
    {
        return $this->data['position'];
    }

    public function benched(): bool
    {
        return $this->data['bench'];
    }

    public function __toString(): string
    {
        return $this->generator->format('name');
    }

    /**
     * @param string $method
     * @param array  $attributes
     */
    public function __call($method, $attributes)
    {
        if (in_array($method, ['name', 'firstName', 'lastName', 'email', 'safeEmail', 'freeEmail'])) {
            return $this->generator->format($method, $attributes);
        }
    }
}
