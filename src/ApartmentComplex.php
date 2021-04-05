<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Residence type: Apartment complex.
 */
class ApartmentComplex extends Residence
{
    /**
     * Indicates the number of available accommodation units in an
     * [[ApartmentComplex]], or the number of accommodation units for a specific
     * [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
     * [[numberOfAccommodationUnits]].
     */
    private $numberOfAvailableAccommodationUnits;

    public function getNumberOfAvailableAccommodationUnits()
    {
        return $this->numberOfAvailableAccommodationUnits;
    }

    public function setNumberOfAvailableAccommodationUnits($numberOfAvailableAccommodationUnits)
    {
        $this->numberOfAvailableAccommodationUnits = $numberOfAvailableAccommodationUnits;
    }
}

