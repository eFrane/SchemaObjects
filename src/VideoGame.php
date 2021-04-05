<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A video game is an electronic game that involves human interaction with a user
 * interface to generate visual feedback on a video device.
 */
class VideoGame extends SoftwareApplication
{
    /**
     * Cheat codes to the game.
     */
    private $cheatCode;

    /**
     * Links to tips, tactics, etc.
     */
    private $gameTip;

    /**
     * The server on which  it is possible to play the game.
     */
    private $gameServer;

    public function getCheatCode()
    {
        return $this->cheatCode;
    }

    public function setCheatCode($cheatCode)
    {
        $this->cheatCode = $cheatCode;
    }

    public function getGameTip()
    {
        return $this->gameTip;
    }

    public function setGameTip($gameTip)
    {
        $this->gameTip = $gameTip;
    }

    public function getGameServer()
    {
        return $this->gameServer;
    }

    public function setGameServer($gameServer)
    {
        $this->gameServer = $gameServer;
    }
}

