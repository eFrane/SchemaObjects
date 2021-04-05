<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A listing that describes a job opening in a certain organization.
 */
class JobPosting extends Intangible
{
    /**
     * Publication date of an online listing.
     */
    private $datePosted;

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     */
    private $workHours;

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     */
    private $baseSalary;

    /**
     * A (typically single) geographic location associated with the job position.
     */
    private $jobLocation;

    /**
     * Description of bonus and commission compensation aspects of the job.
     */
    private $incentives;

    /**
     * Description of bonus and commission compensation aspects of the job.
     */
    private $incentiveCompensation;

    /**
     * The date on which a successful applicant for this job would be expected to start
     * work. Choose a specific date in the future or use the jobImmediateStart property
     * to indicate the position is to be filled as soon as possible.
     */
    private $jobStartDate;

    /**
     * Indicates the department, unit and/or facility where the employee reports and/or
     * in which the job is to be performed.
     */
    private $employmentUnit;

    /**
     * The Occupation for the JobPosting.
     */
    private $relevantOccupation;

    /**
     * A description of the types of physical activity associated with the job. Defined
     * terms such as those in O*net may be used, but note that there is no way to
     * specify the level of ability as well as its nature when using a defined term.
     */
    private $physicalRequirement;

    /**
     * A description of any sensory requirements and levels necessary to function on
     * the job, including hearing and vision. Defined terms such as those in O*net may
     * be used, but note that there is no way to specify the level of ability as well
     * as its nature when using a defined term.
     */
    private $sensoryRequirement;

    /**
     * Indicates whether a [[JobPosting]] will accept experience (as indicated by
     * [[OccupationalExperienceRequirements]]) in place of its formal educational
     * qualifications (as indicated by [[educationRequirements]]). If true, indicates
     * that satisfying one of these requirements is sufficient.
     */
    private $experienceInPlaceOfEducation;

    /**
     * Specific qualifications required for this role or Occupation.
     */
    private $qualifications;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal,
     * internship).
     */
    private $employmentType;

    /**
     * The location(s) applicants can apply from. This is usually used for
     * telecommuting jobs where the applicant does not need to be in a physical office.
     * Note: This should not be used for citizenship or work visa requirements.
     */
    private $applicantLocationRequirements;

    /**
     * Organization offering the job position.
     */
    private $hiringOrganization;

    /**
     * The industry associated with the job position.
     */
    private $industry;

    /**
     * A description of the job location (e.g TELECOMMUTE for telecommute jobs).
     */
    private $jobLocationType;

    /**
     * The title of the job.
     */
    private $title;

    /**
     * A description of the employer, career opportunities and work environment for
     * this position.
     */
    private $employerOverview;

    /**
     * Description of benefits associated with the job.
     */
    private $benefits;

    /**
     * Description of benefits associated with the job.
     */
    private $jobBenefits;

    /**
     * Responsibilities associated with this role or Occupation.
     */
    private $responsibilities;

    /**
     * Any special commitments associated with this job posting. Valid entries include
     * VeteranCommit, MilitarySpouseCommit, etc.
     */
    private $specialCommitments;

    /**
     * An indicator as to whether a position is available for an immediate start.
     */
    private $jobImmediateStart;

    /**
     * Contact details for further information relevant to this job posting.
     */
    private $applicationContact;

    /**
     * The legal requirements such as citizenship, visa and other documentation
     * required for an applicant to this job.
     */
    private $eligibilityToWorkRequirement;

    /**
     * A description of any security clearance requirements of the job.
     */
    private $securityClearanceRequirement;

    /**
     * An estimated salary for a job posting or occupation, based on a variety of
     * variables including, but not limited to industry, job title, and location.
     * Estimated salaries  are often computed by outside organizations rather than the
     * hiring organization, who may not have committed to the estimated value.
     */
    private $estimatedSalary;

    /**
     * The number of positions open for this job posting. Use a positive integer. Do
     * not use if the number of positions is unclear or not known.
     */
    private $totalJobOpenings;

    public function getDatePosted()
    {
        return $this->datePosted;
    }

    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
    }

    public function getWorkHours()
    {
        return $this->workHours;
    }

    public function setWorkHours($workHours)
    {
        $this->workHours = $workHours;
    }

    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    public function setBaseSalary($baseSalary)
    {
        $this->baseSalary = $baseSalary;
    }

    public function getJobLocation()
    {
        return $this->jobLocation;
    }

    public function setJobLocation($jobLocation)
    {
        $this->jobLocation = $jobLocation;
    }

    public function getIncentives()
    {
        return $this->incentives;
    }

    public function setIncentives($incentives)
    {
        $this->incentives = $incentives;
    }

    public function getIncentiveCompensation()
    {
        return $this->incentiveCompensation;
    }

    public function setIncentiveCompensation($incentiveCompensation)
    {
        $this->incentiveCompensation = $incentiveCompensation;
    }

    public function getJobStartDate()
    {
        return $this->jobStartDate;
    }

    public function setJobStartDate($jobStartDate)
    {
        $this->jobStartDate = $jobStartDate;
    }

    public function getEmploymentUnit()
    {
        return $this->employmentUnit;
    }

    public function setEmploymentUnit($employmentUnit)
    {
        $this->employmentUnit = $employmentUnit;
    }

    public function getRelevantOccupation()
    {
        return $this->relevantOccupation;
    }

    public function setRelevantOccupation($relevantOccupation)
    {
        $this->relevantOccupation = $relevantOccupation;
    }

    public function getPhysicalRequirement()
    {
        return $this->physicalRequirement;
    }

    public function setPhysicalRequirement($physicalRequirement)
    {
        $this->physicalRequirement = $physicalRequirement;
    }

    public function getSensoryRequirement()
    {
        return $this->sensoryRequirement;
    }

    public function setSensoryRequirement($sensoryRequirement)
    {
        $this->sensoryRequirement = $sensoryRequirement;
    }

    public function getExperienceInPlaceOfEducation()
    {
        return $this->experienceInPlaceOfEducation;
    }

    public function setExperienceInPlaceOfEducation($experienceInPlaceOfEducation)
    {
        $this->experienceInPlaceOfEducation = $experienceInPlaceOfEducation;
    }

    public function getQualifications()
    {
        return $this->qualifications;
    }

    public function setQualifications($qualifications)
    {
        $this->qualifications = $qualifications;
    }

    public function getEmploymentType()
    {
        return $this->employmentType;
    }

    public function setEmploymentType($employmentType)
    {
        $this->employmentType = $employmentType;
    }

    public function getApplicantLocationRequirements()
    {
        return $this->applicantLocationRequirements;
    }

    public function setApplicantLocationRequirements($applicantLocationRequirements)
    {
        $this->applicantLocationRequirements = $applicantLocationRequirements;
    }

    public function getHiringOrganization()
    {
        return $this->hiringOrganization;
    }

    public function setHiringOrganization($hiringOrganization)
    {
        $this->hiringOrganization = $hiringOrganization;
    }

    public function getIndustry()
    {
        return $this->industry;
    }

    public function setIndustry($industry)
    {
        $this->industry = $industry;
    }

    public function getJobLocationType()
    {
        return $this->jobLocationType;
    }

    public function setJobLocationType($jobLocationType)
    {
        $this->jobLocationType = $jobLocationType;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getEmployerOverview()
    {
        return $this->employerOverview;
    }

    public function setEmployerOverview($employerOverview)
    {
        $this->employerOverview = $employerOverview;
    }

    public function getBenefits()
    {
        return $this->benefits;
    }

    public function setBenefits($benefits)
    {
        $this->benefits = $benefits;
    }

    public function getJobBenefits()
    {
        return $this->jobBenefits;
    }

    public function setJobBenefits($jobBenefits)
    {
        $this->jobBenefits = $jobBenefits;
    }

    public function getResponsibilities()
    {
        return $this->responsibilities;
    }

    public function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
    }

    public function getSpecialCommitments()
    {
        return $this->specialCommitments;
    }

    public function setSpecialCommitments($specialCommitments)
    {
        $this->specialCommitments = $specialCommitments;
    }

    public function getJobImmediateStart()
    {
        return $this->jobImmediateStart;
    }

    public function setJobImmediateStart($jobImmediateStart)
    {
        $this->jobImmediateStart = $jobImmediateStart;
    }

    public function getApplicationContact()
    {
        return $this->applicationContact;
    }

    public function setApplicationContact($applicationContact)
    {
        $this->applicationContact = $applicationContact;
    }

    public function getEligibilityToWorkRequirement()
    {
        return $this->eligibilityToWorkRequirement;
    }

    public function setEligibilityToWorkRequirement($eligibilityToWorkRequirement)
    {
        $this->eligibilityToWorkRequirement = $eligibilityToWorkRequirement;
    }

    public function getSecurityClearanceRequirement()
    {
        return $this->securityClearanceRequirement;
    }

    public function setSecurityClearanceRequirement($securityClearanceRequirement)
    {
        $this->securityClearanceRequirement = $securityClearanceRequirement;
    }

    public function getEstimatedSalary()
    {
        return $this->estimatedSalary;
    }

    public function setEstimatedSalary($estimatedSalary)
    {
        $this->estimatedSalary = $estimatedSalary;
    }

    public function getTotalJobOpenings()
    {
        return $this->totalJobOpenings;
    }

    public function setTotalJobOpenings($totalJobOpenings)
    {
        $this->totalJobOpenings = $totalJobOpenings;
    }
}

