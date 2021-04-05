<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of expressing a preference from a fixed/finite/structured set of
 * choices/options.
 */
class VoteAction extends ChooseAction
{
    /**
     * A sub property of object. The candidate subject of this action.
     */
    private $candidate;

    public function getCandidate()
    {
        return $this->candidate;
    }

    public function setCandidate($candidate)
    {
        $this->candidate = $candidate;
    }
}

