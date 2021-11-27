<?php

namespace Cspivack\Faker\Tests;

use PHPUnit\Framework\TestCase;
use Faker\Factory;

final class PlayerTest extends TestCase
{
    protected $faker;

    public const PLAYER = [
        'first' => 'Bobson',
        'last'  => 'Dugnutt',
    ];

    public function setUp(): void
    {
        $class = 'Cspivack\\Faker\\FightingBaseballProvider';
        $faker = Factory::create();
        $faker->seed(210);
        $faker->addProvider(new $class($faker));

        $this->faker = $faker;
    }

    public function testCanReturnPlayerName(): void
    {
        $this->assertIsString($this->faker->playerName());
    }

    public function testCanReturnTeamName(): void
    {
        $this->assertIsString($this->faker->playerTeam());
    }

    public function testCanReturnPositionName(): void
    {
        $this->assertIsString($this->faker->playerPosition());
    }

    public function testCanReturnPlayerObject(): void
    {
        $this->assertInstanceOf(\Cspivack\Faker\Player::class, $this->faker->player());
    }

    public function testCanReturnPlayerObjectFullName(): void
    {
        $this->assertIsString($this->faker->player()->name());
    }

    public function testCanReturnPlayerNameMatch(): void
    {
        $this->assertSame(static::PLAYER['first'] . ' ' . static::PLAYER['last'], $this->faker->player()->name());
    }

    public function testCanReturnPlayerObjectToString(): void
    {
        $this->assertIsString((string) $this->faker->player());
    }

    public function testCanReturnPlayerObjectFirstName(): void
    {
        $this->assertIsString($this->faker->player()->firstName());
    }

    public function testCanReturnPlayerObjectLastName(): void
    {
        $this->assertIsString($this->faker->player()->lastName());
    }

    public function testCanReturnPlayerObjectTeam(): void
    {
        $this->assertIsString($this->faker->player()->team());
    }

    public function testCanReturnPlayerObjectPosition(): void
    {
        $this->assertIsString($this->faker->player()->position());
    }

    public function testCanReturnPlayerObjectBenched(): void
    {
        $this->assertIsBool($this->faker->player()->benched());
    }

    public function testCanReturnStartingPlayer(): void
    {
        $this->assertFalse($this->faker->startingPlayer()->benched());
    }

    public function testCanReturnBenchedPlayer(): void
    {
        $this->assertTrue($this->faker->benchedPlayer()->benched());
    }
}
