<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The most generic type of item.
 */
class Thing extends Type
{
    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     */
    private $image;

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated
     * properties for representing many of these, either as textual strings or as URL
     * (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more
     * details.
     */
    private $identifier;

    /**
     * URL of the item.
     */
    private $url;

    /**
     * Indicates a potential Action, which describes an idealized action in which this
     * thing would play an 'object' role.
     */
    private $potentialAction;

    /**
     * An additional type for the item, typically used for adding more specific types
     * from external vocabularies in microdata syntax. This is a relationship between
     * something and a class that the thing is in. In RDFa syntax, it is better to use
     * the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org
     * tools may have only weaker understanding of extra types, in particular those
     * defined externally.
     */
    private $additionalType;

    /**
     * The name of the item.
     */
    private $name;

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties (in
     * particular, name) may be necessary for the description to be useful for
     * disambiguation.
     */
    private $disambiguatingDescription;

    /**
     * A description of the item.
     */
    private $description;

    /**
     * An alias for the item.
     */
    private $alternateName;

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity.
     * E.g. the URL of the item's Wikipedia page, Wikidata entry, or official website.
     */
    private $sameAs;

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity
     * being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     */
    private $mainEntityOfPage;

    /**
     * A CreativeWork or Event about this Thing.
     */
    private $subjectOf;

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getPotentialAction()
    {
        return $this->potentialAction;
    }

    public function setPotentialAction($potentialAction)
    {
        $this->potentialAction = $potentialAction;
    }

    public function getAdditionalType()
    {
        return $this->additionalType;
    }

    public function setAdditionalType($additionalType)
    {
        $this->additionalType = $additionalType;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDisambiguatingDescription()
    {
        return $this->disambiguatingDescription;
    }

    public function setDisambiguatingDescription($disambiguatingDescription)
    {
        $this->disambiguatingDescription = $disambiguatingDescription;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getAlternateName()
    {
        return $this->alternateName;
    }

    public function setAlternateName($alternateName)
    {
        $this->alternateName = $alternateName;
    }

    public function getSameAs()
    {
        return $this->sameAs;
    }

    public function setSameAs($sameAs)
    {
        $this->sameAs = $sameAs;
    }

    public function getMainEntityOfPage()
    {
        return $this->mainEntityOfPage;
    }

    public function setMainEntityOfPage($mainEntityOfPage)
    {
        $this->mainEntityOfPage = $mainEntityOfPage;
    }

    public function getSubjectOf()
    {
        return $this->subjectOf;
    }

    public function setSubjectOf($subjectOf)
    {
        $this->subjectOf = $subjectOf;
    }
}

