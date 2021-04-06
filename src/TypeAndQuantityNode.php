<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A structured value indicating the quantity, unit of measurement, and business
 * function of goods included in a bundle offer.
 */
class TypeAndQuantityNode extends StructuredValue
{
    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or
     * component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     */
    private $businessFunction;

    /**
     * The quantity of the goods included in the offer.
     */
    private $amountOfThisGood;

    public function getBusinessFunction()
    {
        return $this->businessFunction;
    }

    public function setBusinessFunction($businessFunction)
    {
        $this->businessFunction = $businessFunction;
    }

    public function getAmountOfThisGood()
    {
        return $this->amountOfThisGood;
    }

    public function setAmountOfThisGood($amountOfThisGood)
    {
        $this->amountOfThisGood = $amountOfThisGood;
    }
}

