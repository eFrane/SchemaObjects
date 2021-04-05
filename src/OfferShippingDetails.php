<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * OfferShippingDetails represents information about shipping destinations.
 *
 * Multiple of these entities can be used to represent different shipping rates for
 * different destinations:
 *
 * One entity for Alaska/Hawaii. A different one for continental US.A different one
 * for all France.
 *
 * Multiple of these entities can be used to represent different shipping costs and
 * delivery times.
 *
 * Two entities that are identical but differ in rate and time:
 *
 * e.g. Cheaper and slower: $5 in 5-7days
 * or Fast and expensive: $15 in 1-2 days.
 */
class OfferShippingDetails extends StructuredValue
{
    /**
     * The total delay between the receipt of the order and the goods reaching the
     * final customer.
     */
    private $deliveryTime;

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not
     * available.
     */
    private $doesNotShip;

    /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]]
     * (within the context of a [[shippingSettingsLink]] cross-reference).
     */
    private $transitTimeLabel;

    /**
     * Link to a page containing [[ShippingRateSettings]] and [[DeliveryTimeSettings]]
     * details.
     */
    private $shippingSettingsLink;

    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
    }

    public function getDoesNotShip()
    {
        return $this->doesNotShip;
    }

    public function setDoesNotShip($doesNotShip)
    {
        $this->doesNotShip = $doesNotShip;
    }

    public function getTransitTimeLabel()
    {
        return $this->transitTimeLabel;
    }

    public function setTransitTimeLabel($transitTimeLabel)
    {
        $this->transitTimeLabel = $transitTimeLabel;
    }

    public function getShippingSettingsLink()
    {
        return $this->shippingSettingsLink;
    }

    public function setShippingSettingsLink($shippingSettingsLink)
    {
        $this->shippingSettingsLink = $shippingSettingsLink;
    }
}

