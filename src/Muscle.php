<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A muscle is an anatomical structure consisting of a contractile form of tissue
 * that animals use to effect movement.
 */
class Muscle extends AnatomicalStructure
{
    /**
     * The place of attachment of a muscle, or what the muscle moves.
     */
    private $insertion;

    /**
     * The underlying innervation associated with the muscle.
     */
    private $nerve;

    /**
     * The movement the muscle generates.
     */
    private $muscleAction;

    /**
     * The muscle whose action counteracts the specified muscle.
     */
    private $antagonist;

    /**
     * The blood vessel that carries blood from the heart to the muscle.
     */
    private $bloodSupply;

    public function getInsertion()
    {
        return $this->insertion;
    }

    public function setInsertion($insertion)
    {
        $this->insertion = $insertion;
    }

    public function getNerve()
    {
        return $this->nerve;
    }

    public function setNerve($nerve)
    {
        $this->nerve = $nerve;
    }

    public function getMuscleAction()
    {
        return $this->muscleAction;
    }

    public function setMuscleAction($muscleAction)
    {
        $this->muscleAction = $muscleAction;
    }

    public function getAntagonist()
    {
        return $this->antagonist;
    }

    public function setAntagonist($antagonist)
    {
        $this->antagonist = $antagonist;
    }

    public function getBloodSupply()
    {
        return $this->bloodSupply;
    }

    public function setBloodSupply($bloodSupply)
    {
        $this->bloodSupply = $bloodSupply;
    }
}

