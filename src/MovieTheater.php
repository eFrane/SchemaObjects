<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A movie theater.
 */
class MovieTheater extends CivicStructure
{
    /**
     * The number of screens in the movie theater.
     */
    private $screenCount;

    public function getScreenCount()
    {
        return $this->screenCount;
    }

    public function setScreenCount($screenCount)
    {
        $this->screenCount = $screenCount;
    }
}

