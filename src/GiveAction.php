<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of transferring ownership of an object to a destination. Reciprocal of
 * TakeAction.
 *
 * Related actions:
 *
 * * [[TakeAction]]: Reciprocal of GiveAction.
 * * [[SendAction]]: Unlike SendAction, GiveAction implies that ownership is being
 * transferred (e.g. I may send my laptop to you, but that doesn't mean I'm giving
 * it to you).
 */
class GiveAction extends TransferAction
{
}

