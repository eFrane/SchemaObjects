<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A structured value representing a price or price range. Typically, only the
 * subclasses of this type are used for markup. It is recommended to use
 * [[MonetaryAmount]] to describe independent amounts of money such as a salary,
 * credit card limits, etc.
 */
class PriceSpecification extends StructuredValue
{
    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price
     * specification or not.
     */
    private $valueAddedTaxIncluded;

    /**
     * The highest price if the price is a range.
     */
    private $maxPrice;

    /**
     * The date when the item becomes valid.
     */
    private $validFrom;

    /**
     * The lowest price if the price is a range.
     */
    private $minPrice;

    public function getValueAddedTaxIncluded()
    {
        return $this->valueAddedTaxIncluded;
    }

    public function setValueAddedTaxIncluded($valueAddedTaxIncluded)
    {
        $this->valueAddedTaxIncluded = $valueAddedTaxIncluded;
    }

    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;
    }

    public function getValidFrom()
    {
        return $this->validFrom;
    }

    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
    }

    public function getMinPrice()
    {
        return $this->minPrice;
    }

    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
    }
}

