<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of taking money from a buyer in exchange for goods or services rendered.
 * An agent sells an object, product, or service to a buyer for a price. Reciprocal
 * of BuyAction.
 */
class SellAction extends TradeAction
{
    /**
     * The warranty promise(s) included in the offer.
     */
    private $warrantyPromise;

    /**
     * A sub property of participant. The participant/person/organization that bought
     * the object.
     */
    private $buyer;

    public function getWarrantyPromise()
    {
        return $this->warrantyPromise;
    }

    public function setWarrantyPromise($warrantyPromise)
    {
        $this->warrantyPromise = $warrantyPromise;
    }

    public function getBuyer()
    {
        return $this->buyer;
    }

    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
    }
}

