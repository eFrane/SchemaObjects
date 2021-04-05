<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * ShippingDeliveryTime provides various pieces of information about delivery times
 * for shipping.
 */
class ShippingDeliveryTime extends StructuredValue
{
    /**
     * Order cutoff time allows merchants to describe the time after which they will no
     * longer process orders received on that day. For orders processed after cutoff
     * time, one day gets added to the delivery time estimate. This property is
     * expected to be most typically used via the [[ShippingRateSettings]] publication
     * pattern. The time is indicated using the ISO-8601 Time format, e.g.
     * "23:30:00-05:00" would represent 6:30 pm Eastern Standard Time (EST) which is 5
     * hours behind Coordinated Universal Time (UTC).
     */
    private $cutoffTime;

    /**
     * The typical delay the order has been sent for delivery and the goods reach the
     * final customer. Typical properties: minValue, maxValue, unitCode (d for DAY).
     */
    private $transitTime;

    /**
     * Days of the week when the merchant typically operates, indicated via opening
     * hours markup.
     */
    private $businessDays;

    /**
     * The typical delay between the receipt of the order and the goods either leaving
     * the warehouse or being prepared for pickup, in case the delivery method is on
     * site pickup. Typical properties: minValue, maxValue, unitCode (d for DAY).  This
     * is by common convention assumed to mean business days (if a unitCode is used,
     * coded as "d"), i.e. only counting days when the business normally operates.
     */
    private $handlingTime;

    public function getCutoffTime()
    {
        return $this->cutoffTime;
    }

    public function setCutoffTime($cutoffTime)
    {
        $this->cutoffTime = $cutoffTime;
    }

    public function getTransitTime()
    {
        return $this->transitTime;
    }

    public function setTransitTime($transitTime)
    {
        $this->transitTime = $transitTime;
    }

    public function getBusinessDays()
    {
        return $this->businessDays;
    }

    public function setBusinessDays($businessDays)
    {
        $this->businessDays = $businessDays;
    }

    public function getHandlingTime()
    {
        return $this->handlingTime;
    }

    public function setHandlingTime($handlingTime)
    {
        $this->handlingTime = $handlingTime;
    }
}

