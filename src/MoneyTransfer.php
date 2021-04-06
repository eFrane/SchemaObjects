<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of transferring money from one place to another place. This may occur
 * electronically or physically.
 */
class MoneyTransfer extends TransferAction
{
    /**
     * The amount of money.
     */
    private $amount;

    /**
     * A bank or bank’s branch, financial institution or international financial
     * institution operating the beneficiary’s bank account or releasing funds for
     * the beneficiary.
     */
    private $beneficiaryBank;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getBeneficiaryBank()
    {
        return $this->beneficiaryBank;
    }

    public function setBeneficiaryBank($beneficiaryBank)
    {
        $this->beneficiaryBank = $beneficiaryBank;
    }
}

