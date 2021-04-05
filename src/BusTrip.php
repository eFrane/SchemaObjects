<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A trip on a commercial bus line.
 */
class BusTrip extends Trip
{
    /**
     * The unique identifier for the bus.
     */
    private $busNumber;

    /**
     * The stop or station from which the bus arrives.
     */
    private $arrivalBusStop;

    /**
     * The name of the bus (e.g. Bolt Express).
     */
    private $busName;

    /**
     * The stop or station from which the bus departs.
     */
    private $departureBusStop;

    public function getBusNumber()
    {
        return $this->busNumber;
    }

    public function setBusNumber($busNumber)
    {
        $this->busNumber = $busNumber;
    }

    public function getArrivalBusStop()
    {
        return $this->arrivalBusStop;
    }

    public function setArrivalBusStop($arrivalBusStop)
    {
        $this->arrivalBusStop = $arrivalBusStop;
    }

    public function getBusName()
    {
        return $this->busName;
    }

    public function setBusName($busName)
    {
        $this->busName = $busName;
    }

    public function getDepartureBusStop()
    {
        return $this->departureBusStop;
    }

    public function setDepartureBusStop($departureBusStop)
    {
        $this->departureBusStop = $departureBusStop;
    }
}

