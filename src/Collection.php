<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A collection of items e.g. creative works or products.
 */
class Collection extends CreativeWork
{
    /**
     * The number of items in the [[Collection]].
     */
    private $collectionSize;

    public function getCollectionSize()
    {
        return $this->collectionSize;
    }

    public function setCollectionSize($collectionSize)
    {
        $this->collectionSize = $collectionSize;
    }
}

