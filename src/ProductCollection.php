<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A set of products (either [[ProductGroup]]s or specific variants) that are
 * listed together e.g. in an [[Offer]].
 */
class ProductCollection extends Product
{
    /**
     * This links to a node or nodes indicating the exact quantity of the products
     * included in  an [[Offer]] or [[ProductCollection]].
     */
    private $includesObject;

    public function getIncludesObject()
    {
        return $this->includesObject;
    }

    public function setIncludesObject($includesObject)
    {
        $this->includesObject = $includesObject;
    }
}

