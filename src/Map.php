<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A map.
 */
class Map extends CreativeWork
{
    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     */
    private $mapType;

    public function getMapType()
    {
        return $this->mapType;
    }

    public function setMapType($mapType)
    {
        $this->mapType = $mapType;
    }
}

