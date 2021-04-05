<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Used to describe membership in a loyalty programs (e.g. "StarAliance"), traveler
 * clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
 */
class ProgramMembership extends Intangible
{
    /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     */
    private $hostingOrganization;

    /**
     * A member of this organization.
     */
    private $members;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members
     * of organizations; ProgramMembership is typically for individuals.
     */
    private $member;

    /**
     * The program providing the membership.
     */
    private $programName;

    /**
     * The number of membership points earned by the member. If necessary, the unitText
     * can be used to express the units the points are issued in. (e.g. stars, miles,
     * etc.)
     */
    private $membershipPointsEarned;

    /**
     * A unique identifier for the membership.
     */
    private $membershipNumber;

    public function getHostingOrganization()
    {
        return $this->hostingOrganization;
    }

    public function setHostingOrganization($hostingOrganization)
    {
        $this->hostingOrganization = $hostingOrganization;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function setMembers($members)
    {
        $this->members = $members;
    }

    public function getMember()
    {
        return $this->member;
    }

    public function setMember($member)
    {
        $this->member = $member;
    }

    public function getProgramName()
    {
        return $this->programName;
    }

    public function setProgramName($programName)
    {
        $this->programName = $programName;
    }

    public function getMembershipPointsEarned()
    {
        return $this->membershipPointsEarned;
    }

    public function setMembershipPointsEarned($membershipPointsEarned)
    {
        $this->membershipPointsEarned = $membershipPointsEarned;
    }

    public function getMembershipNumber()
    {
        return $this->membershipNumber;
    }

    public function setMembershipNumber($membershipNumber)
    {
        $this->membershipNumber = $membershipNumber;
    }
}

