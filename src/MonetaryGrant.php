<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A monetary grant.
 */
class MonetaryGrant extends Grant
{
    /**
     * A person or organization that supports (sponsors) something through some kind of
     * financial contribution.
     */
    private $funder;

    public function getFunder()
    {
        return $this->funder;
    }

    public function setFunder($funder)
    {
        $this->funder = $funder;
    }
}

