<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Used to describe a seat, such as a reserved seat in an event reservation.
 */
class Seat extends Intangible
{
    /**
     * The row location of the reserved seat (e.g., B).
     */
    private $seatRow;

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     */
    private $seatSection;

    /**
     * The type/class of the seat.
     */
    private $seatingType;

    /**
     * The location of the reserved seat (e.g., 27).
     */
    private $seatNumber;

    public function getSeatRow()
    {
        return $this->seatRow;
    }

    public function setSeatRow($seatRow)
    {
        $this->seatRow = $seatRow;
    }

    public function getSeatSection()
    {
        return $this->seatSection;
    }

    public function setSeatSection($seatSection)
    {
        $this->seatSection = $seatSection;
    }

    public function getSeatingType()
    {
        return $this->seatingType;
    }

    public function setSeatingType($seatingType)
    {
        $this->seatingType = $seatingType;
    }

    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
    }
}

