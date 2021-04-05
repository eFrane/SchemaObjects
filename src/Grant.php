<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A grant, typically financial or otherwise quantifiable, of resources. Typically
 * a [[funder]] sponsors some [[MonetaryAmount]] to an [[Organization]] or
 * [[Person]],
 *     sometimes not necessarily via a dedicated or long-lived [[Project]],
 * resulting in one or more outputs, or [[fundedItem]]s. For financial sponsorship,
 * indicate the [[funder]] of a [[MonetaryGrant]]. For non-financial support,
 * indicate [[sponsor]] of [[Grant]]s of resources (e.g. office space).
 *
 * Grants support  activities directed towards some agreed collective goals, often
 * but not always organized as [[Project]]s. Long-lived projects are sometimes
 * sponsored by a variety of grants over time, but it is also common for a project
 * to be associated with a single grant.
 *
 * The amount of a [[Grant]] is represented using [[amount]] as a
 * [[MonetaryAmount]].
 */
class Grant extends Intangible
{
    /**
     * Indicates an item funded or sponsored through a [[Grant]].
     */
    private $fundedItem;

    public function getFundedItem()
    {
        return $this->fundedItem;
    }

    public function setFundedItem($fundedItem)
    {
        $this->fundedItem = $fundedItem;
    }
}

