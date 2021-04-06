<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An audiobook.
 */
class Audiobook extends AudioObject
{
    /**
     * A person who reads (performs) the audiobook.
     */
    private $readBy;

    public function getReadBy()
    {
        return $this->readBy;
    }

    public function setReadBy($readBy)
    {
        $this->readBy = $readBy;
    }
}

