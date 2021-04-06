<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Organization: Sports team.
 */
class SportsTeam extends SportsOrganization
{
    /**
     * A person that acts as performing member of a sports team; a player as opposed to
     * a coach.
     */
    private $athlete;

    /**
     * Gender of something, typically a [[Person]], but possibly also fictional
     * characters, animals, etc. While https://schema.org/Male and
     * https://schema.org/Female may be used, text strings are also acceptable for
     * people who do not identify as a binary gender. The [[gender]] property can also
     * be used in an extended sense to cover e.g. the gender of sports teams. As with
     * the gender of individuals, we do not try to enumerate all possibilities. A
     * mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
     */
    private $gender;

    /**
     * A person that acts in a coaching role for a sports team.
     */
    private $coach;

    public function getAthlete()
    {
        return $this->athlete;
    }

    public function setAthlete($athlete)
    {
        $this->athlete = $athlete;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getCoach()
    {
        return $this->coach;
    }

    public function setCoach($coach)
    {
        $this->coach = $coach;
    }
}

