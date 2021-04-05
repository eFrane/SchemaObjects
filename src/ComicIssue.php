<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Individual comic issues are serially published as
 *     	part of a larger series. For the sake of consistency, even one-shot issues
 *     	belong to a series comprised of a single issue. All comic issues can be
 *     	uniquely identified by: the combination of the name and volume number of
 * the
 *     	series to which the issue belongs; the issue number; and the variant
 *     	description of the issue (if any).
 */
class ComicIssue extends PublicationIssue
{
    /**
     * A description of the variant cover
     *     	for the issue, if the issue is a variant printing. For example, "Bryan
     * Hitch
     *     	Variant Cover" or "2nd Printing Variant".
     */
    private $variantCover;

    /**
     * The individual who adds lettering, including speech balloons and sound effects,
     * to artwork.
     */
    private $letterer;

    public function getVariantCover()
    {
        return $this->variantCover;
    }

    public function setVariantCover($variantCover)
    {
        $this->variantCover = $variantCover;
    }

    public function getLetterer()
    {
        return $this->letterer;
    }

    public function setLetterer($letterer)
    {
        $this->letterer = $letterer;
    }
}

