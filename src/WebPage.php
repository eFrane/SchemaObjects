<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A web page. Every web page is implicitly assumed to be declared to be of type
 * WebPage, so the various properties about that webpage, such as
 * <code>breadcrumb</code> may be used. We recommend explicit declaration if these
 * properties are specified, but if they are found outside of an itemscope, they
 * will be assumed to be about the page.
 */
class WebPage extends CreativeWork
{
    /**
     * Date on which the content on this web page was last reviewed for accuracy and/or
     * completeness.
     */
    private $lastReviewed;

    /**
     * A link related to this web page, for example to other related web pages.
     */
    private $relatedLink;

    /**
     * The most significant URLs on the page. Typically, these are the non-navigation
     * links that are clicked on the most.
     */
    private $significantLinks;

    /**
     * One of the more significant URLs on the page. Typically, these are the
     * non-navigation links that are clicked on the most.
     */
    private $significantLink;

    /**
     * Indicates if this web page element is the main subject of the page.
     */
    private $mainContentOfPage;

    /**
     * One of the domain specialities to which this web page's content applies.
     */
    private $specialty;

    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the sense
     * of being highlighted as being especially appropriate for text-to-speech
     * conversion. Other sections of a page may also be usefully spoken in particular
     * circumstances; the 'speakable' property serves to indicate the parts most likely
     * to be generally useful for speech.
     *
     * The *speakable* property can be repeated an arbitrary number of times, with
     * three kinds of possible 'content-locator' values:
     *
     * 1.) *id-value* URL references - uses *id-value* of an element in the page being
     * annotated. The simplest use of *speakable* has (potentially relative) URL
     * values, referencing identified sections of the document concerned.
     *
     * 2.) CSS Selectors - addresses content in the annotated page, eg. via class
     * attribute. Use the [[cssSelector]] property.
     *
     * 3.)  XPaths - addresses content via XPaths (assuming an XML view of the
     * content). Use the [[xpath]] property.
     *
     *
     * For more sophisticated markup of speakable sections beyond simple ID references,
     * either CSS selectors or XPath expressions to pick out document section(s) as
     * speakable. For this
     * we define a supporting type, [[SpeakableSpecification]]  which is defined to be
     * a possible value of the *speakable* property.
     */
    private $speakable;

    /**
     * People or organizations that have reviewed the content on this web page for
     * accuracy and/or completeness.
     */
    private $reviewedBy;

    /**
     * Indicates the main image on the page.
     */
    private $primaryImageOfPage;

    /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     */
    private $breadcrumb;

    public function getLastReviewed()
    {
        return $this->lastReviewed;
    }

    public function setLastReviewed($lastReviewed)
    {
        $this->lastReviewed = $lastReviewed;
    }

    public function getRelatedLink()
    {
        return $this->relatedLink;
    }

    public function setRelatedLink($relatedLink)
    {
        $this->relatedLink = $relatedLink;
    }

    public function getSignificantLinks()
    {
        return $this->significantLinks;
    }

    public function setSignificantLinks($significantLinks)
    {
        $this->significantLinks = $significantLinks;
    }

    public function getSignificantLink()
    {
        return $this->significantLink;
    }

    public function setSignificantLink($significantLink)
    {
        $this->significantLink = $significantLink;
    }

    public function getMainContentOfPage()
    {
        return $this->mainContentOfPage;
    }

    public function setMainContentOfPage($mainContentOfPage)
    {
        $this->mainContentOfPage = $mainContentOfPage;
    }

    public function getSpecialty()
    {
        return $this->specialty;
    }

    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
    }

    public function getSpeakable()
    {
        return $this->speakable;
    }

    public function setSpeakable($speakable)
    {
        $this->speakable = $speakable;
    }

    public function getReviewedBy()
    {
        return $this->reviewedBy;
    }

    public function setReviewedBy($reviewedBy)
    {
        $this->reviewedBy = $reviewedBy;
    }

    public function getPrimaryImageOfPage()
    {
        return $this->primaryImageOfPage;
    }

    public function setPrimaryImageOfPage($primaryImageOfPage)
    {
        $this->primaryImageOfPage = $primaryImageOfPage;
    }

    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

    public function setBreadcrumb($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
    }
}

