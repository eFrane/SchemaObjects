<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A statement of the money due for goods or services; a bill.
 */
class Invoice extends Intangible
{
    /**
     * Party placing the order or paying the invoice.
     */
    private $customer;

    /**
     * The status of payment; whether the invoice has been paid or not.
     */
    private $paymentStatus;

    /**
     * The date that payment is due.
     */
    private $paymentDue;

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a
     * single Invoice.
     */
    private $referencesOrder;

    /**
     * The identifier for the account the payment will be applied to.
     */
    private $accountId;

    /**
     * The minimum payment required at this time.
     */
    private $minimumPaymentDue;

    /**
     * The total amount due.
     */
    private $totalPaymentDue;

    /**
     * The time interval used to compute the invoice.
     */
    private $billingPeriod;

    /**
     * The date the invoice is scheduled to be paid.
     */
    private $scheduledPaymentDate;

    /**
     * The name of the credit card or other method of payment for the order.
     */
    private $paymentMethod;

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
    }

    public function getPaymentDue()
    {
        return $this->paymentDue;
    }

    public function setPaymentDue($paymentDue)
    {
        $this->paymentDue = $paymentDue;
    }

    public function getReferencesOrder()
    {
        return $this->referencesOrder;
    }

    public function setReferencesOrder($referencesOrder)
    {
        $this->referencesOrder = $referencesOrder;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    public function getMinimumPaymentDue()
    {
        return $this->minimumPaymentDue;
    }

    public function setMinimumPaymentDue($minimumPaymentDue)
    {
        $this->minimumPaymentDue = $minimumPaymentDue;
    }

    public function getTotalPaymentDue()
    {
        return $this->totalPaymentDue;
    }

    public function setTotalPaymentDue($totalPaymentDue)
    {
        $this->totalPaymentDue = $totalPaymentDue;
    }

    public function getBillingPeriod()
    {
        return $this->billingPeriod;
    }

    public function setBillingPeriod($billingPeriod)
    {
        $this->billingPeriod = $billingPeriod;
    }

    public function getScheduledPaymentDate()
    {
        return $this->scheduledPaymentDate;
    }

    public function setScheduledPaymentDate($scheduledPaymentDate)
    {
        $this->scheduledPaymentDate = $scheduledPaymentDate;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }
}

