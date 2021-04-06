<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of giving money to a seller in exchange for goods or services rendered.
 * An agent buys an object, product, or service from a seller for a price.
 * Reciprocal of SellAction.
 */
class BuyAction extends TradeAction
{
    /**
     * 'vendor' is an earlier term for 'seller'.
     */
    private $vendor;

    public function getVendor()
    {
        return $this->vendor;
    }

    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }
}

