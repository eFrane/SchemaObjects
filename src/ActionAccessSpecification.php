<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A set of requirements that a must be fulfilled in order to perform an Action.
 */
class ActionAccessSpecification extends Intangible
{
    /**
     * Indicates if use of the media require a subscription  (either paid or free).
     * Allowed values are ```true``` or ```false``` (note that an earlier version had
     * 'yes', 'no').
     */
    private $requiresSubscription;

    /**
     * An Offer which must be accepted before the user can perform the Action. For
     * example, the user may need to buy a movie before being able to watch it.
     */
    private $expectsAcceptanceOf;

    /**
     * The beginning of the availability of the product or service included in the
     * offer.
     */
    private $availabilityStarts;

    public function getRequiresSubscription()
    {
        return $this->requiresSubscription;
    }

    public function setRequiresSubscription($requiresSubscription)
    {
        $this->requiresSubscription = $requiresSubscription;
    }

    public function getExpectsAcceptanceOf()
    {
        return $this->expectsAcceptanceOf;
    }

    public function setExpectsAcceptanceOf($expectsAcceptanceOf)
    {
        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }

    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }

    public function setAvailabilityStarts($availabilityStarts)
    {
        $this->availabilityStarts = $availabilityStarts;
    }
}

