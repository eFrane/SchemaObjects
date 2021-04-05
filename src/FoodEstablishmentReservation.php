<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A reservation to dine at a food-related business.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of reservations.
 */
class FoodEstablishmentReservation extends Reservation
{
    /**
     * Number of people the reservation should accommodate.
     */
    private $partySize;

    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. e.g. John
     * wrote a book from *January* to December. For media, including audio and video,
     * it's the time offset of the start of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when
     * describing dates with times. This situation may be clarified in future
     * revisions.
     */
    private $startTime;

    public function getPartySize()
    {
        return $this->partySize;
    }

    public function setPartySize($partySize)
    {
        $this->partySize = $partySize;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
}

