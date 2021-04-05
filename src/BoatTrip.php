<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A trip on a commercial ferry line.
 */
class BoatTrip extends Trip
{
    /**
     * The terminal or port from which the boat departs.
     */
    private $departureBoatTerminal;

    /**
     * The terminal or port from which the boat arrives.
     */
    private $arrivalBoatTerminal;

    public function getDepartureBoatTerminal()
    {
        return $this->departureBoatTerminal;
    }

    public function setDepartureBoatTerminal($departureBoatTerminal)
    {
        $this->departureBoatTerminal = $departureBoatTerminal;
    }

    public function getArrivalBoatTerminal()
    {
        return $this->arrivalBoatTerminal;
    }

    public function setArrivalBoatTerminal($arrivalBoatTerminal)
    {
        $this->arrivalBoatTerminal = $arrivalBoatTerminal;
    }
}

