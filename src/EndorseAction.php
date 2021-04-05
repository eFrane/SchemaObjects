<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An agent approves/certifies/likes/supports/sanction an object.
 */
class EndorseAction extends ReactAction
{
    /**
     * A sub property of participant. The person/organization being supported.
     */
    private $endorsee;

    public function getEndorsee()
    {
        return $this->endorsee;
    }

    public function setEndorsee($endorsee)
    {
        $this->endorsee = $endorsee;
    }
}

