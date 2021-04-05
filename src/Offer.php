<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An offer to transfer some rights to an item or to provide a service — for
 * example, an offer to sell tickets to an event, to rent the DVD of a movie, to
 * stream a TV show over the internet, to repair a motorcycle, or to loan a book.
 *
 * Note: As the [[businessFunction]] property, which identifies the form of offer
 * (e.g. sell, lease, repair, dispose), defaults to
 * http://purl.org/goodrelations/v1#Sell; an Offer without a defined
 * businessFunction value can be assumed to be an offer to sell.
 *
 * For [GTIN](http://www.gs1.org/barcodes/technical/idkeys/gtin)-related fields,
 * see [Check Digit
 * calculator](http://www.gs1.org/barcodes/support/check_digit_calculator) and
 * [validation
 * guide](http://www.gs1us.org/resources/standards/gtin-validation-guide) from
 * [GS1](http://www.gs1.org/).
 */
class Offer extends Intangible
{
    /**
     * A predefined value from OfferItemCondition or a textual description of the
     * condition of the product or service, or the products or services included in the
     * offer.
     */
    private $itemCondition;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is not valid, e.g. a region where the transaction is not allowed.
     *
     * See also [[eligibleRegion]].
     */
    private $ineligibleRegion;

    /**
     * The delivery method(s) available for this offer.
     */
    private $availableDeliveryMethod;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the
     * offer refers.
     */
    private $mpn;

    /**
     * Length of the lease for some [[Accommodation]], either particular to some
     * [[Offer]] or in some cases intrinsic to the property.
     */
    private $leaseLength;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A
     * seller may also be a provider.
     */
    private $seller;

    /**
     * A product measurement, for example the inseam of pants, the wheel size of a
     * bicycle, or the gauge of a screw. Usually an exact measurement, but can also be
     * a range of measurements for adjustable products, for example belts and ski
     * bindings.
     */
    private $hasMeasurement;

    /**
     * An additional offer that can only be obtained in combination with the first base
     * offer (e.g. supplements and extensions that are available for a surcharge).
     */
    private $addOn;

    /**
     * The duration for which the given offer is valid.
     */
    private $eligibleDuration;

    /**
     * One or more detailed price specifications, indicating the unit price and
     * delivery or payment charges.
     */
    private $priceSpecification;

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     */
    private $availableAtOrFrom;

    /**
     * The date after which the price is no longer available.
     */
    private $priceValidUntil;

    /**
     * Indicates information about the shipping policies and options associated with an
     * [[Offer]].
     */
    private $shippingDetails;

    /**
     * The typical delay between the receipt of the order and the goods either leaving
     * the warehouse or being prepared for pickup, in case the delivery method is on
     * site pickup.
     */
    private $deliveryLeadTime;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer
     * or price specification is valid. This allows e.g. specifying that a certain
     * freight charge is valid only for a certain quantity.
     */
    private $eligibleQuantity;

    /**
     * The end of the availability of the product or service included in the offer.
     */
    private $availabilityEnds;

    /**
     * An item being offered (or demanded). The transactional nature of the offer or
     * demand is documented using [[businessFunction]], e.g. sell, lease etc. While
     * several common expected types are listed explicitly in this definition, others
     * can be used. Using a second type, such as Product or a subtype of Product, can
     * clarify the nature of the offer.
     */
    private $itemOffered;

    /**
     * A pointer to the organization or person making the offer.
     */
    private $offeredBy;

    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    public function setItemCondition($itemCondition)
    {
        $this->itemCondition = $itemCondition;
    }

    public function getIneligibleRegion()
    {
        return $this->ineligibleRegion;
    }

    public function setIneligibleRegion($ineligibleRegion)
    {
        $this->ineligibleRegion = $ineligibleRegion;
    }

    public function getAvailableDeliveryMethod()
    {
        return $this->availableDeliveryMethod;
    }

    public function setAvailableDeliveryMethod($availableDeliveryMethod)
    {
        $this->availableDeliveryMethod = $availableDeliveryMethod;
    }

    public function getMpn()
    {
        return $this->mpn;
    }

    public function setMpn($mpn)
    {
        $this->mpn = $mpn;
    }

    public function getLeaseLength()
    {
        return $this->leaseLength;
    }

    public function setLeaseLength($leaseLength)
    {
        $this->leaseLength = $leaseLength;
    }

    public function getSeller()
    {
        return $this->seller;
    }

    public function setSeller($seller)
    {
        $this->seller = $seller;
    }

    public function getHasMeasurement()
    {
        return $this->hasMeasurement;
    }

    public function setHasMeasurement($hasMeasurement)
    {
        $this->hasMeasurement = $hasMeasurement;
    }

    public function getAddOn()
    {
        return $this->addOn;
    }

    public function setAddOn($addOn)
    {
        $this->addOn = $addOn;
    }

    public function getEligibleDuration()
    {
        return $this->eligibleDuration;
    }

    public function setEligibleDuration($eligibleDuration)
    {
        $this->eligibleDuration = $eligibleDuration;
    }

    public function getPriceSpecification()
    {
        return $this->priceSpecification;
    }

    public function setPriceSpecification($priceSpecification)
    {
        $this->priceSpecification = $priceSpecification;
    }

    public function getAvailableAtOrFrom()
    {
        return $this->availableAtOrFrom;
    }

    public function setAvailableAtOrFrom($availableAtOrFrom)
    {
        $this->availableAtOrFrom = $availableAtOrFrom;
    }

    public function getPriceValidUntil()
    {
        return $this->priceValidUntil;
    }

    public function setPriceValidUntil($priceValidUntil)
    {
        $this->priceValidUntil = $priceValidUntil;
    }

    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    public function setShippingDetails($shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
    }

    public function getDeliveryLeadTime()
    {
        return $this->deliveryLeadTime;
    }

    public function setDeliveryLeadTime($deliveryLeadTime)
    {
        $this->deliveryLeadTime = $deliveryLeadTime;
    }

    public function getEligibleQuantity()
    {
        return $this->eligibleQuantity;
    }

    public function setEligibleQuantity($eligibleQuantity)
    {
        $this->eligibleQuantity = $eligibleQuantity;
    }

    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }

    public function setAvailabilityEnds($availabilityEnds)
    {
        $this->availabilityEnds = $availabilityEnds;
    }

    public function getItemOffered()
    {
        return $this->itemOffered;
    }

    public function setItemOffered($itemOffered)
    {
        $this->itemOffered = $itemOffered;
    }

    public function getOfferedBy()
    {
        return $this->offeredBy;
    }

    public function setOfferedBy($offeredBy)
    {
        $this->offeredBy = $offeredBy;
    }
}

