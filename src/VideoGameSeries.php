<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A video game series.
 */
class VideoGameSeries extends CreativeWorkSeries
{
    /**
     * Real or fictional location of the game (or part of game).
     */
    private $gameLocation;

    /**
     * Indicates whether this game is multi-player, co-op or single-player.  The game
     * can be marked as multi-player, co-op and single-player at the same time.
     */
    private $playMode;

    /**
     * The electronic systems used to play <a
     * href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video
     * games</a>.
     */
    private $gamePlatform;

    /**
     * A season in a media series.
     */
    private $seasons;

    public function getGameLocation()
    {
        return $this->gameLocation;
    }

    public function setGameLocation($gameLocation)
    {
        $this->gameLocation = $gameLocation;
    }

    public function getPlayMode()
    {
        return $this->playMode;
    }

    public function setPlayMode($playMode)
    {
        $this->playMode = $playMode;
    }

    public function getGamePlatform()
    {
        return $this->gamePlatform;
    }

    public function setGamePlatform($gamePlatform)
    {
        $this->gamePlatform = $gamePlatform;
    }

    public function getSeasons()
    {
        return $this->seasons;
    }

    public function setSeasons($seasons)
    {
        $this->seasons = $seasons;
    }
}

