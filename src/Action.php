<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An action performed by a direct agent and indirect participants upon a direct
 * object. Optionally happens at a location with the help of an inanimate
 * instrument. The execution of the action may produce a result. Specific action
 * sub-type documentation specifies the exact expectation of each argument/role.
 *
 * See also [blog
 * post](http://blog.schema.org/2014/04/announcing-schemaorg-actions.html) and
 * [Actions overview document](https://schema.org/docs/actions.html).
 */
class Action extends Thing
{
    /**
     * The object upon which the action is carried out, whose state is kept intact or
     * changed. Also known as the semantic roles patient, affected or undergoer (which
     * change their state) or theme (which doesn't). e.g. John read *a book*.
     */
    private $object;

    /**
     * Other co-agents that participated in the action indirectly. e.g. John wrote a
     * book with *Steve*.
     */
    private $participant;

    /**
     * The object that helped the agent perform the action. e.g. John wrote a book with
     * *a pen*.
     */
    private $instrument;

    /**
     * Indicates the current disposition of the Action.
     */
    private $actionStatus;

    /**
     * Indicates a target EntryPoint for an Action.
     */
    private $target;

    /**
     * The result produced in the action. e.g. John wrote *a book*.
     */
    private $result;

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g. *John*
     * wrote a book.
     */
    private $agent;

    /**
     * For failed actions, more information on the cause of the failure.
     */
    private $error;

    public function getObject()
    {
        return $this->object;
    }

    public function setObject($object)
    {
        $this->object = $object;
    }

    public function getParticipant()
    {
        return $this->participant;
    }

    public function setParticipant($participant)
    {
        $this->participant = $participant;
    }

    public function getInstrument()
    {
        return $this->instrument;
    }

    public function setInstrument($instrument)
    {
        $this->instrument = $instrument;
    }

    public function getActionStatus()
    {
        return $this->actionStatus;
    }

    public function setActionStatus($actionStatus)
    {
        $this->actionStatus = $actionStatus;
    }

    public function getTarget()
    {
        return $this->target;
    }

    public function setTarget($target)
    {
        $this->target = $target;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($result)
    {
        $this->result = $result;
    }

    public function getAgent()
    {
        return $this->agent;
    }

    public function setAgent($agent)
    {
        $this->agent = $agent;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;
    }
}

