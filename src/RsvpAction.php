<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of notifying an event organizer as to whether you expect to attend the
 * event.
 */
class RsvpAction extends InformAction
{
    /**
     * The response (yes, no, maybe) to the RSVP.
     */
    private $rsvpResponse;

    /**
     * If responding yes, the number of guests who will attend in addition to the
     * invitee.
     */
    private $additionalNumberOfGuests;

    public function getRsvpResponse()
    {
        return $this->rsvpResponse;
    }

    public function setRsvpResponse($rsvpResponse)
    {
        $this->rsvpResponse = $rsvpResponse;
    }

    public function getAdditionalNumberOfGuests()
    {
        return $this->additionalNumberOfGuests;
    }

    public function setAdditionalNumberOfGuests($additionalNumberOfGuests)
    {
        $this->additionalNumberOfGuests = $additionalNumberOfGuests;
    }
}

