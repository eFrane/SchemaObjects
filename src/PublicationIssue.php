<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A part of a successively published publication such as a periodical or
 * publication volume, often numbered, usually containing a grouping of works such
 * as articles.
 *
 * See also [blog
 * post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 */
class PublicationIssue extends CreativeWork
{
    /**
     * Identifies the issue of publication; for example, "iii" or "2".
     */
    private $issueNumber;

    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    public function setIssueNumber($issueNumber)
    {
        $this->issueNumber = $issueNumber;
    }
}

