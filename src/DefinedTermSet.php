<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A set of defined terms for example a set of categories or a classification
 * scheme, a glossary, dictionary or enumeration.
 */
class DefinedTermSet extends CreativeWork
{
    /**
     * A Defined Term contained in this term set.
     */
    private $hasDefinedTerm;

    public function getHasDefinedTerm()
    {
        return $this->hasDefinedTerm;
    }

    public function setHasDefinedTerm($hasDefinedTerm)
    {
        $this->hasDefinedTerm = $hasDefinedTerm;
    }
}

