<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A structured value representing exchange rate.
 */
class ExchangeRateSpecification extends StructuredValue
{
    /**
     * The difference between the price at which a broker or other intermediary buys
     * and sells foreign currency.
     */
    private $exchangeRateSpread;

    /**
     * The current price of a currency.
     */
    private $currentExchangeRate;

    public function getExchangeRateSpread()
    {
        return $this->exchangeRateSpread;
    }

    public function setExchangeRateSpread($exchangeRateSpread)
    {
        $this->exchangeRateSpread = $exchangeRateSpread;
    }

    public function getCurrentExchangeRate()
    {
        return $this->currentExchangeRate;
    }

    public function setCurrentExchangeRate($currentExchangeRate)
    {
        $this->currentExchangeRate = $currentExchangeRate;
    }
}

