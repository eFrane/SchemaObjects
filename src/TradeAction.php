<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of participating in an exchange of goods and services for monetary
 * compensation. An agent trades an object, product or service with a participant
 * in exchange for a one time or periodic payment.
 */
class TradeAction extends Action
{
    /**
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types e.g. "Ithaca HOUR".
     */
    private $priceCurrency;

    /**
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     *
     * Usage guidelines:
     *
     * * Use the [[priceCurrency]] property (with standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types e.g. "Ithaca HOUR") instead of including [ambiguous
     * symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign)
     * such as '$' in the value.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     * * Note that both
     * [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and
     * Microdata syntax allow the use of a "content=" attribute for publishing simple
     * machine-readable values alongside more human-friendly formatting.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similiar Unicode symbols.
     */
    private $price;

    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    public function setPriceCurrency($priceCurrency)
    {
        $this->priceCurrency = $priceCurrency;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}

