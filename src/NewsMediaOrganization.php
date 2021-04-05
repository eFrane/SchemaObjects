<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A News/Media organization such as a newspaper or TV station.
 */
class NewsMediaOrganization extends Organization
{
    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing
     * (in news media, the newsroom’s) disclosure and correction policy for errors.
     */
    private $correctionsPolicy;

    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing
     * top editorial management.
     */
    private $masthead;

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
     * statement explaining when authors of articles are not named in bylines.
     */
    private $noBylinesPolicy;

    /**
     * Disclosure about verification and fact-checking processes for a
     * [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     */
    private $verificationFactCheckingPolicy;

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding
     * journalistic and publishing practices, or of a [[Restaurant]], a page describing
     * food source policies. In the case of a [[NewsMediaOrganization]], an
     * ethicsPolicy is typically a statement describing the personal, organizational,
     * and corporate standards of behavior expected by the organization.
     */
    private $ethicsPolicy;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]),
     * a report on staffing diversity issues. In a news context this might be for
     * example ASNE or RTDNA (US) reports, or self-reported.
     */
    private $diversityStaffingReport;

    /**
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including
     * any public agenda or stance on issues.
     */
    private $missionCoveragePrioritiesPolicy;

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement
     * about policy on use of unnamed sources and the decision process required.
     */
    private $unnamedSourcesPolicy;

    public function getCorrectionsPolicy()
    {
        return $this->correctionsPolicy;
    }

    public function setCorrectionsPolicy($correctionsPolicy)
    {
        $this->correctionsPolicy = $correctionsPolicy;
    }

    public function getMasthead()
    {
        return $this->masthead;
    }

    public function setMasthead($masthead)
    {
        $this->masthead = $masthead;
    }

    public function getNoBylinesPolicy()
    {
        return $this->noBylinesPolicy;
    }

    public function setNoBylinesPolicy($noBylinesPolicy)
    {
        $this->noBylinesPolicy = $noBylinesPolicy;
    }

    public function getVerificationFactCheckingPolicy()
    {
        return $this->verificationFactCheckingPolicy;
    }

    public function setVerificationFactCheckingPolicy($verificationFactCheckingPolicy)
    {
        $this->verificationFactCheckingPolicy = $verificationFactCheckingPolicy;
    }

    public function getEthicsPolicy()
    {
        return $this->ethicsPolicy;
    }

    public function setEthicsPolicy($ethicsPolicy)
    {
        $this->ethicsPolicy = $ethicsPolicy;
    }

    public function getDiversityStaffingReport()
    {
        return $this->diversityStaffingReport;
    }

    public function setDiversityStaffingReport($diversityStaffingReport)
    {
        $this->diversityStaffingReport = $diversityStaffingReport;
    }

    public function getMissionCoveragePrioritiesPolicy()
    {
        return $this->missionCoveragePrioritiesPolicy;
    }

    public function setMissionCoveragePrioritiesPolicy($missionCoveragePrioritiesPolicy)
    {
        $this->missionCoveragePrioritiesPolicy = $missionCoveragePrioritiesPolicy;
    }

    public function getUnnamedSourcesPolicy()
    {
        return $this->unnamedSourcesPolicy;
    }

    public function setUnnamedSourcesPolicy($unnamedSourcesPolicy)
    {
        $this->unnamedSourcesPolicy = $unnamedSourcesPolicy;
    }
}

