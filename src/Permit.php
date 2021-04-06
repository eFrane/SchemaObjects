<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A permit issued by an organization, e.g. a parking pass.
 */
class Permit extends Intangible
{
    /**
     * The date when the item is no longer valid.
     */
    private $validUntil;

    /**
     * The service through with the permit was granted.
     */
    private $issuedThrough;

    /**
     * The duration of validity of a permit or similar thing.
     */
    private $validFor;

    /**
     * The geographic area where a permit or similar thing is valid.
     */
    private $validIn;

    /**
     * The target audience for this permit.
     */
    private $permitAudience;

    public function getValidUntil()
    {
        return $this->validUntil;
    }

    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
    }

    public function getIssuedThrough()
    {
        return $this->issuedThrough;
    }

    public function setIssuedThrough($issuedThrough)
    {
        $this->issuedThrough = $issuedThrough;
    }

    public function getValidFor()
    {
        return $this->validFor;
    }

    public function setValidFor($validFor)
    {
        $this->validFor = $validFor;
    }

    public function getValidIn()
    {
        return $this->validIn;
    }

    public function setValidIn($validIn)
    {
        $this->validIn = $validIn;
    }

    public function getPermitAudience()
    {
        return $this->permitAudience;
    }

    public function setPermitAudience($permitAudience)
    {
        $this->permitAudience = $permitAudience;
    }
}

