<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of planning the execution of an event/task/action/reservation/plan to a
 * future date.
 */
class PlanAction extends OrganizeAction
{
    /**
     * The time the object is scheduled to.
     */
    private $scheduledTime;

    public function getScheduledTime()
    {
        return $this->scheduledTime;
    }

    public function setScheduledTime($scheduledTime)
    {
        $this->scheduledTime = $scheduledTime;
    }
}

