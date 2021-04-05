<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An apartment (in American English) or flat (in British English) is a
 * self-contained housing unit (a type of residential real estate) that occupies
 * only part of a building (Source: Wikipedia, the free encyclopedia, see <a
 * href="http://en.wikipedia.org/wiki/Apartment">http://en.wikipedia.org/wiki/Apartment</a>).
 */
class Apartment extends Accommodation
{
    /**
     * The allowed total occupancy for the accommodation in persons (including infants
     * etc). For individual accommodations, this is not necessarily the legal maximum
     * but defines the permitted usage as per the contractual agreement (e.g. a double
     * room used by a single person).
     * Typical unit code(s): C62 for person
     */
    private $occupancy;

    public function getOccupancy()
    {
        return $this->occupancy;
    }

    public function setOccupancy($occupancy)
    {
        $this->occupancy = $occupancy;
    }
}

