<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A type of blood vessel that specifically carries blood to the heart.
 */
class Vein extends Vessel
{
    /**
     * The anatomical or organ system that the vein flows into; a larger structure that
     * the vein connects to.
     */
    private $tributary;

    /**
     * The vasculature that the vein drains into.
     */
    private $drainsTo;

    public function getTributary()
    {
        return $this->tributary;
    }

    public function setTributary($tributary)
    {
        $this->tributary = $tributary;
    }

    public function getDrainsTo()
    {
        return $this->drainsTo;
    }

    public function setDrainsTo($drainsTo)
    {
        $this->drainsTo = $drainsTo;
    }
}

