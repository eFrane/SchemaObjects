<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An agent tracks an object for updates.
 *
 * Related actions:
 *
 * * [[FollowAction]]: Unlike FollowAction, TrackAction refers to the interest on
 * the location of innanimates objects.
 * * [[SubscribeAction]]: Unlike SubscribeAction, TrackAction refers to  the
 * interest on the location of innanimate objects.
 */
class TrackAction extends FindAction
{
}

