<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A set of Category Code values.
 */
class CategoryCodeSet extends DefinedTermSet
{
    /**
     * A Category code contained in this code set.
     */
    private $hasCategoryCode;

    public function getHasCategoryCode()
    {
        return $this->hasCategoryCode;
    }

    public function setHasCategoryCode($hasCategoryCode)
    {
        $this->hasCategoryCode = $hasCategoryCode;
    }
}

