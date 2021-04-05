<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An airport.
 */
class Airport extends CivicStructure
{
    /**
     * IATA identifier for an airline or airport.
     */
    private $iataCode;

    /**
     * ICAO identifier for an airport.
     */
    private $icaoCode;

    public function getIataCode()
    {
        return $this->iataCode;
    }

    public function setIataCode($iataCode)
    {
        $this->iataCode = $iataCode;
    }

    public function getIcaoCode()
    {
        return $this->icaoCode;
    }

    public function setIcaoCode($icaoCode)
    {
        $this->icaoCode = $icaoCode;
    }
}

