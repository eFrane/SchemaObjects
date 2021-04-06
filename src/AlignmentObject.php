<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An intangible item that describes an alignment between a learning resource and a
 * node in an educational framework.
 *
 * Should not be used where the nature of the alignment can be described using a
 * simple property, for example to express that a resource [[teaches]] or
 * [[assesses]] a competency.
 */
class AlignmentObject extends Intangible
{
    /**
     * The name of a node in an established educational framework.
     */
    private $targetName;

    /**
     * The URL of a node in an established educational framework.
     */
    private $targetUrl;

    /**
     * A category of alignment between the learning resource and the framework node.
     * Recommended values include: 'requires', 'textComplexity', 'readingLevel', and
     * 'educationalSubject'.
     */
    private $alignmentType;

    /**
     * The description of a node in an established educational framework.
     */
    private $targetDescription;

    /**
     * The framework to which the resource being described is aligned.
     */
    private $educationalFramework;

    public function getTargetName()
    {
        return $this->targetName;
    }

    public function setTargetName($targetName)
    {
        $this->targetName = $targetName;
    }

    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = $targetUrl;
    }

    public function getAlignmentType()
    {
        return $this->alignmentType;
    }

    public function setAlignmentType($alignmentType)
    {
        $this->alignmentType = $alignmentType;
    }

    public function getTargetDescription()
    {
        return $this->targetDescription;
    }

    public function setTargetDescription($targetDescription)
    {
        $this->targetDescription = $targetDescription;
    }

    public function getEducationalFramework()
    {
        return $this->educationalFramework;
    }

    public function setEducationalFramework($educationalFramework)
    {
        $this->educationalFramework = $educationalFramework;
    }
}

