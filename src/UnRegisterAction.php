<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of un-registering from a service.
 *
 * Related actions:
 *
 * * [[RegisterAction]]: antonym of UnRegisterAction.
 * * [[LeaveAction]]: Unlike LeaveAction, UnRegisterAction implies that you are
 * unregistering from a service you werer previously registered, rather than
 * leaving a team/group of people.
 */
class UnRegisterAction extends InteractAction
{
}

