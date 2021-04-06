<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A scholarly article in the medical domain.
 */
class MedicalScholarlyArticle extends ScholarlyArticle
{
    /**
     * The type of the medical article, taken from the US NLM MeSH publication type
     * catalog. See also [MeSH
     * documentation](http://www.nlm.nih.gov/mesh/pubtypes.html).
     */
    private $publicationType;

    public function getPublicationType()
    {
        return $this->publicationType;
    }

    public function setPublicationType($publicationType)
    {
        $this->publicationType = $publicationType;
    }
}

