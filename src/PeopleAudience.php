<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A set of characteristics belonging to people, e.g. who compose an item's target
 * audience.
 */
class PeopleAudience extends Audience
{
    /**
     * Minimum recommended age in years for the audience or user.
     */
    private $suggestedMinAge;

    /**
     * The suggested gender of the intended person or audience, for example "male",
     * "female", or "unisex".
     */
    private $suggestedGender;

    /**
     * Audiences defined by a person's maximum age.
     */
    private $requiredMaxAge;

    /**
     * Maximum recommended age in years for the audience or user.
     */
    private $suggestedMaxAge;

    /**
     * Audiences defined by a person's gender.
     */
    private $requiredGender;

    /**
     * Audiences defined by a person's minimum age.
     */
    private $requiredMinAge;

    public function getSuggestedMinAge()
    {
        return $this->suggestedMinAge;
    }

    public function setSuggestedMinAge($suggestedMinAge)
    {
        $this->suggestedMinAge = $suggestedMinAge;
    }

    public function getSuggestedGender()
    {
        return $this->suggestedGender;
    }

    public function setSuggestedGender($suggestedGender)
    {
        $this->suggestedGender = $suggestedGender;
    }

    public function getRequiredMaxAge()
    {
        return $this->requiredMaxAge;
    }

    public function setRequiredMaxAge($requiredMaxAge)
    {
        $this->requiredMaxAge = $requiredMaxAge;
    }

    public function getSuggestedMaxAge()
    {
        return $this->suggestedMaxAge;
    }

    public function setSuggestedMaxAge($suggestedMaxAge)
    {
        $this->suggestedMaxAge = $suggestedMaxAge;
    }

    public function getRequiredGender()
    {
        return $this->requiredGender;
    }

    public function setRequiredGender($requiredGender)
    {
        $this->requiredGender = $requiredGender;
    }

    public function getRequiredMinAge()
    {
        return $this->requiredMinAge;
    }

    public function setRequiredMinAge($requiredMinAge)
    {
        $this->requiredMinAge = $requiredMinAge;
    }
}

