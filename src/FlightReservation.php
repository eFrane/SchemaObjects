<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A reservation for air travel.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of reservations.
 * For offers of tickets, use [[Offer]].
 */
class FlightReservation extends Reservation
{
    /**
     * The type of security screening the passenger is subject to.
     */
    private $securityScreening;

    /**
     * The passenger's sequence number as assigned by the airline.
     */
    private $passengerSequenceNumber;

    /**
     * The airline-specific indicator of boarding order / preference.
     */
    private $boardingGroup;

    /**
     * The priority status assigned to a passenger for security or boarding (e.g.
     * FastTrack or Priority).
     */
    private $passengerPriorityStatus;

    public function getSecurityScreening()
    {
        return $this->securityScreening;
    }

    public function setSecurityScreening($securityScreening)
    {
        $this->securityScreening = $securityScreening;
    }

    public function getPassengerSequenceNumber()
    {
        return $this->passengerSequenceNumber;
    }

    public function setPassengerSequenceNumber($passengerSequenceNumber)
    {
        $this->passengerSequenceNumber = $passengerSequenceNumber;
    }

    public function getBoardingGroup()
    {
        return $this->boardingGroup;
    }

    public function setBoardingGroup($boardingGroup)
    {
        $this->boardingGroup = $boardingGroup;
    }

    public function getPassengerPriorityStatus()
    {
        return $this->passengerPriorityStatus;
    }

    public function setPassengerPriorityStatus($passengerPriorityStatus)
    {
        $this->passengerPriorityStatus = $passengerPriorityStatus;
    }
}

