<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A ProductGroup represents a group of [[Product]]s that vary only in certain
 * well-described ways, such as by [[size]], [[color]], [[material]] etc.
 *
 * While a ProductGroup itself is not directly offered for sale, the various
 * varying products that it represents can be. The ProductGroup serves as a
 * prototype or template, standing in for all of the products who have an
 * [[isVariantOf]] relationship to it. As such, properties (including additional
 * types) can be applied to the ProductGroup to represent characteristics shared by
 * each of the (possibly very many) variants. Properties that reference a
 * ProductGroup are not included in this mechanism; neither are the following
 * specific properties [[variesBy]], [[hasVariant]], [[url]].
 */
class ProductGroup extends Product
{
    /**
     * Indicates the property or properties by which the variants in a [[ProductGroup]]
     * vary, e.g. their size, color etc. Schema.org properties can be referenced by
     * their short name e.g. "color"; terms defined elsewhere can be referenced with
     * their URIs.
     */
    private $variesBy;

    /**
     * Indicates a textual identifier for a ProductGroup.
     */
    private $productGroupID;

    /**
     * Indicates a [[Product]] that is a member of this [[ProductGroup]] (or
     * [[ProductModel]]).
     */
    private $hasVariant;

    public function getVariesBy()
    {
        return $this->variesBy;
    }

    public function setVariesBy($variesBy)
    {
        $this->variesBy = $variesBy;
    }

    public function getProductGroupID()
    {
        return $this->productGroupID;
    }

    public function setProductGroupID($productGroupID)
    {
        $this->productGroupID = $productGroupID;
    }

    public function getHasVariant()
    {
        return $this->hasVariant;
    }

    public function setHasVariant($hasVariant)
    {
        $this->hasVariant = $hasVariant;
    }
}

