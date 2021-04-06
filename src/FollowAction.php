<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of forming a personal connection with someone/something (object)
 * unidirectionally/asymmetrically to get updates polled from.
 *
 * Related actions:
 *
 * * [[BefriendAction]]: Unlike BefriendAction, FollowAction implies that the
 * connection is *not* necessarily reciprocal.
 * * [[SubscribeAction]]: Unlike SubscribeAction, FollowAction implies that the
 * follower acts as an active agent constantly/actively polling for updates.
 * * [[RegisterAction]]: Unlike RegisterAction, FollowAction implies that the agent
 * is interested in continuing receiving updates from the object.
 * * [[JoinAction]]: Unlike JoinAction, FollowAction implies that the agent is
 * interested in getting updates from the object.
 * * [[TrackAction]]: Unlike TrackAction, FollowAction refers to the polling of
 * updates of all aspects of animate objects rather than the location of inanimate
 * objects (e.g. you track a package, but you don't follow it).
 */
class FollowAction extends InteractAction
{
    /**
     * A sub property of object. The person or organization being followed.
     */
    private $followee;

    public function getFollowee()
    {
        return $this->followee;
    }

    public function setFollowee($followee)
    {
        $this->followee = $followee;
    }
}

