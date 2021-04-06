<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A DeliveryTimeSettings represents re-usable pieces of shipping information,
 * relating to timing. It is designed for publication on an URL that may be
 * referenced via the [[shippingSettingsLink]] property of a
 * [[OfferShippingDetails]]. Several occurrences can be published, distinguished
 * (and identified/referenced) by their different values for [[transitTimeLabel]].
 */
class DeliveryTimeSettings extends StructuredValue
{
    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in
     * several ways e.g. postalCode ranges.
     */
    private $shippingDestination;

    public function getShippingDestination()
    {
        return $this->shippingDestination;
    }

    public function setShippingDestination($shippingDestination)
    {
        $this->shippingDestination = $shippingDestination;
    }
}

