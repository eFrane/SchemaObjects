<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A particular physical business or branch of an organization. Examples of
 * LocalBusiness include a restaurant, a particular branch of a restaurant chain, a
 * branch of a bank, a medical practice, a club, a bowling alley, etc.
 */
class LocalBusiness extends Place
{
    /**
     * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
     */
    private $paymentAccepted;

    /**
     * The price range of the business, for example ```$$$```.
     */
    private $priceRange;

    /**
     * The currency accepted.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types e.g. "Ithaca HOUR".
     */
    private $currenciesAccepted;

    /**
     * The larger organization that this local business is a branch of, if any. Not to
     * be confused with (anatomical)[[branch]].
     */
    private $branchOf;

    /**
     * The general opening hours for a business. Opening hours can be specified as a
     * weekly time range, starting with days, then times per day. Multiple days can be
     * listed with commas ',' separating each day. Day or time ranges are specified
     * using a hyphen '-'.
     *
     * * Days are specified using the following two-letter combinations: ```Mo```,
     * ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.
     * * Times are specified using 24:00 format. For example, 3pm is specified as
     * ```15:00```, 10am as ```10:00```. 
     * * Here is an example: <code>&lt;time itemprop="openingHours"
     * datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays
     * 4-8pm&lt;/time&gt;</code>.
     * * If a business is open 7 days a week, then it can be specified as
     * <code>&lt;time itemprop=&quot;openingHours&quot;
     * datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all
     * day&lt;/time&gt;</code>.
     */
    private $openingHours;

    public function getPaymentAccepted()
    {
        return $this->paymentAccepted;
    }

    public function setPaymentAccepted($paymentAccepted)
    {
        $this->paymentAccepted = $paymentAccepted;
    }

    public function getPriceRange()
    {
        return $this->priceRange;
    }

    public function setPriceRange($priceRange)
    {
        $this->priceRange = $priceRange;
    }

    public function getCurrenciesAccepted()
    {
        return $this->currenciesAccepted;
    }

    public function setCurrenciesAccepted($currenciesAccepted)
    {
        $this->currenciesAccepted = $currenciesAccepted;
    }

    public function getBranchOf()
    {
        return $this->branchOf;
    }

    public function setBranchOf($branchOf)
    {
        $this->branchOf = $branchOf;
    }

    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    public function setOpeningHours($openingHours)
    {
        $this->openingHours = $openingHours;
    }
}

