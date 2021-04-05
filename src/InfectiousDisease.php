<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An infectious disease is a clinically evident human disease resulting from the
 * presence of pathogenic microbial agents, like pathogenic viruses, pathogenic
 * bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered
 * an infectious disease, such pathogens are known to be able to cause this
 * disease.
 */
class InfectiousDisease extends MedicalCondition
{
    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
     */
    private $infectiousAgentClass;

    /**
     * The actual infectious agent, such as a specific bacterium.
     */
    private $infectiousAgent;

    /**
     * How the disease spreads, either as a route or vector, for example 'direct
     * contact', 'Aedes aegypti', etc.
     */
    private $transmissionMethod;

    public function getInfectiousAgentClass()
    {
        return $this->infectiousAgentClass;
    }

    public function setInfectiousAgentClass($infectiousAgentClass)
    {
        $this->infectiousAgentClass = $infectiousAgentClass;
    }

    public function getInfectiousAgent()
    {
        return $this->infectiousAgent;
    }

    public function setInfectiousAgent($infectiousAgent)
    {
        $this->infectiousAgent = $infectiousAgent;
    }

    public function getTransmissionMethod()
    {
        return $this->transmissionMethod;
    }

    public function setTransmissionMethod($transmissionMethod)
    {
        $this->transmissionMethod = $transmissionMethod;
    }
}

