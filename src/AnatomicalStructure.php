<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any part of the human body, typically a component of an anatomical system.
 * Organs, tissues, and cells are all anatomical structures.
 */
class AnatomicalStructure extends MedicalEntity
{
    /**
     * An image containing a diagram that illustrates the structure and/or its
     * component substructures and/or connections with other structures.
     */
    private $diagram;

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     */
    private $subStructure;

    /**
     * Other anatomical structures to which this structure is connected.
     */
    private $connectedTo;

    /**
     * A medical condition associated with this anatomy.
     */
    private $relatedCondition;

    /**
     * A medical therapy related to this anatomy.
     */
    private $relatedTherapy;

    /**
     * The anatomical or organ system that this structure is part of.
     */
    private $partOfSystem;

    public function getDiagram()
    {
        return $this->diagram;
    }

    public function setDiagram($diagram)
    {
        $this->diagram = $diagram;
    }

    public function getSubStructure()
    {
        return $this->subStructure;
    }

    public function setSubStructure($subStructure)
    {
        $this->subStructure = $subStructure;
    }

    public function getConnectedTo()
    {
        return $this->connectedTo;
    }

    public function setConnectedTo($connectedTo)
    {
        $this->connectedTo = $connectedTo;
    }

    public function getRelatedCondition()
    {
        return $this->relatedCondition;
    }

    public function setRelatedCondition($relatedCondition)
    {
        $this->relatedCondition = $relatedCondition;
    }

    public function getRelatedTherapy()
    {
        return $this->relatedTherapy;
    }

    public function setRelatedTherapy($relatedTherapy)
    {
        $this->relatedTherapy = $relatedTherapy;
    }

    public function getPartOfSystem()
    {
        return $this->partOfSystem;
    }

    public function setPartOfSystem($partOfSystem)
    {
        $this->partOfSystem = $partOfSystem;
    }
}

