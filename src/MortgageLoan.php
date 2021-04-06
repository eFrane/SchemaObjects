<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A loan in which property or real estate is used as collateral. (A loan
 * securitized against some real estate).
 */
class MortgageLoan extends LoanOrCredit
{
    /**
     * Amount of mortgage mandate that can be converted into a proper mortgage at a
     * later stage.
     */
    private $loanMortgageMandateAmount;

    /**
     * Whether borrower is a resident of the jurisdiction where the property is
     * located.
     */
    private $domiciledMortgage;

    public function getLoanMortgageMandateAmount()
    {
        return $this->loanMortgageMandateAmount;
    }

    public function setLoanMortgageMandateAmount($loanMortgageMandateAmount)
    {
        $this->loanMortgageMandateAmount = $loanMortgageMandateAmount;
    }

    public function getDomiciledMortgage()
    {
        return $this->domiciledMortgage;
    }

    public function setDomiciledMortgage($domiciledMortgage)
    {
        $this->domiciledMortgage = $domiciledMortgage;
    }
}

