<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Describes a reservation for travel, dining or an event. Some reservations
 * require tickets. 
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of reservations.
 * For offers of tickets, restaurant reservations, flights, or rental cars, use
 * [[Offer]].
 */
class Reservation extends Intangible
{
    /**
     * The total price for the reservation or ticket, including applicable taxes,
     * shipping, etc.
     *
     * Usage guidelines:
     *
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similiar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     */
    private $totalPrice;

    /**
     * The date and time the reservation was booked.
     */
    private $bookingTime;

    /**
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a
     * booking agent.
     */
    private $bookingAgent;

    /**
     * A ticket associated with the reservation.
     */
    private $reservedTicket;

    /**
     * A unique identifier for the reservation.
     */
    private $reservationId;

    /**
     * The date and time the reservation was modified.
     */
    private $modifiedTime;

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to
     * the reservation.
     */
    private $programMembershipUsed;

    /**
     * The current status of the reservation.
     */
    private $reservationStatus;

    /**
     * The thing -- flight, event, restaurant,etc. being reserved.
     */
    private $reservationFor;

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    public function getBookingTime()
    {
        return $this->bookingTime;
    }

    public function setBookingTime($bookingTime)
    {
        $this->bookingTime = $bookingTime;
    }

    public function getBookingAgent()
    {
        return $this->bookingAgent;
    }

    public function setBookingAgent($bookingAgent)
    {
        $this->bookingAgent = $bookingAgent;
    }

    public function getReservedTicket()
    {
        return $this->reservedTicket;
    }

    public function setReservedTicket($reservedTicket)
    {
        $this->reservedTicket = $reservedTicket;
    }

    public function getReservationId()
    {
        return $this->reservationId;
    }

    public function setReservationId($reservationId)
    {
        $this->reservationId = $reservationId;
    }

    public function getModifiedTime()
    {
        return $this->modifiedTime;
    }

    public function setModifiedTime($modifiedTime)
    {
        $this->modifiedTime = $modifiedTime;
    }

    public function getProgramMembershipUsed()
    {
        return $this->programMembershipUsed;
    }

    public function setProgramMembershipUsed($programMembershipUsed)
    {
        $this->programMembershipUsed = $programMembershipUsed;
    }

    public function getReservationStatus()
    {
        return $this->reservationStatus;
    }

    public function setReservationStatus($reservationStatus)
    {
        $this->reservationStatus = $reservationStatus;
    }

    public function getReservationFor()
    {
        return $this->reservationFor;
    }

    public function setReservationFor($reservationFor)
    {
        $this->reservationFor = $reservationFor;
    }
}

