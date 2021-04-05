<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The Game type represents things which are games. These are typically
 * rule-governed recreational activities, e.g. role-playing games in which players
 * assume the role of characters in a fictional setting.
 */
class Game extends CreativeWork
{
    /**
     * The task that a player-controlled character, or group of characters may complete
     * in order to gain a reward.
     */
    private $quest;

    /**
     * A piece of data that represents a particular aspect of a fictional character
     * (skill, power, character points, advantage, disadvantage).
     */
    private $characterAttribute;

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     */
    private $numberOfPlayers;

    /**
     * An item is an object within the game world that can be collected by a player or,
     * occasionally, a non-player character.
     */
    private $gameItem;

    public function getQuest()
    {
        return $this->quest;
    }

    public function setQuest($quest)
    {
        $this->quest = $quest;
    }

    public function getCharacterAttribute()
    {
        return $this->characterAttribute;
    }

    public function setCharacterAttribute($characterAttribute)
    {
        $this->characterAttribute = $characterAttribute;
    }

    public function getNumberOfPlayers()
    {
        return $this->numberOfPlayers;
    }

    public function setNumberOfPlayers($numberOfPlayers)
    {
        $this->numberOfPlayers = $numberOfPlayers;
    }

    public function getGameItem()
    {
        return $this->gameItem;
    }

    public function setGameItem($gameItem)
    {
        $this->gameItem = $gameItem;
    }
}

