<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A lodging business, such as a motel, hotel, or inn.
 */
class LodgingBusiness extends LocalBusiness
{
    /**
     * An official rating for a lodging business or food establishment, e.g. from
     * national associations or standards bodies. Use the author property to indicate
     * the rating organization, e.g. as an Organization with name such as (e.g. HOTREC,
     * DEHOGA, WHR, or Hotelstars).
     */
    private $starRating;

    public function getStarRating()
    {
        return $this->starRating;
    }

    public function setStarRating($starRating)
    {
        $this->starRating = $starRating;
    }
}

