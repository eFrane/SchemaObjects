<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A GeoCircle is a GeoShape representing a circular geographic area. As it is a
 * GeoShape
 *           it provides the simple textual property 'circle', but also allows the
 * combination of postalCode alongside geoRadius.
 *           The center of the circle can be indicated via the 'geoMidpoint'
 * property, or more approximately using 'address', 'postalCode'.
 */
class GeoCircle extends GeoShape
{
    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated
     * otherwise via Distance notation).
     */
    private $geoRadius;

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
     */
    private $geoMidpoint;

    public function getGeoRadius()
    {
        return $this->geoRadius;
    }

    public function setGeoRadius($geoRadius)
    {
        $this->geoRadius = $geoRadius;
    }

    public function getGeoMidpoint()
    {
        return $this->geoMidpoint;
    }

    public function setGeoMidpoint($geoMidpoint)
    {
        $this->geoMidpoint = $geoMidpoint;
    }
}

