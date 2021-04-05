<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of notifying someone that a future event/action is going to happen as
 * expected.
 *
 * Related actions:
 *
 * * [[CancelAction]]: The antonym of ConfirmAction.
 */
class ConfirmAction extends InformAction
{
}

