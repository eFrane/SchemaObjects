<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A reservation for lodging at a hotel, motel, inn, etc.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of reservations.
 */
class LodgingReservation extends Reservation
{
    /**
     * Textual description of the unit type (including suite vs. room, size of bed,
     * etc.).
     */
    private $lodgingUnitType;

    /**
     * The number of children staying in the unit.
     */
    private $numChildren;

    /**
     * The latest someone may check out of a lodging establishment.
     */
    private $checkoutTime;

    /**
     * The earliest someone may check into a lodging establishment.
     */
    private $checkinTime;

    /**
     * A full description of the lodging unit.
     */
    private $lodgingUnitDescription;

    /**
     * The number of adults staying in the unit.
     */
    private $numAdults;

    public function getLodgingUnitType()
    {
        return $this->lodgingUnitType;
    }

    public function setLodgingUnitType($lodgingUnitType)
    {
        $this->lodgingUnitType = $lodgingUnitType;
    }

    public function getNumChildren()
    {
        return $this->numChildren;
    }

    public function setNumChildren($numChildren)
    {
        $this->numChildren = $numChildren;
    }

    public function getCheckoutTime()
    {
        return $this->checkoutTime;
    }

    public function setCheckoutTime($checkoutTime)
    {
        $this->checkoutTime = $checkoutTime;
    }

    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    public function setCheckinTime($checkinTime)
    {
        $this->checkinTime = $checkinTime;
    }

    public function getLodgingUnitDescription()
    {
        return $this->lodgingUnitDescription;
    }

    public function setLodgingUnitDescription($lodgingUnitDescription)
    {
        $this->lodgingUnitDescription = $lodgingUnitDescription;
    }

    public function getNumAdults()
    {
        return $this->numAdults;
    }

    public function setNumAdults($numAdults)
    {
        $this->numAdults = $numAdults;
    }
}

