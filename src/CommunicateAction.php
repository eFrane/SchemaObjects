<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of conveying information to another person via a communication medium
 * (instrument) such as speech, email, or telephone conversation.
 */
class CommunicateAction extends InteractAction
{
    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     */
    private $recipient;

    public function getRecipient()
    {
        return $this->recipient;
    }

    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
    }
}

