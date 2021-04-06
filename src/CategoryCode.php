<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A Category Code.
 */
class CategoryCode extends DefinedTerm
{
    /**
     * A short textual code that uniquely identifies the value.
     */
    private $codeValue;

    /**
     * A [[CategoryCodeSet]] that contains this category code.
     */
    private $inCodeSet;

    public function getCodeValue()
    {
        return $this->codeValue;
    }

    public function setCodeValue($codeValue)
    {
        $this->codeValue = $codeValue;
    }

    public function getInCodeSet()
    {
        return $this->inCodeSet;
    }

    public function setInCodeSet($inCodeSet)
    {
        $this->inCodeSet = $inCodeSet;
    }
}

