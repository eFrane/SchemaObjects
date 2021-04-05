<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A description of costs to the patient under a given network or formulary.
 */
class HealthPlanCostSharingSpecification extends Intangible
{
    /**
     * Whether the coinsurance applies before or after deductible, etc. TODO: Is this a
     * closed set?
     */
    private $healthPlanCoinsuranceOption;

    /**
     * Whether the copay is before or after deductible, etc. TODO: Is this a closed
     * set?
     */
    private $healthPlanCopayOption;

    /**
     * The category or type of pharmacy associated with this cost sharing.
     */
    private $healthPlanPharmacyCategory;

    /**
     * Whether The rate of coinsurance expressed as a number between 0.0 and 1.0.
     */
    private $healthPlanCoinsuranceRate;

    /**
     * Whether The copay amount.
     */
    private $healthPlanCopay;

    public function getHealthPlanCoinsuranceOption()
    {
        return $this->healthPlanCoinsuranceOption;
    }

    public function setHealthPlanCoinsuranceOption($healthPlanCoinsuranceOption)
    {
        $this->healthPlanCoinsuranceOption = $healthPlanCoinsuranceOption;
    }

    public function getHealthPlanCopayOption()
    {
        return $this->healthPlanCopayOption;
    }

    public function setHealthPlanCopayOption($healthPlanCopayOption)
    {
        $this->healthPlanCopayOption = $healthPlanCopayOption;
    }

    public function getHealthPlanPharmacyCategory()
    {
        return $this->healthPlanPharmacyCategory;
    }

    public function setHealthPlanPharmacyCategory($healthPlanPharmacyCategory)
    {
        $this->healthPlanPharmacyCategory = $healthPlanPharmacyCategory;
    }

    public function getHealthPlanCoinsuranceRate()
    {
        return $this->healthPlanCoinsuranceRate;
    }

    public function setHealthPlanCoinsuranceRate($healthPlanCoinsuranceRate)
    {
        $this->healthPlanCoinsuranceRate = $healthPlanCoinsuranceRate;
    }

    public function getHealthPlanCopay()
    {
        return $this->healthPlanCopay;
    }

    public function setHealthPlanCopay($healthPlanCopay)
    {
        $this->healthPlanCopay = $healthPlanCopay;
    }
}

