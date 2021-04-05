<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * (Eventually to be defined as) a supertype of GeoShape designed to accommodate
 * definitions from Geo-Spatial best practices.
 */
class GeospatialGeometry extends Intangible
{
    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a geometry to one that contains it, i.e. it is inside (i.e. within) its
     * interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     */
    private $geoWithin;

    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a geometry to another that covers it. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     */
    private $geoCoveredBy;

    public function getGeoWithin()
    {
        return $this->geoWithin;
    }

    public function setGeoWithin($geoWithin)
    {
        $this->geoWithin = $geoWithin;
    }

    public function getGeoCoveredBy()
    {
        return $this->geoCoveredBy;
    }

    public function setGeoCoveredBy($geoCoveredBy)
    {
        $this->geoCoveredBy = $geoCoveredBy;
    }
}

