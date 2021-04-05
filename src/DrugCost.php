<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The cost per unit of a medical drug. Note that this type is not meant to
 * represent the price in an offer of a drug for sale; see the Offer type for that.
 * This type will typically be used to tag wholesale or average retail cost of a
 * drug, or maximum reimbursable cost. Costs of medical drugs vary widely depending
 * on how and where they are paid for, so while this type captures some of the
 * variables, costs should be used with caution by consumers of this schema's
 * markup.
 */
class DrugCost extends MedicalEntity
{
    /**
     * The cost per unit of the drug.
     */
    private $costPerUnit;

    /**
     * The currency (in 3-letter of the drug cost. See:
     * http://en.wikipedia.org/wiki/ISO_4217.
     */
    private $costCurrency;

    /**
     * The category of cost, such as wholesale, retail, reimbursement cap, etc.
     */
    private $costCategory;

    /**
     * Additional details to capture the origin of the cost data. For example,
     * 'Medicare Part B'.
     */
    private $costOrigin;

    public function getCostPerUnit()
    {
        return $this->costPerUnit;
    }

    public function setCostPerUnit($costPerUnit)
    {
        $this->costPerUnit = $costPerUnit;
    }

    public function getCostCurrency()
    {
        return $this->costCurrency;
    }

    public function setCostCurrency($costCurrency)
    {
        $this->costCurrency = $costCurrency;
    }

    public function getCostCategory()
    {
        return $this->costCategory;
    }

    public function setCostCategory($costCategory)
    {
        $this->costCategory = $costCategory;
    }

    public function getCostOrigin()
    {
        return $this->costOrigin;
    }

    public function setCostOrigin($costOrigin)
    {
        $this->costOrigin = $costOrigin;
    }
}

