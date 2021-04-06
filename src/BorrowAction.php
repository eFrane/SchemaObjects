<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of obtaining an object under an agreement to return it at a later date.
 * Reciprocal of LendAction.
 *
 * Related actions:
 *
 * * [[LendAction]]: Reciprocal of BorrowAction.
 */
class BorrowAction extends TransferAction
{
    /**
     * A sub property of participant. The person that lends the object being borrowed.
     */
    private $lender;

    public function getLender()
    {
        return $this->lender;
    }

    public function setLender($lender)
    {
        $this->lender = $lender;
    }
}

