<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of physically/electronically taking delivery of an object that has been
 * transferred from an origin to a destination. Reciprocal of SendAction.
 *
 * Related actions:
 *
 * * [[SendAction]]: The reciprocal of ReceiveAction.
 * * [[TakeAction]]: Unlike TakeAction, ReceiveAction does not imply that the
 * ownership has been transfered (e.g. I can receive a package, but it does not
 * mean the package is now mine).
 */
class ReceiveAction extends TransferAction
{
    /**
     * A sub property of participant. The participant who is at the sending end of the
     * action.
     */
    private $sender;

    public function getSender()
    {
        return $this->sender;
    }

    public function setSender($sender)
    {
        $this->sender = $sender;
    }
}

