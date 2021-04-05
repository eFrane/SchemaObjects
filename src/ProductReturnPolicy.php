<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A ProductReturnPolicy provides information about product return policies
 * associated with an [[Organization]] or [[Product]].
 */
class ProductReturnPolicy extends Intangible
{
    /**
     * The productReturnDays property indicates the number of days (from purchase)
     * within which relevant product return policy is applicable.
     */
    private $productReturnDays;

    /**
     * Indicates a Web page or service by URL, for product return.
     */
    private $productReturnLink;

    public function getProductReturnDays()
    {
        return $this->productReturnDays;
    }

    public function setProductReturnDays($productReturnDays)
    {
        $this->productReturnDays = $productReturnDays;
    }

    public function getProductReturnLink()
    {
        return $this->productReturnLink;
    }

    public function setProductReturnLink($productReturnLink)
    {
        $this->productReturnLink = $productReturnLink;
    }
}

