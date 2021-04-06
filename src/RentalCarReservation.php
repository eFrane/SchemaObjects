<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A reservation for a rental car.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of reservations.
 */
class RentalCarReservation extends Reservation
{
    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     */
    private $pickupLocation;

    /**
     * When a rental car can be dropped off.
     */
    private $dropoffTime;

    /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     */
    private $pickupTime;

    /**
     * Where a rental car can be dropped off.
     */
    private $dropoffLocation;

    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    public function setPickupLocation($pickupLocation)
    {
        $this->pickupLocation = $pickupLocation;
    }

    public function getDropoffTime()
    {
        return $this->dropoffTime;
    }

    public function setDropoffTime($dropoffTime)
    {
        $this->dropoffTime = $dropoffTime;
    }

    public function getPickupTime()
    {
        return $this->pickupTime;
    }

    public function setPickupTime($pickupTime)
    {
        $this->pickupTime = $pickupTime;
    }

    public function getDropoffLocation()
    {
        return $this->dropoffLocation;
    }

    public function setDropoffLocation($dropoffLocation)
    {
        $this->dropoffLocation = $dropoffLocation;
    }
}

