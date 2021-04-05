<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * When a single product is associated with multiple offers (for example, the same
 * pair of shoes is offered by different merchants), then AggregateOffer can be
 * used.
 *
 * Note: AggregateOffers are normally expected to associate multiple offers that
 * all share the same defined [[businessFunction]] value, or default to
 * http://purl.org/goodrelations/v1#Sell if businessFunction is not explicitly
 * defined.
 */
class AggregateOffer extends Offer
{
    /**
     * The number of offers for the product.
     */
    private $offerCount;

    /**
     * The lowest price of all offers available.
     *
     * Usage guidelines:
     *
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similiar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     */
    private $lowPrice;

    /**
     * The highest price of all offers available.
     *
     * Usage guidelines:
     *
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similiar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     */
    private $highPrice;

    public function getOfferCount()
    {
        return $this->offerCount;
    }

    public function setOfferCount($offerCount)
    {
        $this->offerCount = $offerCount;
    }

    public function getLowPrice()
    {
        return $this->lowPrice;
    }

    public function setLowPrice($lowPrice)
    {
        $this->lowPrice = $lowPrice;
    }

    public function getHighPrice()
    {
        return $this->highPrice;
    }

    public function setHighPrice($highPrice)
    {
        $this->highPrice = $highPrice;
    }
}

