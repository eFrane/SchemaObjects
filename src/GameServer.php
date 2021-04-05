<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Server that provides game interaction in a multiplayer game.
 */
class GameServer extends Intangible
{
    /**
     * Status of a game server.
     */
    private $serverStatus;

    /**
     * Number of players on the server.
     */
    private $playersOnline;

    /**
     * Video game which is played on this server.
     */
    private $game;

    public function getServerStatus()
    {
        return $this->serverStatus;
    }

    public function setServerStatus($serverStatus)
    {
        $this->serverStatus = $serverStatus;
    }

    public function getPlayersOnline()
    {
        return $this->playersOnline;
    }

    public function setPlayersOnline($playersOnline)
    {
        $this->playersOnline = $playersOnline;
    }

    public function getGame()
    {
        return $this->game;
    }

    public function setGame($game)
    {
        $this->game = $game;
    }
}

