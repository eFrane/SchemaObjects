<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A group of multiple reservations with common values for all sub-reservations.
 */
class ReservationPackage extends Reservation
{
    /**
     * The individual reservations included in the package. Typically a repeated
     * property.
     */
    private $subReservation;

    public function getSubReservation()
    {
        return $this->subReservation;
    }

    public function setSubReservation($subReservation)
    {
        $this->subReservation = $subReservation;
    }
}

