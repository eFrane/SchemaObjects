<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An organization with archival holdings. An organization which keeps and
 * preserves archival material and typically makes it accessible to the public.
 */
class ArchiveOrganization extends LocalBusiness
{
    /**
     * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept or
     * maintained by an [[ArchiveOrganization]].
     */
    private $archiveHeld;

    public function getArchiveHeld()
    {
        return $this->archiveHeld;
    }

    public function setArchiveHeld($archiveHeld)
    {
        $this->archiveHeld = $archiveHeld;
    }
}

