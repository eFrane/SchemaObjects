<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A type of blood vessel that specifically carries blood away from the heart.
 */
class Artery extends Vessel
{
    /**
     * The branches that comprise the arterial structure.
     */
    private $arterialBranch;

    /**
     * The area to which the artery supplies blood.
     */
    private $supplyTo;

    public function getArterialBranch()
    {
        return $this->arterialBranch;
    }

    public function setArterialBranch($arterialBranch)
    {
        $this->arterialBranch = $arterialBranch;
    }

    public function getSupplyTo()
    {
        return $this->supplyTo;
    }

    public function setSupplyTo($supplyTo)
    {
        $this->supplyTo = $supplyTo;
    }
}

