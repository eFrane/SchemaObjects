<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The geographic coordinates of a place or event.
 */
class GeoCoordinates extends StructuredValue
{
    /**
     * Physical address of the item.
     */
    private $address;

    /**
     * The postal code. For example, 94043.
     */
    private $postalCode;

    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     */
    private $longitude;

    /**
     * The elevation of a location ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the
     * form 'NUMBER UNIT_OF_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers
     * alone should be assumed to be a value in meters.
     */
    private $elevation;

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getElevation()
    {
        return $this->elevation;
    }

    public function setElevation($elevation)
    {
        $this->elevation = $elevation;
    }
}

