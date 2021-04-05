<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An event involving the delivery of an item.
 */
class DeliveryEvent extends Event
{
    /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     */
    private $accessCode;

    /**
     * After this date, the item will no longer be available for pickup.
     */
    private $availableThrough;

    /**
     * When the item is available for pickup from the store, locker, etc.
     */
    private $availableFrom;

    public function getAccessCode()
    {
        return $this->accessCode;
    }

    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
    }

    public function getAvailableThrough()
    {
        return $this->availableThrough;
    }

    public function setAvailableThrough($availableThrough)
    {
        $this->availableThrough = $availableThrough;
    }

    public function getAvailableFrom()
    {
        return $this->availableFrom;
    }

    public function setAvailableFrom($availableFrom)
    {
        $this->availableFrom = $availableFrom;
    }
}

