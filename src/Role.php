<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Represents additional information about a relationship or property. For example
 * a Role can be used to say that a 'member' role linking some SportsTeam to a
 * player occurred during a particular time period. Or that a Person's 'actor' role
 * in a Movie was for some particular characterName. Such properties can be
 * attached to a Role entity, which is then associated with the main entities using
 * ordinary properties like 'member' or 'actor'.
 *
 * See also [blog post](http://blog.schema.org/2014/06/introducing-role.html).
 */
class Role extends Intangible
{
    /**
     * A position played, performed or filled by a person or organization, as part of
     * an organization. For example, an athlete in a SportsTeam might play in the
     * position named 'Quarterback'.
     */
    private $namedPosition;

    /**
     * A role played, performed or filled by a person or organization. For example, the
     * team of creators for a comic book might fill the roles named 'inker',
     * 'penciller', and 'letterer'; or an athlete in a SportsTeam might play in the
     * position named 'Quarterback'.
     */
    private $roleName;

    public function getNamedPosition()
    {
        return $this->namedPosition;
    }

    public function setNamedPosition($namedPosition)
    {
        $this->namedPosition = $namedPosition;
    }

    public function getRoleName()
    {
        return $this->roleName;
    }

    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    }
}

