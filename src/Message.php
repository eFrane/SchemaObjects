<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A single message from a sender to one or more organizations or people.
 */
class Message extends CreativeWork
{
    /**
     * A sub property of recipient. The recipient blind copied on a message.
     */
    private $bccRecipient;

    /**
     * A sub property of recipient. The recipient copied on a message.
     */
    private $ccRecipient;

    /**
     * A sub property of recipient. The recipient who was directly sent the message.
     */
    private $toRecipient;

    /**
     * The date/time at which the message was sent.
     */
    private $dateSent;

    /**
     * A CreativeWork attached to the message.
     */
    private $messageAttachment;

    /**
     * The date/time the message was received if a single recipient exists.
     */
    private $dateReceived;

    /**
     * The date/time at which the message has been read by the recipient if a single
     * recipient exists.
     */
    private $dateRead;

    public function getBccRecipient()
    {
        return $this->bccRecipient;
    }

    public function setBccRecipient($bccRecipient)
    {
        $this->bccRecipient = $bccRecipient;
    }

    public function getCcRecipient()
    {
        return $this->ccRecipient;
    }

    public function setCcRecipient($ccRecipient)
    {
        $this->ccRecipient = $ccRecipient;
    }

    public function getToRecipient()
    {
        return $this->toRecipient;
    }

    public function setToRecipient($toRecipient)
    {
        $this->toRecipient = $toRecipient;
    }

    public function getDateSent()
    {
        return $this->dateSent;
    }

    public function setDateSent($dateSent)
    {
        $this->dateSent = $dateSent;
    }

    public function getMessageAttachment()
    {
        return $this->messageAttachment;
    }

    public function setMessageAttachment($messageAttachment)
    {
        $this->messageAttachment = $messageAttachment;
    }

    public function getDateReceived()
    {
        return $this->dateReceived;
    }

    public function setDateReceived($dateReceived)
    {
        $this->dateReceived = $dateReceived;
    }

    public function getDateRead()
    {
        return $this->dateRead;
    }

    public function setDateRead($dateRead)
    {
        $this->dateRead = $dateRead;
    }
}

