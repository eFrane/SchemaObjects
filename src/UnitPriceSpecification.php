<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The price asked for a given offer by the respective organization or person.
 */
class UnitPriceSpecification extends PriceSpecification
{
    /**
     * Specifies after how much time this price (or price component) becomes valid and
     * billing starts. Can be used, for example, to model a price increase after the
     * first year of a subscription. The unit of measurement is specified by the
     * unitCode property.
     */
    private $billingStart;

    /**
     * Specifies for how long this price (or price component) will be billed. Can be
     * used, for example, to model the contractual duration of a subscription or
     * payment plan. Type can be either a Duration or a Number (in which case the unit
     * of measurement, for example month, is specified by the unitCode property).
     */
    private $billingDuration;

    /**
     * This property specifies the minimal quantity and rounding increment that will be
     * the basis for the billing. The unit of measurement is specified by the unitCode
     * property.
     */
    private $billingIncrement;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or
     * a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix
     * followed by a colon.
     */
    private $unitCode;

    /**
     * Identifies a price component (for example, a line item on an invoice), part of
     * the total price for an offer.
     */
    private $priceComponentType;

    /**
     * Defines the type of a price specified for an offered product, for example a list
     * price, a (temporary) sale price or a manufacturer suggested retail price. If
     * multiple prices are specified for an offer the [[priceType]] property can be
     * used to identify the type of each such specified price. The value of priceType
     * can be specified as a value from enumeration PriceTypeEnumeration or as a free
     * form text string for price types that are not already predefined in
     * PriceTypeEnumeration.
     */
    private $priceType;

    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh
     * of electricity. This property is a replacement for unitOfMeasurement for the
     * advanced cases where the price does not relate to a standard unit.
     */
    private $referenceQuantity;

    public function getBillingStart()
    {
        return $this->billingStart;
    }

    public function setBillingStart($billingStart)
    {
        $this->billingStart = $billingStart;
    }

    public function getBillingDuration()
    {
        return $this->billingDuration;
    }

    public function setBillingDuration($billingDuration)
    {
        $this->billingDuration = $billingDuration;
    }

    public function getBillingIncrement()
    {
        return $this->billingIncrement;
    }

    public function setBillingIncrement($billingIncrement)
    {
        $this->billingIncrement = $billingIncrement;
    }

    public function getUnitCode()
    {
        return $this->unitCode;
    }

    public function setUnitCode($unitCode)
    {
        $this->unitCode = $unitCode;
    }

    public function getPriceComponentType()
    {
        return $this->priceComponentType;
    }

    public function setPriceComponentType($priceComponentType)
    {
        $this->priceComponentType = $priceComponentType;
    }

    public function getPriceType()
    {
        return $this->priceType;
    }

    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
    }

    public function getReferenceQuantity()
    {
        return $this->referenceQuantity;
    }

    public function setReferenceQuantity($referenceQuantity)
    {
        $this->referenceQuantity = $referenceQuantity;
    }
}

