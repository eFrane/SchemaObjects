<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An organization that provides flights for passengers.
 */
class Airline extends Organization
{
    /**
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     */
    private $boardingPolicy;

    public function getBoardingPolicy()
    {
        return $this->boardingPolicy;
    }

    public function setBoardingPolicy($boardingPolicy)
    {
        $this->boardingPolicy = $boardingPolicy;
    }
}

