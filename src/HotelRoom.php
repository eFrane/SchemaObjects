<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A hotel room is a single room in a hotel.
 * <br /><br />
 * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
 */
class HotelRoom extends Room
{
    /**
     * The type of bed or beds included in the accommodation. For the single case of
     * just one bed of a certain type, you use bed directly with a text.
     *       If you want to indicate the quantity of a certain kind of bed, use an
     * instance of BedDetails. For more detailed information, use the amenityFeature
     * property.
     */
    private $bed;

    public function getBed()
    {
        return $this->bed;
    }

    public function setBed($bed)
    {
        $this->bed = $bed;
    }
}

