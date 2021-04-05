<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Reserving a concrete object.
 *
 * Related actions:
 *
 * * [[ScheduleAction]]: Unlike ScheduleAction, ReserveAction reserves concrete
 * objects (e.g. a table, a hotel) towards a time slot / spatial allocation.
 */
class ReserveAction extends PlanAction
{
}

