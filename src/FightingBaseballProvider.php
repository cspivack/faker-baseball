<?php

namespace Faker\Provider;

use Faker\Provider\Base as BaseProvider;

class FightingBaseballProvider extends BaseProvider
{
    public function playerName()
    {
        $players = [static::randomElement(PlayerData::getPlayers()), static::randomElement(PlayerData::getPlayers())];
        return $players[0]['first'] . ' ' . $players[1]['last'];
    }

    public function player()
    {
        return new Player(static::randomElement(PlayerData::getPlayers()));
    }

    public function startingPlayer()
    {
        static $startingPlayers;
        $startingPlayers = $startingPlayers ?: array_filter(PlayerData::getPlayers(), function ($player) {
            return !$player['bench'];
        });

        return new Player(static::randomElement($startingPlayers));
    }

    public function benchedPlayer()
    {
        static $benchedPlayers;
        $benchedPlayers = $benchedPlayers ?: array_filter(PlayerData::getPlayers(), function ($player) {
            return $player['bench'];
        });

        return new Player(static::randomElement($benchedPlayers));
    }

    public function playerPosition()
    {
        return static::randomElement(PlayerData::getPositions());
    }

    public function playerTeam()
    {
        return static::randomElement(PlayerData::getTeams());
    }
}
