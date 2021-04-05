<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 */
class Ticket extends Intangible
{
    /**
     * The person or organization the reservation or ticket is for.
     */
    private $underName;

    /**
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
     */
    private $ticketToken;

    /**
     * The unique identifier for the ticket.
     */
    private $ticketNumber;

    /**
     * The organization issuing the ticket or permit.
     */
    private $issuedBy;

    /**
     * The seat associated with the ticket.
     */
    private $ticketedSeat;

    /**
     * The date the ticket was issued.
     */
    private $dateIssued;

    public function getUnderName()
    {
        return $this->underName;
    }

    public function setUnderName($underName)
    {
        $this->underName = $underName;
    }

    public function getTicketToken()
    {
        return $this->ticketToken;
    }

    public function setTicketToken($ticketToken)
    {
        $this->ticketToken = $ticketToken;
    }

    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;
    }

    public function getIssuedBy()
    {
        return $this->issuedBy;
    }

    public function setIssuedBy($issuedBy)
    {
        $this->issuedBy = $issuedBy;
    }

    public function getTicketedSeat()
    {
        return $this->ticketedSeat;
    }

    public function setTicketedSeat($ticketedSeat)
    {
        $this->ticketedSeat = $ticketedSeat;
    }

    public function getDateIssued()
    {
        return $this->dateIssued;
    }

    public function setDateIssued($dateIssued)
    {
        $this->dateIssued = $dateIssued;
    }
}

