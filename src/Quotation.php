<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A quotation. Often but not necessarily from some written work, attributable to a
 * real world author and - if associated with a fictional character - to any
 * fictional Person. Use [[isBasedOn]] to link to source/origin. The [[recordedIn]]
 * property can be used to reference a Quotation from an [[Event]].
 */
class Quotation extends CreativeWork
{
    /**
     * The (e.g. fictional) character, Person or Organization to whom the quotation is
     * attributed within the containing CreativeWork.
     */
    private $spokenByCharacter;

    public function getSpokenByCharacter()
    {
        return $this->spokenByCharacter;
    }

    public function setSpokenByCharacter($spokenByCharacter)
    {
        $this->spokenByCharacter = $spokenByCharacter;
    }
}

