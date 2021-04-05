<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A person (alive, dead, undead, or fictional).
 */
class Person extends Thing
{
    /**
     * A pointer to products or services sought by the organization or person (demand).
     */
    private $seeks;

    /**
     * The telephone number.
     */
    private $telephone;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     */
    private $hasOfferCatalog;

    /**
     * The Value-added Tax ID of the organization or person.
     */
    private $vatID;

    /**
     * The most generic bi-directional social/work relation.
     */
    private $knows;

    /**
     * A contact location for a person's residence.
     */
    private $homeLocation;

    /**
     * The Person's occupation. For past professions, use Role for expressing dates.
     */
    private $hasOccupation;

    /**
     * Given name. In the U.S., the first name of a Person.
     */
    private $givenName;

    /**
     * A sibling of the person.
     */
    private $siblings;

    /**
     * A sibling of the person.
     */
    private $sibling;

    /**
     * A contact location for a person's place of work.
     */
    private $workLocation;

    /**
     * An additional name for a Person, can be used for a middle name.
     */
    private $additionalName;

    /**
     * Email address.
     */
    private $email;

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     */
    private $honorificPrefix;

    /**
     * The North American Industry Classification System (NAICS) code for a particular
     * organization or business person.
     */
    private $naics;

    /**
     * The person's spouse.
     */
    private $spouse;

    /**
     * Organizations that the person works for.
     */
    private $worksFor;

    /**
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     */
    private $affiliation;

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization
     * belongs.
     */
    private $memberOf;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business
     * person.
     */
    private $duns;

    /**
     * The weight of the product or person.
     */
    private $weight;

    /**
     * The total financial value of the person as calculated by subtracting assets from
     * liabilities.
     */
    private $netWorth;

    /**
     * Family name. In the U.S., the last name of a Person.
     */
    private $familyName;

    /**
     * The place where the person died.
     */
    private $deathPlace;

    /**
     * The job title of the person (for example, Financial Manager).
     */
    private $jobTitle;

    /**
     * The place where the person was born.
     */
    private $birthPlace;

    /**
     * Nationality of the person.
     */
    private $nationality;

    /**
     * A parents of the person.
     */
    private $parents;

    /**
     * A parent of this person.
     */
    private $parent;

    /**
     * Event that this person is a performer or participant in.
     */
    private $performerIn;

    /**
     * An award won by or for this item.
     */
    private $award;

    /**
     * Date of birth.
     */
    private $birthDate;

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter should
     * be used.
     */
    private $interactionStatistic;

    /**
     * The most generic uni-directional social relation.
     */
    private $follows;

    /**
     * An honorific suffix following a Person's name such as M.D. /PhD/MSCSW.
     */
    private $honorificSuffix;

    /**
     * The most generic familial relation.
     */
    private $relatedTo;

    /**
     * A colleague of the person.
     */
    private $colleagues;

    /**
     * A colleague of the person.
     */
    private $colleague;

    /**
     * A child of the person.
     */
    private $children;

    /**
     * Date of death.
     */
    private $deathDate;

    /**
     * An organization that the person is an alumni of.
     */
    private $alumniOf;

    public function getSeeks()
    {
        return $this->seeks;
    }

    public function setSeeks($seeks)
    {
        $this->seeks = $seeks;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getHasOfferCatalog()
    {
        return $this->hasOfferCatalog;
    }

    public function setHasOfferCatalog($hasOfferCatalog)
    {
        $this->hasOfferCatalog = $hasOfferCatalog;
    }

    public function getVatID()
    {
        return $this->vatID;
    }

    public function setVatID($vatID)
    {
        $this->vatID = $vatID;
    }

    public function getKnows()
    {
        return $this->knows;
    }

    public function setKnows($knows)
    {
        $this->knows = $knows;
    }

    public function getHomeLocation()
    {
        return $this->homeLocation;
    }

    public function setHomeLocation($homeLocation)
    {
        $this->homeLocation = $homeLocation;
    }

    public function getHasOccupation()
    {
        return $this->hasOccupation;
    }

    public function setHasOccupation($hasOccupation)
    {
        $this->hasOccupation = $hasOccupation;
    }

    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    public function getSiblings()
    {
        return $this->siblings;
    }

    public function setSiblings($siblings)
    {
        $this->siblings = $siblings;
    }

    public function getSibling()
    {
        return $this->sibling;
    }

    public function setSibling($sibling)
    {
        $this->sibling = $sibling;
    }

    public function getWorkLocation()
    {
        return $this->workLocation;
    }

    public function setWorkLocation($workLocation)
    {
        $this->workLocation = $workLocation;
    }

    public function getAdditionalName()
    {
        return $this->additionalName;
    }

    public function setAdditionalName($additionalName)
    {
        $this->additionalName = $additionalName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getHonorificPrefix()
    {
        return $this->honorificPrefix;
    }

    public function setHonorificPrefix($honorificPrefix)
    {
        $this->honorificPrefix = $honorificPrefix;
    }

    public function getNaics()
    {
        return $this->naics;
    }

    public function setNaics($naics)
    {
        $this->naics = $naics;
    }

    public function getSpouse()
    {
        return $this->spouse;
    }

    public function setSpouse($spouse)
    {
        $this->spouse = $spouse;
    }

    public function getWorksFor()
    {
        return $this->worksFor;
    }

    public function setWorksFor($worksFor)
    {
        $this->worksFor = $worksFor;
    }

    public function getAffiliation()
    {
        return $this->affiliation;
    }

    public function setAffiliation($affiliation)
    {
        $this->affiliation = $affiliation;
    }

    public function getMemberOf()
    {
        return $this->memberOf;
    }

    public function setMemberOf($memberOf)
    {
        $this->memberOf = $memberOf;
    }

    public function getDuns()
    {
        return $this->duns;
    }

    public function setDuns($duns)
    {
        $this->duns = $duns;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getNetWorth()
    {
        return $this->netWorth;
    }

    public function setNetWorth($netWorth)
    {
        $this->netWorth = $netWorth;
    }

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    public function getDeathPlace()
    {
        return $this->deathPlace;
    }

    public function setDeathPlace($deathPlace)
    {
        $this->deathPlace = $deathPlace;
    }

    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function getParents()
    {
        return $this->parents;
    }

    public function setParents($parents)
    {
        $this->parents = $parents;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function getPerformerIn()
    {
        return $this->performerIn;
    }

    public function setPerformerIn($performerIn)
    {
        $this->performerIn = $performerIn;
    }

    public function getAward()
    {
        return $this->award;
    }

    public function setAward($award)
    {
        $this->award = $award;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function getInteractionStatistic()
    {
        return $this->interactionStatistic;
    }

    public function setInteractionStatistic($interactionStatistic)
    {
        $this->interactionStatistic = $interactionStatistic;
    }

    public function getFollows()
    {
        return $this->follows;
    }

    public function setFollows($follows)
    {
        $this->follows = $follows;
    }

    public function getHonorificSuffix()
    {
        return $this->honorificSuffix;
    }

    public function setHonorificSuffix($honorificSuffix)
    {
        $this->honorificSuffix = $honorificSuffix;
    }

    public function getRelatedTo()
    {
        return $this->relatedTo;
    }

    public function setRelatedTo($relatedTo)
    {
        $this->relatedTo = $relatedTo;
    }

    public function getColleagues()
    {
        return $this->colleagues;
    }

    public function setColleagues($colleagues)
    {
        $this->colleagues = $colleagues;
    }

    public function getColleague()
    {
        return $this->colleague;
    }

    public function setColleague($colleague)
    {
        $this->colleague = $colleague;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function setChildren($children)
    {
        $this->children = $children;
    }

    public function getDeathDate()
    {
        return $this->deathDate;
    }

    public function setDeathDate($deathDate)
    {
        $this->deathDate = $deathDate;
    }

    public function getAlumniOf()
    {
        return $this->alumniOf;
    }

    public function setAlumniOf($alumniOf)
    {
        $this->alumniOf = $alumniOf;
    }
}

