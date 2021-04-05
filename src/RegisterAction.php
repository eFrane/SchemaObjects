<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of registering to be a user of a service, product or web page.
 *
 * Related actions:
 *
 * * [[JoinAction]]: Unlike JoinAction, RegisterAction implies you are registering
 * to be a user of a service, *not* a group/team of people.
 * * [FollowAction]]: Unlike FollowAction, RegisterAction doesn't imply that the
 * agent is expecting to poll for updates from the object.
 * * [[SubscribeAction]]: Unlike SubscribeAction, RegisterAction doesn't imply that
 * the agent is expecting updates from the object.
 */
class RegisterAction extends InteractAction
{
}

