<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A trip on a commercial train line.
 */
class TrainTrip extends Trip
{
    /**
     * The station where the train trip ends.
     */
    private $arrivalStation;

    /**
     * The unique identifier for the train.
     */
    private $trainNumber;

    /**
     * The name of the train (e.g. The Orient Express).
     */
    private $trainName;

    /**
     * The platform from which the train departs.
     */
    private $departurePlatform;

    /**
     * The station from which the train departs.
     */
    private $departureStation;

    /**
     * The platform where the train arrives.
     */
    private $arrivalPlatform;

    public function getArrivalStation()
    {
        return $this->arrivalStation;
    }

    public function setArrivalStation($arrivalStation)
    {
        $this->arrivalStation = $arrivalStation;
    }

    public function getTrainNumber()
    {
        return $this->trainNumber;
    }

    public function setTrainNumber($trainNumber)
    {
        $this->trainNumber = $trainNumber;
    }

    public function getTrainName()
    {
        return $this->trainName;
    }

    public function setTrainName($trainName)
    {
        $this->trainName = $trainName;
    }

    public function getDeparturePlatform()
    {
        return $this->departurePlatform;
    }

    public function setDeparturePlatform($departurePlatform)
    {
        $this->departurePlatform = $departurePlatform;
    }

    public function getDepartureStation()
    {
        return $this->departureStation;
    }

    public function setDepartureStation($departureStation)
    {
        $this->departureStation = $departureStation;
    }

    public function getArrivalPlatform()
    {
        return $this->arrivalPlatform;
    }

    public function setArrivalPlatform($arrivalPlatform)
    {
        $this->arrivalPlatform = $arrivalPlatform;
    }
}

