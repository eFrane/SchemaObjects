<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of an agent communicating (service provider, social media, etc) their
 * departure of a previously reserved service (e.g. flight check in) or place (e.g.
 * hotel).
 *
 * Related actions:
 *
 * * [[CheckInAction]]: The antonym of CheckOutAction.
 * * [[DepartAction]]: Unlike DepartAction, CheckOutAction implies that the agent
 * is informing/confirming the end of a previously reserved service.
 * * [[CancelAction]]: Unlike CancelAction, CheckOutAction implies that the agent
 * is informing/confirming the end of a previously reserved service.
 */
class CheckOutAction extends CommunicateAction
{
}

