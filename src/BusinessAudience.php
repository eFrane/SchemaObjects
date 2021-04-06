<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A set of characteristics belonging to businesses, e.g. who compose an item's
 * target audience.
 */
class BusinessAudience extends Audience
{
    /**
     * The age of the business.
     */
    private $yearsInOperation;

    /**
     * The number of employees in an organization e.g. business.
     */
    private $numberOfEmployees;

    /**
     * The size of the business in annual revenue.
     */
    private $yearlyRevenue;

    public function getYearsInOperation()
    {
        return $this->yearsInOperation;
    }

    public function setYearsInOperation($yearsInOperation)
    {
        $this->yearsInOperation = $yearsInOperation;
    }

    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }

    public function getYearlyRevenue()
    {
        return $this->yearlyRevenue;
    }

    public function setYearlyRevenue($yearlyRevenue)
    {
        $this->yearlyRevenue = $yearlyRevenue;
    }
}

