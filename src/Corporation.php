<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Organization: A business corporation.
 */
class Corporation extends Organization
{
    /**
     * The exchange traded instrument associated with a Corporation object. The
     * tickerSymbol is expressed as an exchange and an instrument name separated by a
     * space character. For the exchange component of the tickerSymbol attribute, we
     * recommend using the controlled vocabulary of Market Identifier Codes (MIC)
     * specified in ISO15022.
     */
    private $tickerSymbol;

    public function getTickerSymbol()
    {
        return $this->tickerSymbol;
    }

    public function setTickerSymbol($tickerSymbol)
    {
        $this->tickerSymbol = $tickerSymbol;
    }
}

