<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A summary of how users have interacted with this CreativeWork. In most cases,
 * authors will use a subtype to specify the specific type of interaction.
 */
class InteractionCounter extends StructuredValue
{
    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication.
     */
    private $userInteractionCount;

    /**
     * The WebSite or SoftwareApplication where the interactions took place.
     */
    private $interactionService;

    /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use
     * [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use the most
     * specific Action.
     */
    private $interactionType;

    public function getUserInteractionCount()
    {
        return $this->userInteractionCount;
    }

    public function setUserInteractionCount($userInteractionCount)
    {
        $this->userInteractionCount = $userInteractionCount;
    }

    public function getInteractionService()
    {
        return $this->interactionService;
    }

    public function setInteractionService($interactionService)
    {
        $this->interactionService = $interactionService;
    }

    public function getInteractionType()
    {
        return $this->interactionType;
    }

    public function setInteractionType($interactionType)
    {
        $this->interactionType = $interactionType;
    }
}

