<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A word, name, acronym, phrase, etc. with a formal definition. Often used in the
 * context of category or subject classification, glossaries or dictionaries,
 * product or creative work types, etc. Use the name property for the term being
 * defined, use termCode if the term has an alpha-numeric code allocated, use
 * description to provide the definition of the term.
 */
class DefinedTerm extends Intangible
{
    /**
     * A code that identifies this [[DefinedTerm]] within a [[DefinedTermSet]]
     */
    private $termCode;

    /**
     * A [[DefinedTermSet]] that contains this term.
     */
    private $inDefinedTermSet;

    public function getTermCode()
    {
        return $this->termCode;
    }

    public function setTermCode($termCode)
    {
        $this->termCode = $termCode;
    }

    public function getInDefinedTermSet()
    {
        return $this->inDefinedTermSet;
    }

    public function setInDefinedTermSet($inDefinedTermSet)
    {
        $this->inDefinedTermSet = $inDefinedTermSet;
    }
}

