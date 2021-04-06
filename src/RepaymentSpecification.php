<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A structured value representing repayment.
 */
class RepaymentSpecification extends StructuredValue
{
    /**
     * The amount of money to pay in a single payment.
     */
    private $loanPaymentAmount;

    /**
     * Frequency of payments due, i.e. number of months between payments. This is
     * defined as a frequency, i.e. the reciprocal of a period of time.
     */
    private $loanPaymentFrequency;

    /**
     * The amount to be paid as a penalty in the event of early payment of the loan.
     */
    private $earlyPrepaymentPenalty;

    /**
     * a type of payment made in cash during the onset of the purchase of an expensive
     * good/service. The payment typically represents only a percentage of the full
     * purchase price.
     */
    private $downPayment;

    /**
     * The number of payments contractually required at origination to repay the loan.
     * For monthly paying loans this is the number of months from the contractual first
     * payment date to the maturity date.
     */
    private $numberOfLoanPayments;

    public function getLoanPaymentAmount()
    {
        return $this->loanPaymentAmount;
    }

    public function setLoanPaymentAmount($loanPaymentAmount)
    {
        $this->loanPaymentAmount = $loanPaymentAmount;
    }

    public function getLoanPaymentFrequency()
    {
        return $this->loanPaymentFrequency;
    }

    public function setLoanPaymentFrequency($loanPaymentFrequency)
    {
        $this->loanPaymentFrequency = $loanPaymentFrequency;
    }

    public function getEarlyPrepaymentPenalty()
    {
        return $this->earlyPrepaymentPenalty;
    }

    public function setEarlyPrepaymentPenalty($earlyPrepaymentPenalty)
    {
        $this->earlyPrepaymentPenalty = $earlyPrepaymentPenalty;
    }

    public function getDownPayment()
    {
        return $this->downPayment;
    }

    public function setDownPayment($downPayment)
    {
        $this->downPayment = $downPayment;
    }

    public function getNumberOfLoanPayments()
    {
        return $this->numberOfLoanPayments;
    }

    public function setNumberOfLoanPayments($numberOfLoanPayments)
    {
        $this->numberOfLoanPayments = $numberOfLoanPayments;
    }
}

