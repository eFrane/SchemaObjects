<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * EnergyConsumptionDetails represents information related to the energy efficiency
 * of a product that consumes energy. The information that can be provided is based
 * on international regulations such as for example [EU directive
 * 2017/1369](https://eur-lex.europa.eu/eli/reg/2017/1369/oj) for energy labeling
 * and the [Energy labeling
 * rule](https://www.ftc.gov/enforcement/rules/rulemaking-regulatory-reform-proceedings/energy-water-use-labeling-consumer)
 * under the Energy Policy and Conservation Act (EPCA) in the US.
 */
class EnergyConsumptionDetails extends Intangible
{
    /**
     * Specifies the least energy efficient class on the regulated EU energy
     * consumption scale for the product category a product belongs to. For example,
     * energy consumption for televisions placed on the market after January 1, 2020 is
     * scaled from D to A+++.
     */
    private $energyEfficiencyScaleMin;

    /**
     * Specifies the most energy efficient class on the regulated EU energy consumption
     * scale for the product category a product belongs to. For example, energy
     * consumption for televisions placed on the market after January 1, 2020 is scaled
     * from D to A+++.
     */
    private $energyEfficiencyScaleMax;

    /**
     * Defines the energy efficiency Category (which could be either a rating out of
     * range of values or a yes/no certification) for a product according to an
     * international energy efficiency standard.
     */
    private $hasEnergyEfficiencyCategory;

    public function getEnergyEfficiencyScaleMin()
    {
        return $this->energyEfficiencyScaleMin;
    }

    public function setEnergyEfficiencyScaleMin($energyEfficiencyScaleMin)
    {
        $this->energyEfficiencyScaleMin = $energyEfficiencyScaleMin;
    }

    public function getEnergyEfficiencyScaleMax()
    {
        return $this->energyEfficiencyScaleMax;
    }

    public function setEnergyEfficiencyScaleMax($energyEfficiencyScaleMax)
    {
        $this->energyEfficiencyScaleMax = $energyEfficiencyScaleMax;
    }

    public function getHasEnergyEfficiencyCategory()
    {
        return $this->hasEnergyEfficiencyCategory;
    }

    public function setHasEnergyEfficiencyCategory($hasEnergyEfficiencyCategory)
    {
        $this->hasEnergyEfficiencyCategory = $hasEnergyEfficiencyCategory;
    }
}

