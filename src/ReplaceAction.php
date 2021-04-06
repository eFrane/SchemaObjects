<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of editing a recipient by replacing an old object with a new object.
 */
class ReplaceAction extends UpdateAction
{
    /**
     * A sub property of object. The object that replaces.
     */
    private $replacer;

    /**
     * A sub property of object. The object that is being replaced.
     */
    private $replacee;

    public function getReplacer()
    {
        return $this->replacer;
    }

    public function setReplacer($replacer)
    {
        $this->replacer = $replacer;
    }

    public function getReplacee()
    {
        return $this->replacee;
    }

    public function setReplacee($replacee)
    {
        $this->replacee = $replacee;
    }
}

