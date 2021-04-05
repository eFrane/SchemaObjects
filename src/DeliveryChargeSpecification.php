<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The price for the delivery of an offer using a particular delivery method.
 */
class DeliveryChargeSpecification extends PriceSpecification
{
    /**
     * The geographic area where a service or offered item is provided.
     */
    private $areaServed;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is valid.
     *
     * See also [[ineligibleRegion]].
     */
    private $eligibleRegion;

    public function getAreaServed()
    {
        return $this->areaServed;
    }

    public function setAreaServed($areaServed)
    {
        $this->areaServed = $areaServed;
    }

    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    public function setEligibleRegion($eligibleRegion)
    {
        $this->eligibleRegion = $eligibleRegion;
    }
}

