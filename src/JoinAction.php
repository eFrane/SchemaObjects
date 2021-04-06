<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An agent joins an event/group with participants/friends at a location.
 *
 * Related actions:
 *
 * * [[RegisterAction]]: Unlike RegisterAction, JoinAction refers to joining a
 * group/team of people.
 * * [[SubscribeAction]]: Unlike SubscribeAction, JoinAction does not imply that
 * you'll be receiving updates.
 * * [[FollowAction]]: Unlike FollowAction, JoinAction does not imply that you'll
 * be polling for updates.
 */
class JoinAction extends InteractAction
{
}

