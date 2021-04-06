<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An airline flight.
 */
class Flight extends Trip
{
    /**
     * The unique identifier for a flight including the airline IATA code. For example,
     * if describing United flight 110, where the IATA code for United is 'UA', the
     * flightNumber is 'UA110'.
     */
    private $flightNumber;

    /**
     * The estimated time the flight will take.
     */
    private $estimatedFlightDuration;

    /**
     * Identifier of the flight's departure gate.
     */
    private $departureGate;

    /**
     * Identifier of the flight's arrival gate.
     */
    private $arrivalGate;

    /**
     * Identifier of the flight's departure terminal.
     */
    private $departureTerminal;

    /**
     * Description of the meals that will be provided or available for purchase.
     */
    private $mealService;

    /**
     * The distance of the flight.
     */
    private $flightDistance;

    /**
     * The airport where the flight originates.
     */
    private $departureAirport;

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     */
    private $aircraft;

    /**
     * The time when a passenger can check into the flight online.
     */
    private $webCheckinTime;

    /**
     * The airport where the flight terminates.
     */
    private $arrivalAirport;

    /**
     * Identifier of the flight's arrival terminal.
     */
    private $arrivalTerminal;

    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
    }

    public function getEstimatedFlightDuration()
    {
        return $this->estimatedFlightDuration;
    }

    public function setEstimatedFlightDuration($estimatedFlightDuration)
    {
        $this->estimatedFlightDuration = $estimatedFlightDuration;
    }

    public function getDepartureGate()
    {
        return $this->departureGate;
    }

    public function setDepartureGate($departureGate)
    {
        $this->departureGate = $departureGate;
    }

    public function getArrivalGate()
    {
        return $this->arrivalGate;
    }

    public function setArrivalGate($arrivalGate)
    {
        $this->arrivalGate = $arrivalGate;
    }

    public function getDepartureTerminal()
    {
        return $this->departureTerminal;
    }

    public function setDepartureTerminal($departureTerminal)
    {
        $this->departureTerminal = $departureTerminal;
    }

    public function getMealService()
    {
        return $this->mealService;
    }

    public function setMealService($mealService)
    {
        $this->mealService = $mealService;
    }

    public function getFlightDistance()
    {
        return $this->flightDistance;
    }

    public function setFlightDistance($flightDistance)
    {
        $this->flightDistance = $flightDistance;
    }

    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    public function setDepartureAirport($departureAirport)
    {
        $this->departureAirport = $departureAirport;
    }

    public function getAircraft()
    {
        return $this->aircraft;
    }

    public function setAircraft($aircraft)
    {
        $this->aircraft = $aircraft;
    }

    public function getWebCheckinTime()
    {
        return $this->webCheckinTime;
    }

    public function setWebCheckinTime($webCheckinTime)
    {
        $this->webCheckinTime = $webCheckinTime;
    }

    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    public function setArrivalAirport($arrivalAirport)
    {
        $this->arrivalAirport = $arrivalAirport;
    }

    public function getArrivalTerminal()
    {
        return $this->arrivalTerminal;
    }

    public function setArrivalTerminal($arrivalTerminal)
    {
        $this->arrivalTerminal = $arrivalTerminal;
    }
}

