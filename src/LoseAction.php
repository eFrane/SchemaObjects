<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of being defeated in a competitive activity.
 */
class LoseAction extends AchieveAction
{
    /**
     * A sub property of participant. The winner of the action.
     */
    private $winner;

    public function getWinner()
    {
        return $this->winner;
    }

    public function setWinner($winner)
    {
        $this->winner = $winner;
    }
}

