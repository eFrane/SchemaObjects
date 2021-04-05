<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An agent leaves an event / group with participants/friends at a location.
 *
 * Related actions:
 *
 * * [[JoinAction]]: The antonym of LeaveAction.
 * * [[UnRegisterAction]]: Unlike UnRegisterAction, LeaveAction implies leaving a
 * group/team of people rather than a service.
 */
class LeaveAction extends InteractAction
{
}

