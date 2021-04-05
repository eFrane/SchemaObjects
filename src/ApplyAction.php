<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of registering to an organization/service without the guarantee to
 * receive it.
 *
 * Related actions:
 *
 * * [[RegisterAction]]: Unlike RegisterAction, ApplyAction has no guarantees that
 * the application will be accepted.
 */
class ApplyAction extends OrganizeAction
{
}

