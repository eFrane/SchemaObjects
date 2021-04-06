<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A DefinedRegion is a geographic area defined by potentially arbitrary (rather
 * than political, administrative or natural geographical) criteria. Properties are
 * provided for defining a region by reference to sets of postal codes.
 *
 * Examples: a delivery destination when shopping. Region where regional pricing is
 * configured.
 *
 * Requirement 1:
 * Country: US
 * States: "NY", "CA"
 *
 * Requirement 2:
 * Country: US
 * PostalCode Set: { [94000-94585], [97000, 97999], [13000, 13599]}
 * { [12345, 12345], [78945, 78945], }
 * Region = state, canton, prefecture, autonomous community...
 */
class DefinedRegion extends StructuredValue
{
    /**
     * A defined range of postal codes.
     */
    private $postalCodeRange;

    /**
     * The region in which the locality is, and which is in the country. For example,
     * California or another appropriate first-level [Administrative
     * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country)
     */
    private $addressRegion;

    /**
     * A defined range of postal codes indicated by a common textual prefix. Used for
     * non-numeric systems such as UK.
     */
    private $postalCodePrefix;

    public function getPostalCodeRange()
    {
        return $this->postalCodeRange;
    }

    public function setPostalCodeRange($postalCodeRange)
    {
        $this->postalCodeRange = $postalCodeRange;
    }

    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    public function setAddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;
    }

    public function getPostalCodePrefix()
    {
        return $this->postalCodePrefix;
    }

    public function setPostalCodePrefix($postalCodePrefix)
    {
        $this->postalCodePrefix = $postalCodePrefix;
    }
}

