<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A product provided to consumers and businesses by financial institutions such as
 * banks, insurance companies, brokerage firms, consumer finance companies, and
 * investment companies which comprise the financial services industry.
 */
class FinancialProduct extends Service
{
    /**
     * The interest rate, charged or paid, applicable to the financial product. Note:
     * This is different from the calculated annualPercentageRate.
     */
    private $interestRate;

    /**
     * Description of fees, commissions, and other terms applied either to a class of
     * financial product, or by a financial service organization.
     */
    private $feesAndCommissionsSpecification;

    /**
     * The annual rate that is charged for borrowing (or made by investing), expressed
     * as a single percentage number that represents the actual yearly cost of funds
     * over the term of a loan. This includes any fees or additional costs associated
     * with the transaction.
     */
    private $annualPercentageRate;

    public function getInterestRate()
    {
        return $this->interestRate;
    }

    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }

    public function getFeesAndCommissionsSpecification()
    {
        return $this->feesAndCommissionsSpecification;
    }

    public function setFeesAndCommissionsSpecification($feesAndCommissionsSpecification)
    {
        $this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;
    }

    public function getAnnualPercentageRate()
    {
        return $this->annualPercentageRate;
    }

    public function setAnnualPercentageRate($annualPercentageRate)
    {
        $this->annualPercentageRate = $annualPercentageRate;
    }
}

