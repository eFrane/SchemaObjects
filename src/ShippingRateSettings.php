<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A ShippingRateSettings represents re-usable pieces of shipping information. It
 * is designed for publication on an URL that may be referenced via the
 * [[shippingSettingsLink]] property of an [[OfferShippingDetails]]. Several
 * occurrences can be published, distinguished and matched (i.e.
 * identified/referenced) by their different values for [[shippingLabel]].
 */
class ShippingRateSettings extends StructuredValue
{
    /**
     * The shipping rate is the cost of shipping to the specified destination.
     * Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are most
     * appropriate.
     */
    private $shippingRate;

    /**
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]]
     * (within the context of a [[shippingSettingsLink]] cross-reference).
     */
    private $shippingLabel;

    /**
     * A monetary value above which (or equal to) the shipping rate becomes free.
     * Intended to be used via an [[OfferShippingDetails]] with
     * [[shippingSettingsLink]] matching this [[ShippingRateSettings]].
     */
    private $freeShippingThreshold;

    /**
     * This can be marked 'true' to indicate that some published
     * [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to
     * all [[OfferShippingDetails]] published by the same merchant, when referenced by
     * a [[shippingSettingsLink]] in those settings. It is not meaningful to use a
     * 'true' value for this property alongside a transitTimeLabel (for
     * [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since
     * this property is for use with unlabelled settings.
     */
    private $isUnlabelledFallback;

    public function getShippingRate()
    {
        return $this->shippingRate;
    }

    public function setShippingRate($shippingRate)
    {
        $this->shippingRate = $shippingRate;
    }

    public function getShippingLabel()
    {
        return $this->shippingLabel;
    }

    public function setShippingLabel($shippingLabel)
    {
        $this->shippingLabel = $shippingLabel;
    }

    public function getFreeShippingThreshold()
    {
        return $this->freeShippingThreshold;
    }

    public function setFreeShippingThreshold($freeShippingThreshold)
    {
        $this->freeShippingThreshold = $freeShippingThreshold;
    }

    public function getIsUnlabelledFallback()
    {
        return $this->isUnlabelledFallback;
    }

    public function setIsUnlabelledFallback($isUnlabelledFallback)
    {
        $this->isUnlabelledFallback = $isUnlabelledFallback;
    }
}

