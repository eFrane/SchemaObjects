<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of playing/exercising/training/performing for enjoyment, leisure,
 * recreation, Competition or exercise.
 *
 * Related actions:
 *
 * * [[ListenAction]]: Unlike ListenAction (which is under ConsumeAction),
 * PlayAction refers to performing for an audience or at an event, rather than
 * consuming music.
 * * [[WatchAction]]: Unlike WatchAction (which is under ConsumeAction), PlayAction
 * refers to showing/displaying for an audience or at an event, rather than
 * consuming visual content.
 */
class PlayAction extends Action
{
    /**
     * Upcoming or past event associated with this place, organization, or action.
     */
    private $event;

    public function getEvent()
    {
        return $this->event;
    }

    public function setEvent($event)
    {
        $this->event = $event;
    }
}

