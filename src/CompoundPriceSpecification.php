<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A compound price specification is one that bundles multiple prices that all
 * apply in combination for different dimensions of consumption. Use the name
 * property of the attached unit price specification for indicating the dimension
 * of a price component (e.g. "electricity" or "final cleaning").
 */
class CompoundPriceSpecification extends PriceSpecification
{
    /**
     * This property links to all [[UnitPriceSpecification]] nodes that apply in
     * parallel for the [[CompoundPriceSpecification]] node.
     */
    private $priceComponent;

    public function getPriceComponent()
    {
        return $this->priceComponent;
    }

    public function setPriceComponent($priceComponent)
    {
        $this->priceComponent = $priceComponent;
    }
}

