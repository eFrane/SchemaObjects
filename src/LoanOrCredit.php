<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A financial product for the loaning of an amount of money, or line of credit,
 * under agreed terms and charges.
 */
class LoanOrCredit extends FinancialProduct
{
    /**
     * The duration of the loan or credit agreement.
     */
    private $loanTerm;

    /**
     * The period of time after any due date that the borrower has to fulfil its
     * obligations before a default (failure to pay) is deemed to have occurred.
     */
    private $gracePeriod;

    /**
     * Whether the terms for payment of interest can be renegotiated during the life of
     * the loan.
     */
    private $renegotiableLoan;

    /**
     * A form of paying back money previously borrowed from a lender. Repayment usually
     * takes the form of periodic payments that normally include part principal plus
     * interest in each payment.
     */
    private $loanRepaymentForm;

    /**
     * The type of a loan or credit.
     */
    private $loanType;

    /**
     * Assets required to secure loan or credit repayments. It may take form of third
     * party pledge, goods, financial instruments (cash, securities, etc.)
     */
    private $requiredCollateral;

    /**
     * The only way you get the money back in the event of default is the security.
     * Recourse is where you still have the opportunity to go back to the borrower for
     * the rest of the money.
     */
    private $recourseLoan;

    public function getLoanTerm()
    {
        return $this->loanTerm;
    }

    public function setLoanTerm($loanTerm)
    {
        $this->loanTerm = $loanTerm;
    }

    public function getGracePeriod()
    {
        return $this->gracePeriod;
    }

    public function setGracePeriod($gracePeriod)
    {
        $this->gracePeriod = $gracePeriod;
    }

    public function getRenegotiableLoan()
    {
        return $this->renegotiableLoan;
    }

    public function setRenegotiableLoan($renegotiableLoan)
    {
        $this->renegotiableLoan = $renegotiableLoan;
    }

    public function getLoanRepaymentForm()
    {
        return $this->loanRepaymentForm;
    }

    public function setLoanRepaymentForm($loanRepaymentForm)
    {
        $this->loanRepaymentForm = $loanRepaymentForm;
    }

    public function getLoanType()
    {
        return $this->loanType;
    }

    public function setLoanType($loanType)
    {
        $this->loanType = $loanType;
    }

    public function getRequiredCollateral()
    {
        return $this->requiredCollateral;
    }

    public function setRequiredCollateral($requiredCollateral)
    {
        $this->requiredCollateral = $requiredCollateral;
    }

    public function getRecourseLoan()
    {
        return $this->recourseLoan;
    }

    public function setRecourseLoan($recourseLoan)
    {
        $this->recourseLoan = $recourseLoan;
    }
}

