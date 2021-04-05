<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of providing an object under an agreement that it will be returned at a
 * later date. Reciprocal of BorrowAction.
 *
 * Related actions:
 *
 * * [[BorrowAction]]: Reciprocal of LendAction.
 */
class LendAction extends TransferAction
{
    /**
     * A sub property of participant. The person that borrows the object being lent.
     */
    private $borrower;

    public function getBorrower()
    {
        return $this->borrower;
    }

    public function setBorrower($borrower)
    {
        $this->borrower = $borrower;
    }
}

