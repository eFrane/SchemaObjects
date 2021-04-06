<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The delivery of a parcel either via the postal service or a commercial service.
 */
class ParcelDelivery extends Intangible
{
    /**
     * The earliest date the package may arrive.
     */
    private $expectedArrivalFrom;

    /**
     * Shipper's address.
     */
    private $originAddress;

    /**
     * New entry added as the package passes through each leg of its journey (from
     * shipment to final delivery).
     */
    private $deliveryStatus;

    /**
     * Destination address.
     */
    private $deliveryAddress;

    /**
     * The latest date the package may arrive.
     */
    private $expectedArrivalUntil;

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and
     * flights.
     */
    private $carrier;

    /**
     * Tracking url for the parcel delivery.
     */
    private $trackingUrl;

    /**
     * Item(s) being shipped.
     */
    private $itemShipped;

    /**
     * Method used for delivery or shipping.
     */
    private $hasDeliveryMethod;

    /**
     * Shipper tracking number.
     */
    private $trackingNumber;

    /**
     * The overall order the items in this delivery were included in.
     */
    private $partOfOrder;

    public function getExpectedArrivalFrom()
    {
        return $this->expectedArrivalFrom;
    }

    public function setExpectedArrivalFrom($expectedArrivalFrom)
    {
        $this->expectedArrivalFrom = $expectedArrivalFrom;
    }

    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    public function setOriginAddress($originAddress)
    {
        $this->originAddress = $originAddress;
    }

    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    public function setDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
    }

    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    public function getExpectedArrivalUntil()
    {
        return $this->expectedArrivalUntil;
    }

    public function setExpectedArrivalUntil($expectedArrivalUntil)
    {
        $this->expectedArrivalUntil = $expectedArrivalUntil;
    }

    public function getCarrier()
    {
        return $this->carrier;
    }

    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
    }

    public function getItemShipped()
    {
        return $this->itemShipped;
    }

    public function setItemShipped($itemShipped)
    {
        $this->itemShipped = $itemShipped;
    }

    public function getHasDeliveryMethod()
    {
        return $this->hasDeliveryMethod;
    }

    public function setHasDeliveryMethod($hasDeliveryMethod)
    {
        $this->hasDeliveryMethod = $hasDeliveryMethod;
    }

    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    public function getPartOfOrder()
    {
        return $this->partOfOrder;
    }

    public function setPartOfOrder($partOfOrder)
    {
        $this->partOfOrder = $partOfOrder;
    }
}

