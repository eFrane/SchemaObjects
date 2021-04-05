<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A datasheet or vendor specification of a product (in the sense of a prototypical
 * description).
 */
class ProductModel extends Product
{
    /**
     * A pointer from a newer variant of a product  to its previous, often discontinued
     * predecessor.
     */
    private $successorOf;

    /**
     * A pointer from a previous, often discontinued variant of the product to its
     * newer variant.
     */
    private $predecessorOf;

    public function getSuccessorOf()
    {
        return $this->successorOf;
    }

    public function setSuccessorOf($successorOf)
    {
        $this->successorOf = $successorOf;
    }

    public function getPredecessorOf()
    {
        return $this->predecessorOf;
    }

    public function setPredecessorOf($predecessorOf)
    {
        $this->predecessorOf = $predecessorOf;
    }
}

