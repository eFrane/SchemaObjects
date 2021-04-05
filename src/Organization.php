<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An organization such as a school, NGO, corporation, club, etc.
 */
class Organization extends Thing
{
    /**
     * The geographic area where the service is provided.
     */
    private $serviceArea;

    /**
     * Indicates a MerchantReturnPolicy that may be applicable.
     */
    private $hasMerchantReturnPolicy;

    /**
     * The location of, for example, where an event is happening, where an organization
     * is located, or where an action takes place.
     */
    private $location;

    /**
     * A relationship between an organization and a department of that organization,
     * also described as an organization (allowing different urls, logos, opening
     * hours). For example: a store with a pharmacy, or a bakery with a cafe.
     */
    private $department;

    /**
     * A credential awarded to the Person or Organization.
     */
    private $hasCredential;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]),
     * a description of organizational ownership structure; funding and grants. In a
     * news/media setting, this is with particular reference to editorial independence.
     *   Note that the [[funder]] is also available and can be used to make basic
     * funder information machine-readable.
     */
    private $ownershipFundingInfo;

    /**
     * Products owned by the organization or person.
     */
    private $owns;

    /**
     * An organization identifier that uniquely identifies a legal entity as defined in
     * ISO 17442.
     */
    private $leiCode;

    /**
     * People working for this organization.
     */
    private $employees;

    /**
     * Someone working for this organization.
     */
    private $employee;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the
     * CIF/NIF in Spain.
     */
    private $taxID;

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
     * statement about public engagement activities (for news media, the newsroom’s),
     * including involving the public - digitally or otherwise -- in coverage
     * decisions, reporting and activities after publication.
     */
    private $actionableFeedbackPolicy;

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
     * referred to as International Location Number or ILN) of the respective
     * organization, person, or place. The GLN is a 13-digit number used to identify
     * parties and physical locations.
     */
    private $globalLocationNumber;

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a
     * [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement
     * describing the newsroom’s diversity policy on both staffing and sources,
     * typically providing staffing data.
     */
    private $diversityPolicy;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic
     * that is known about - suggesting possible expertise but not implying it. We do
     * not distinguish skill levels here, or relate this to educational content,
     * events, objectives or [[JobPosting]] descriptions.
     */
    private $knowsAbout;

    /**
     * Points-of-Sales operated by the organization or person.
     */
    private $hasPOS;

    /**
     * The fax number.
     */
    private $faxNumber;

    /**
     * The official name of the organization, e.g. the registered company name.
     */
    private $legalName;

    /**
     * nonprofit Status indicates the legal status of a non-profit organization in its
     * primary place of business.
     */
    private $nonprofitStatus;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known
     * language. We do not distinguish skill levels or reading/writing/speaking/signing
     * here. Use language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47).
     */
    private $knowsLanguage;

    /**
     * A person who founded this organization.
     */
    private $founders;

    /**
     * A person who founded this organization.
     */
    private $founder;

    /**
     * The place where the Organization was founded.
     */
    private $foundingLocation;

    /**
     * Awards won by or for this item.
     */
    private $awards;

    /**
     * The larger organization that this organization is a [[subOrganization]] of, if
     * any.
     */
    private $parentOrganization;

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization, business
     * person, or place.
     */
    private $isicV4;

    /**
     * The date that this organization was founded.
     */
    private $foundingDate;

    /**
     * The date that this organization was dissolved.
     */
    private $dissolutionDate;

    /**
     * A contact point for a person or organization.
     */
    private $contactPoints;

    /**
     * A relationship between two organizations where the first includes the second,
     * e.g., as a subsidiary. See also: the more specific 'department' property.
     */
    private $subOrganization;

    /**
     * A pointer to products or services offered by the organization or person.
     */
    private $makesOffer;

    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    public function setServiceArea($serviceArea)
    {
        $this->serviceArea = $serviceArea;
    }

    public function getHasMerchantReturnPolicy()
    {
        return $this->hasMerchantReturnPolicy;
    }

    public function setHasMerchantReturnPolicy($hasMerchantReturnPolicy)
    {
        $this->hasMerchantReturnPolicy = $hasMerchantReturnPolicy;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getHasCredential()
    {
        return $this->hasCredential;
    }

    public function setHasCredential($hasCredential)
    {
        $this->hasCredential = $hasCredential;
    }

    public function getOwnershipFundingInfo()
    {
        return $this->ownershipFundingInfo;
    }

    public function setOwnershipFundingInfo($ownershipFundingInfo)
    {
        $this->ownershipFundingInfo = $ownershipFundingInfo;
    }

    public function getOwns()
    {
        return $this->owns;
    }

    public function setOwns($owns)
    {
        $this->owns = $owns;
    }

    public function getLeiCode()
    {
        return $this->leiCode;
    }

    public function setLeiCode($leiCode)
    {
        $this->leiCode = $leiCode;
    }

    public function getEmployees()
    {
        return $this->employees;
    }

    public function setEmployees($employees)
    {
        $this->employees = $employees;
    }

    public function getEmployee()
    {
        return $this->employee;
    }

    public function setEmployee($employee)
    {
        $this->employee = $employee;
    }

    public function getTaxID()
    {
        return $this->taxID;
    }

    public function setTaxID($taxID)
    {
        $this->taxID = $taxID;
    }

    public function getActionableFeedbackPolicy()
    {
        return $this->actionableFeedbackPolicy;
    }

    public function setActionableFeedbackPolicy($actionableFeedbackPolicy)
    {
        $this->actionableFeedbackPolicy = $actionableFeedbackPolicy;
    }

    public function getGlobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    public function setGlobalLocationNumber($globalLocationNumber)
    {
        $this->globalLocationNumber = $globalLocationNumber;
    }

    public function getDiversityPolicy()
    {
        return $this->diversityPolicy;
    }

    public function setDiversityPolicy($diversityPolicy)
    {
        $this->diversityPolicy = $diversityPolicy;
    }

    public function getKnowsAbout()
    {
        return $this->knowsAbout;
    }

    public function setKnowsAbout($knowsAbout)
    {
        $this->knowsAbout = $knowsAbout;
    }

    public function getHasPOS()
    {
        return $this->hasPOS;
    }

    public function setHasPOS($hasPOS)
    {
        $this->hasPOS = $hasPOS;
    }

    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
    }

    public function getLegalName()
    {
        return $this->legalName;
    }

    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
    }

    public function getNonprofitStatus()
    {
        return $this->nonprofitStatus;
    }

    public function setNonprofitStatus($nonprofitStatus)
    {
        $this->nonprofitStatus = $nonprofitStatus;
    }

    public function getKnowsLanguage()
    {
        return $this->knowsLanguage;
    }

    public function setKnowsLanguage($knowsLanguage)
    {
        $this->knowsLanguage = $knowsLanguage;
    }

    public function getFounders()
    {
        return $this->founders;
    }

    public function setFounders($founders)
    {
        $this->founders = $founders;
    }

    public function getFounder()
    {
        return $this->founder;
    }

    public function setFounder($founder)
    {
        $this->founder = $founder;
    }

    public function getFoundingLocation()
    {
        return $this->foundingLocation;
    }

    public function setFoundingLocation($foundingLocation)
    {
        $this->foundingLocation = $foundingLocation;
    }

    public function getAwards()
    {
        return $this->awards;
    }

    public function setAwards($awards)
    {
        $this->awards = $awards;
    }

    public function getParentOrganization()
    {
        return $this->parentOrganization;
    }

    public function setParentOrganization($parentOrganization)
    {
        $this->parentOrganization = $parentOrganization;
    }

    public function getIsicV4()
    {
        return $this->isicV4;
    }

    public function setIsicV4($isicV4)
    {
        $this->isicV4 = $isicV4;
    }

    public function getFoundingDate()
    {
        return $this->foundingDate;
    }

    public function setFoundingDate($foundingDate)
    {
        $this->foundingDate = $foundingDate;
    }

    public function getDissolutionDate()
    {
        return $this->dissolutionDate;
    }

    public function setDissolutionDate($dissolutionDate)
    {
        $this->dissolutionDate = $dissolutionDate;
    }

    public function getContactPoints()
    {
        return $this->contactPoints;
    }

    public function setContactPoints($contactPoints)
    {
        $this->contactPoints = $contactPoints;
    }

    public function getSubOrganization()
    {
        return $this->subOrganization;
    }

    public function setSubOrganization($subOrganization)
    {
        $this->subOrganization = $subOrganization;
    }

    public function getMakesOffer()
    {
        return $this->makesOffer;
    }

    public function setMakesOffer($makesOffer)
    {
        $this->makesOffer = $makesOffer;
    }
}

