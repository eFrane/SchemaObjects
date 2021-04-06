<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Indicates a range of postalcodes, usually defined as the set of valid codes
 * between [[postalCodeBegin]] and [[postalCodeEnd]], inclusively.
 */
class PostalCodeRangeSpecification extends StructuredValue
{
    /**
     * First postal code in a range (included).
     */
    private $postalCodeBegin;

    /**
     * Last postal code in the range (included). Needs to be after [[postalCodeBegin]].
     */
    private $postalCodeEnd;

    public function getPostalCodeBegin()
    {
        return $this->postalCodeBegin;
    }

    public function setPostalCodeBegin($postalCodeBegin)
    {
        $this->postalCodeBegin = $postalCodeBegin;
    }

    public function getPostalCodeEnd()
    {
        return $this->postalCodeEnd;
    }

    public function setPostalCodeEnd($postalCodeEnd)
    {
        $this->postalCodeEnd = $postalCodeEnd;
    }
}

