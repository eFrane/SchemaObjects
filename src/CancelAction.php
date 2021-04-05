<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of asserting that a future event/action is no longer going to happen.
 *
 * Related actions:
 *
 * * [[ConfirmAction]]: The antonym of CancelAction.
 */
class CancelAction extends PlanAction
{
}

