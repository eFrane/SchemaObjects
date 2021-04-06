<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A permission for a particular person or group to access a particular file.
 */
class DigitalDocumentPermission extends Intangible
{
    /**
     * The person, organization, contact point, or audience that has been granted this
     * permission.
     */
    private $grantee;

    /**
     * The type of permission granted the person, organization, or audience.
     */
    private $permissionType;

    public function getGrantee()
    {
        return $this->grantee;
    }

    public function setGrantee($grantee)
    {
        $this->grantee = $grantee;
    }

    public function getPermissionType()
    {
        return $this->permissionType;
    }

    public function setPermissionType($permissionType)
    {
        $this->permissionType = $permissionType;
    }
}

