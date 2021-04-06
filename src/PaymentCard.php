<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A payment method using a credit, debit, store or other card to associate the
 * payment with an account.
 */
class PaymentCard extends FinancialProduct
{
    /**
     * A secure method for consumers to purchase products or services via debit, credit
     * or smartcards by using RFID or NFC technology.
     */
    private $contactlessPayment;

    /**
     * A cardholder benefit that pays the cardholder a small percentage of their net
     * expenditures.
     */
    private $cashBack;

    /**
     * A floor limit is the amount of money above which credit card transactions must
     * be authorized.
     */
    private $floorLimit;

    /**
     * The minimum payment is the lowest amount of money that one is required to pay on
     * a credit card statement each month.
     */
    private $monthlyMinimumRepaymentAmount;

    public function getContactlessPayment()
    {
        return $this->contactlessPayment;
    }

    public function setContactlessPayment($contactlessPayment)
    {
        $this->contactlessPayment = $contactlessPayment;
    }

    public function getCashBack()
    {
        return $this->cashBack;
    }

    public function setCashBack($cashBack)
    {
        $this->cashBack = $cashBack;
    }

    public function getFloorLimit()
    {
        return $this->floorLimit;
    }

    public function setFloorLimit($floorLimit)
    {
        $this->floorLimit = $floorLimit;
    }

    public function getMonthlyMinimumRepaymentAmount()
    {
        return $this->monthlyMinimumRepaymentAmount;
    }

    public function setMonthlyMinimumRepaymentAmount($monthlyMinimumRepaymentAmount)
    {
        $this->monthlyMinimumRepaymentAmount = $monthlyMinimumRepaymentAmount;
    }
}

