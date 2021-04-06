<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An entity holding detailed information about the available bed types, e.g. the
 * quantity of twin beds for a hotel room. For the single case of just one bed of a
 * certain type, you can use bed directly with a text. See also [[BedType]] (under
 * development).
 */
class BedDetails extends Intangible
{
    /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed available in
     * the quantity indicated by quantity.
     */
    private $typeOfBed;

    /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or
     * Apartment.
     */
    private $numberOfBeds;

    public function getTypeOfBed()
    {
        return $this->typeOfBed;
    }

    public function setTypeOfBed($typeOfBed)
    {
        $this->typeOfBed = $typeOfBed;
    }

    public function getNumberOfBeds()
    {
        return $this->numberOfBeds;
    }

    public function setNumberOfBeds($numberOfBeds)
    {
        $this->numberOfBeds = $numberOfBeds;
    }
}

