<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of achieving victory in a competitive activity.
 */
class WinAction extends AchieveAction
{
    /**
     * A sub property of participant. The loser of the action.
     */
    private $loser;

    public function getLoser()
    {
        return $this->loser;
    }

    public function setLoser($loser)
    {
        $this->loser = $loser;
    }
}

