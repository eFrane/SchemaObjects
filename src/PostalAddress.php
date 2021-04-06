<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The mailing address.
 */
class PostalAddress extends ContactPoint
{
    /**
     * The locality in which the street address is, and which is in the region. For
     * example, Mountain View.
     */
    private $addressLocality;

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     */
    private $streetAddress;

    /**
     * The post office box number for PO box addresses.
     */
    private $postOfficeBoxNumber;

    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    public function setAddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;
    }

    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    public function getPostOfficeBoxNumber()
    {
        return $this->postOfficeBoxNumber;
    }

    public function setPostOfficeBoxNumber($postOfficeBoxNumber)
    {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
    }
}

