<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A Role that represents a Web link e.g. as expressed via the 'url' property. Its
 * linkRelationship property can indicate URL-based and plain textual link types
 * e.g. those in IANA link registry or others such as 'amphtml'. This structure
 * provides a placeholder where details from HTML's link element can be represented
 * outside of HTML, e.g. in JSON-LD feeds.
 */
class LinkRole extends Role
{
    /**
     * Indicates the relationship type of a Web link.
     */
    private $linkRelationship;

    public function getLinkRelationship()
    {
        return $this->linkRelationship;
    }

    public function setLinkRelationship($linkRelationship)
    {
        $this->linkRelationship = $linkRelationship;
    }
}

