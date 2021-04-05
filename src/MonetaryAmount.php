<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A monetary value or range. This type can be used to describe an amount of money
 * such as $50 USD, or a range as in describing a bank account being suitable for a
 * balance between £1,000 and £1,000,000 GBP, or the value of a salary, etc. It
 * is recommended to use [[PriceSpecification]] Types to describe the price of an
 * Offer, Invoice, etc.
 */
class MonetaryAmount extends StructuredValue
{
    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     */
    private $validThrough;

    public function getValidThrough()
    {
        return $this->validThrough;
    }

    public function setValidThrough($validThrough)
    {
        $this->validThrough = $validThrough;
    }
}

