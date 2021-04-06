<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A product or service offered by a bank whereby one may deposit, withdraw or
 * transfer money and in some cases be paid interest.
 */
class BankAccount extends FinancialProduct
{
    /**
     * An overdraft is an extension of credit from a lending institution when an
     * account reaches zero. An overdraft allows the individual to continue withdrawing
     * money even if the account has no funds in it. Basically the bank allows people
     * to borrow a set amount of money.
     */
    private $accountOverdraftLimit;

    /**
     * The type of a bank account.
     */
    private $bankAccountType;

    /**
     * A minimum amount that has to be paid in every month.
     */
    private $accountMinimumInflow;

    public function getAccountOverdraftLimit()
    {
        return $this->accountOverdraftLimit;
    }

    public function setAccountOverdraftLimit($accountOverdraftLimit)
    {
        $this->accountOverdraftLimit = $accountOverdraftLimit;
    }

    public function getBankAccountType()
    {
        return $this->bankAccountType;
    }

    public function setBankAccountType($bankAccountType)
    {
        $this->bankAccountType = $bankAccountType;
    }

    public function getAccountMinimumInflow()
    {
        return $this->accountMinimumInflow;
    }

    public function setAccountMinimumInflow($accountMinimumInflow)
    {
        $this->accountMinimumInflow = $accountMinimumInflow;
    }
}

