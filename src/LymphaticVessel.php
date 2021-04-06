<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A type of blood vessel that specifically carries lymph fluid unidirectionally
 * toward the heart.
 */
class LymphaticVessel extends Vessel
{
    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     */
    private $runsTo;

    /**
     * The vasculature the lymphatic structure originates, or afferents, from.
     */
    private $originatesFrom;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a
     * specific part of an organ.
     */
    private $regionDrained;

    public function getRunsTo()
    {
        return $this->runsTo;
    }

    public function setRunsTo($runsTo)
    {
        $this->runsTo = $runsTo;
    }

    public function getOriginatesFrom()
    {
        return $this->originatesFrom;
    }

    public function setOriginatesFrom($originatesFrom)
    {
        $this->originatesFrom = $originatesFrom;
    }

    public function getRegionDrained()
    {
        return $this->regionDrained;
    }

    public function setRegionDrained($regionDrained)
    {
        $this->regionDrained = $regionDrained;
    }
}

