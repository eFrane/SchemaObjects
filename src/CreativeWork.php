<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The most generic kind of creative work, including books, movies, photographs,
 * software programs, etc.
 */
class CreativeWork extends Thing
{
    /**
     * A standardized size of a product or creative work, specified either through a
     * simple textual string (for example 'XL', '32Wx34L'), a  QuantitativeValue with a
     * unitCode, or a comprehensive and structured [[SizeSpecification]]; in other
     * cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be
     * more applicable.
     */
    private $size;

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian
     * flag'. Values are typically expressed as text, although links to controlled
     * value schemes are also supported.
     */
    private $pattern;

    /**
     * The author of this content or rating. Please note that author is special in that
     * HTML 5 provides a special mechanism for indicating authorship via the rel tag.
     * That is equivalent to this and may be used interchangeably.
     */
    private $author;

    /**
     * A citation or reference to another creative work, such as another publication,
     * web page, scholarly article, etc.
     */
    private $citation;

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus
     * of the content. It is a subproperty of
     *       contentLocation intended primarily for more technical and detailed
     * materials. For example with a Dataset, it indicates
     *       areas that the dataset describes: a dataset of New York weather would have
     * spatialCoverage which was the place: the state of New York.
     */
    private $spatialCoverage;

    /**
     * An embedded audio object.
     */
    private $audio;

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document
     * describing the editorial principles of an [[Organization]] (or individual e.g. a
     * [[Person]] writing a blog) that relate to their activities as a publisher, e.g.
     * ethics or diversity policies. When applied to a [[CreativeWork]] (e.g.
     * [[NewsArticle]]) the principles are those of the party primarily responsible for
     * the creation of the [[CreativeWork]].
     *
     * While such policies are most typically expressed in natural language, sometimes
     * related information (e.g. indicating a [[funder]]) can be expressed using
     * schema.org terminology.
     */
    private $publishingPrinciples;

    /**
     * The specific time described by a creative work, for works (e.g. articles, video
     * objects etc.) that emphasise a particular moment within an Event.
     */
    private $contentReferenceTime;

    /**
     * Text of a notice appropriate for describing the copyright aspects of this
     * Creative Work, ideally indicating the owner of the copyright for the Work.
     */
    private $copyrightNotice;

    /**
     * Date of first broadcast/publication.
     */
    private $datePublished;

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some
     * sense), is part of.
     */
    private $isPartOf;

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]]
     * representing a specific edit / edition for a work of film or television.
     *
     * For example, the motion picture known as "Ghostbusters" whose [[titleEIDR]] is
     * "10.5240/7EC7-228A-510A-053E-CBB8-J", has several edits e.g.
     * "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3".
     *
     * Since schema.org types like [[Movie]] and [[TVEpisode]] can be used for both
     * works and their multiple expressions, it is possible to use [[titleEIDR]] alone
     * (for a general description), or alongside [[editEIDR]] for a more edit-specific
     * description.
     */
    private $editEIDR;

    /**
     * A media object that encodes this CreativeWork.
     */
    private $encodings;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for
     * associatedMedia.
     */
    private $encoding;

    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example
     * terms include Incomplete, Draft, Published, Obsolete. Some organizations define
     * a set of terms for the stages of their publication lifecycle.
     */
    private $creativeWorkStatus;

    /**
     * The "spatial" property can be used in cases when more specific properties
     * (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not
     * known to be appropriate.
     */
    private $spatial;

    /**
     * A link to the page containing the comments of the CreativeWork.
     */
    private $discussionUrl;

    /**
     * An embedded video object.
     */
    private $video;

    /**
     * Example/instance/realization/derivation of the concept of this creative work.
     * eg. The paperback edition, first edition, or eBook.
     */
    private $workExample;

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content
     * applies to, i.e. that it describes, either as a DateTime or as a textual string
     * indicating a time period in [ISO 8601 time interval
     * format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In
     *       the case of a Dataset it will typically indicate the relevant time period
     * in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be
     * written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book,
     * TVSeries or TVEpisode may indicate their temporalCoverage in broader terms -
     * textually or via well-known URL.
     *       Written works such as books may sometimes have precise temporal coverage
     * too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format
     * format via "1939/1945".
     *
     * Open-ended date ranges can be written with ".." in place of the end date. For
     * example, "2015-11/.." indicates a range beginning in November 2015 and with no
     * specified final date. This is tentative and might be updated in future when ISO
     * 8601 is officially updated.
     */
    private $temporalCoverage;

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     */
    private $releasedEvent;

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise
     * acquired, for the current item.
     */
    private $acquireLicensePage;

    /**
     * The schema.org [[usageInfo]] property indicates further information about a
     * [[CreativeWork]]. This property is applicable both to works that are freely
     * available and to those that require payment or other transactions. It can
     * reference additional information e.g. community expectations on preferred
     * linking and citation conventions, as well as purchasing details. For something
     * that can be commercially licensed, usageInfo can provide detailed,
     * resource-specific information about licensing options.
     *
     * This property can be used alongside the license property which indicates
     * license(s) applicable to some piece of content. The usageInfo property can
     * provide information about other licensing options, e.g. acquiring commercial
     * usage rights for an image that is also available under non-commercial creative
     * commons licenses.
     */
    private $usageInfo;

    /**
     * A thumbnail image relevant to the Thing.
     */
    private $thumbnailUrl;

    /**
     * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
     */
    private $contentRating;

    /**
     * Indicates a correction to a [[CreativeWork]], either via a
     * [[CorrectionComment]], textually or in another document.
     */
    private $correction;

    /**
     * The publisher of the creative work.
     */
    private $publisher;

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has
     * received. This is most applicable to works published in Web sites with
     * commenting system; additional comments may exist elsewhere.
     */
    private $commentCount;

    /**
     * A human-readable summary of specific accessibility features or deficiencies,
     * consistent with the other accessibility metadata but expressing subtleties such
     * as "short descriptions are present but long descriptions will be needed for
     * non-visual users" or "short descriptions are present and no long descriptions
     * are needed."
     */
    private $accessibilitySummary;

    /**
     * The publishing division which published the comic.
     */
    private $publisherImprint;

    /**
     * The person or organization who produced the work (e.g. music album, movie,
     * tv/radio series etc.).
     */
    private $producer;

    /**
     * Conditions that affect the availability of, or method(s) of access to, an item.
     * Typically used for real world items such as an [[ArchiveComponent]] held by an
     * [[ArchiveOrganization]]. This property is not suitable for use as a general Web
     * access control mechanism. It is expressed only in natural language.
     *
     * For example "Available by appointment from the Reading Room" or "Accessible only
     * from logged-in accounts ".
     */
    private $conditionsOfAccess;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily
     * about a concept.
     */
    private $mentions;

    /**
     * Approximate or typical time it takes to work with or through this learning
     * resource for the typical intended target audience, e.g. 'PT30M', 'PT1H25M'.
     */
    private $timeRequired;

    /**
     * A resource that was used in the creation of this resource. This term can be
     * repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html.
     */
    private $isBasedOnUrl;

    /**
     * A resource from which this work is derived or from which it is a modification or
     * adaption.
     */
    private $isBasedOn;

    /**
     * A license document that applies to this structured data, typically indicated by
     * URL.
     */
    private $sdLicense;

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in
     * some sense).
     */
    private $hasPart;

    /**
     * The human sensory perceptual system or cognitive faculty through which a person
     * may process or perceive information. Expected values include: auditory, tactile,
     * textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual,
     * mathOnVisual, musicOnVisual, textOnVisual.
     */
    private $accessMode;

    /**
     * Indicates the party responsible for generating and publishing the current
     * structured data markup, typically in cases where the structured data is derived
     * automatically from existing published content but published on a different site.
     * For example, student projects and open data initiatives often re-publish
     * existing content with more explicitly structured metadata. The
     * [[sdPublisher]] property helps make such practices more explicit.
     */
    private $sdPublisher;

    /**
     * Headline of the article.
     */
    private $headline;

    /**
     * The Organization on whose behalf the creator was working.
     */
    private $sourceOrganization;

    /**
     * A secondary title of the CreativeWork.
     */
    private $alternativeHeadline;

    /**
     * A characteristic of the described resource that is physiologically dangerous to
     * some users. Related to WCAG 2.0 guideline 2.3 ([WebSchemas wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     */
    private $accessibilityHazard;

    /**
     * A publication event associated with the item.
     */
    private $publication;

    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     */
    private $abstract;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property
     * for CreativeWork.
     */
    private $creator;

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable
     * values are 'active', 'expositive', or 'mixed'.
     */
    private $interactivityType;

    /**
     * Indicates the date on which the current structured data was generated /
     * published. Typically used alongside [[sdPublisher]]
     */
    private $sdDatePublished;

    /**
     * The date on which the CreativeWork was most recently modified or when the item's
     * entry was modified within a DataFeed.
     */
    private $dateModified;

    /**
     * Fictional person connected with a creative work.
     */
    private $character;

    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or that
     * translates during some event.
     */
    private $translator;

    /**
     * Content features of the resource, such as accessible media, alternatives and
     * supported enhancements for accessibility ([WebSchemas wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     */
    private $accessibilityFeature;

    /**
     * Comments, typically from users.
     */
    private $comment;

    /**
     * Keywords or tags used to describe this content. Multiple entries in a keywords
     * list are typically delimited by commas.
     */
    private $keywords;

    /**
     * The item being described is intended to help a person learn the competency or
     * learning outcome defined by the referenced term.
     */
    private $teaches;

    /**
     * An alignment to an established educational framework.
     *
     * This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource
     * [[teaches]] or [[assesses]] a competency.
     */
    private $educationalAlignment;

    /**
     * A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or
     * other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that manages
     * contributions to, and/or publication of, some (typically complex) artifact. It
     * is common for distributions of software and data to be based on "upstream"
     * sources. When [[maintainer]] is applied to a specific version of something e.g.
     * a particular version or packaging of a [[Dataset]], it is always  possible that
     * the upstream source has a different maintainer. The [[isBasedOn]] property can
     * be used to indicate such relationships between datasets to make the different
     * maintenance roles clear. Similarly in the case of software, a package may have
     * dedicated maintainers working on integration into software distributions such as
     * Ubuntu, as well as upstream maintainers of the underlying work.
     */
    private $maintainer;

    /**
     * The purpose of a work in the context of education; for example, 'assignment',
     * 'group work'.
     */
    private $educationalUse;

    /**
     * The quantity of the materials being described or an expression of the physical
     * space they occupy.
     */
    private $materialExtent;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     */
    private $typicalAgeRange;

    /**
     * Media type, typically MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml)) of the
     * content e.g. application/zip of a SoftwareApplication binary. In cases where a
     * CreativeWork has several media type representations, 'encoding' can be used to
     * indicate each MediaObject alongside particular fileFormat information.
     * Unregistered or niche file formats can be indicated instead via the most
     * appropriate URL, e.g. defining Web page or a Wikipedia entry.
     */
    private $fileFormat;

    /**
     * Media type typically expressed using a MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN
     * reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types))
     * e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3
     * etc.).
     *
     * In cases where a [[CreativeWork]] has several media type representations,
     * [[encoding]] can be used to indicate each [[MediaObject]] alongside particular
     * [[encodingFormat]] information.
     *
     * Unregistered or niche encoding and file formats can be indicated instead via the
     * most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     */
    private $encodingFormat;

    /**
     * Specifies the Person who edited the CreativeWork.
     */
    private $editor;

    /**
     * The "temporal" property can be used in cases where more specific properties
     * (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]],
     * [[datePublished]]) are not known to be appropriate.
     */
    private $temporal;

    /**
     * The textual content of this CreativeWork.
     */
    private $text;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     */
    private $accountablePerson;

    /**
     * A list of single or combined accessModes that are sufficient to understand all
     * the intellectual content of a resource. Expected values include:  auditory,
     * tactile, textual, visual.
     */
    private $accessModeSufficient;

    /**
     * The predominant type or kind characterizing the learning resource. For example,
     * 'presentation', 'handout'.
     */
    private $learningResourceType;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     */
    private $version;

    /**
     * Date the content expires and is no longer useful or available. For example a
     * [[VideoObject]] or [[NewsArticle]] whose availability or relevance is
     * time-limited, or a [[ClaimReview]] fact check whose publisher wants to indicate
     * that it may no longer be relevant (or helpful to highlight) after some date.
     */
    private $expires;

    /**
     * The party holding the legal copyright to the CreativeWork.
     */
    private $copyrightHolder;

    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with
     * a published Creative Work.
     */
    private $creditText;

    /**
     * Indicates that the resource is compatible with the referenced accessibility API
     * ([WebSchemas wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     */
    private $accessibilityAPI;

    /**
     * The location where the CreativeWork was created, which may not be the same as
     * the location depicted in the CreativeWork.
     */
    private $locationCreated;

    /**
     * Identifies input methods that are sufficient to fully control the described
     * resource ([WebSchemas wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     */
    private $accessibilityControl;

    /**
     * The year during which the claimed copyright for the CreativeWork was first
     * asserted.
     */
    private $copyrightYear;

    /**
     * Indicates whether this content is family friendly.
     */
    private $isFamilyFriendly;

    /**
     * A license document that applies to this content, typically indicated by URL.
     */
    private $license;

    /**
     * Indicates (by URL or string) a particular version of a schema used in some
     * CreativeWork. This property was created primarily to
     *     indicate the use of a specific schema.org release, e.g. ```10.0``` as a
     * simple string, or more explicitly via URL,
     * ```https://schema.org/docs/releases.html#v10.0```. There may be situations in
     * which other schemas might usefully be referenced this way, e.g.
     * ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this
     * has not been carefully explored in the community.
     */
    private $schemaVersion;

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     */
    private $mainEntity;

    /**
     * The subject matter of the content.
     */
    private $about;

    /**
     * A work that is a translation of the content of this work. e.g. 西遊記 has an
     * English workTranslation “Journey to the West”,a German workTranslation
     * “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây du ký bình
     * khảo.
     */
    private $workTranslation;

    /**
     * The work that this work has been translated from. e.g. 物种起源 is a
     * translationOf “On the Origin of Species”
     */
    private $translationOfWork;

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all
     * or part of the event.
     */
    private $recordedAt;

    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     */
    private $exampleOfWork;

    /**
     * The location depicted or described in the content. For example, the location in
     * a photograph or painting.
     */
    private $contentLocation;

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getCitation()
    {
        return $this->citation;
    }

    public function setCitation($citation)
    {
        $this->citation = $citation;
    }

    public function getSpatialCoverage()
    {
        return $this->spatialCoverage;
    }

    public function setSpatialCoverage($spatialCoverage)
    {
        $this->spatialCoverage = $spatialCoverage;
    }

    public function getAudio()
    {
        return $this->audio;
    }

    public function setAudio($audio)
    {
        $this->audio = $audio;
    }

    public function getPublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }

    public function setPublishingPrinciples($publishingPrinciples)
    {
        $this->publishingPrinciples = $publishingPrinciples;
    }

    public function getContentReferenceTime()
    {
        return $this->contentReferenceTime;
    }

    public function setContentReferenceTime($contentReferenceTime)
    {
        $this->contentReferenceTime = $contentReferenceTime;
    }

    public function getCopyrightNotice()
    {
        return $this->copyrightNotice;
    }

    public function setCopyrightNotice($copyrightNotice)
    {
        $this->copyrightNotice = $copyrightNotice;
    }

    public function getDatePublished()
    {
        return $this->datePublished;
    }

    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
    }

    public function getIsPartOf()
    {
        return $this->isPartOf;
    }

    public function setIsPartOf($isPartOf)
    {
        $this->isPartOf = $isPartOf;
    }

    public function getEditEIDR()
    {
        return $this->editEIDR;
    }

    public function setEditEIDR($editEIDR)
    {
        $this->editEIDR = $editEIDR;
    }

    public function getEncodings()
    {
        return $this->encodings;
    }

    public function setEncodings($encodings)
    {
        $this->encodings = $encodings;
    }

    public function getEncoding()
    {
        return $this->encoding;
    }

    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
    }

    public function getCreativeWorkStatus()
    {
        return $this->creativeWorkStatus;
    }

    public function setCreativeWorkStatus($creativeWorkStatus)
    {
        $this->creativeWorkStatus = $creativeWorkStatus;
    }

    public function getSpatial()
    {
        return $this->spatial;
    }

    public function setSpatial($spatial)
    {
        $this->spatial = $spatial;
    }

    public function getDiscussionUrl()
    {
        return $this->discussionUrl;
    }

    public function setDiscussionUrl($discussionUrl)
    {
        $this->discussionUrl = $discussionUrl;
    }

    public function getVideo()
    {
        return $this->video;
    }

    public function setVideo($video)
    {
        $this->video = $video;
    }

    public function getWorkExample()
    {
        return $this->workExample;
    }

    public function setWorkExample($workExample)
    {
        $this->workExample = $workExample;
    }

    public function getTemporalCoverage()
    {
        return $this->temporalCoverage;
    }

    public function setTemporalCoverage($temporalCoverage)
    {
        $this->temporalCoverage = $temporalCoverage;
    }

    public function getReleasedEvent()
    {
        return $this->releasedEvent;
    }

    public function setReleasedEvent($releasedEvent)
    {
        $this->releasedEvent = $releasedEvent;
    }

    public function getAcquireLicensePage()
    {
        return $this->acquireLicensePage;
    }

    public function setAcquireLicensePage($acquireLicensePage)
    {
        $this->acquireLicensePage = $acquireLicensePage;
    }

    public function getUsageInfo()
    {
        return $this->usageInfo;
    }

    public function setUsageInfo($usageInfo)
    {
        $this->usageInfo = $usageInfo;
    }

    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->thumbnailUrl = $thumbnailUrl;
    }

    public function getContentRating()
    {
        return $this->contentRating;
    }

    public function setContentRating($contentRating)
    {
        $this->contentRating = $contentRating;
    }

    public function getCorrection()
    {
        return $this->correction;
    }

    public function setCorrection($correction)
    {
        $this->correction = $correction;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function getCommentCount()
    {
        return $this->commentCount;
    }

    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    }

    public function getAccessibilitySummary()
    {
        return $this->accessibilitySummary;
    }

    public function setAccessibilitySummary($accessibilitySummary)
    {
        $this->accessibilitySummary = $accessibilitySummary;
    }

    public function getPublisherImprint()
    {
        return $this->publisherImprint;
    }

    public function setPublisherImprint($publisherImprint)
    {
        $this->publisherImprint = $publisherImprint;
    }

    public function getProducer()
    {
        return $this->producer;
    }

    public function setProducer($producer)
    {
        $this->producer = $producer;
    }

    public function getConditionsOfAccess()
    {
        return $this->conditionsOfAccess;
    }

    public function setConditionsOfAccess($conditionsOfAccess)
    {
        $this->conditionsOfAccess = $conditionsOfAccess;
    }

    public function getMentions()
    {
        return $this->mentions;
    }

    public function setMentions($mentions)
    {
        $this->mentions = $mentions;
    }

    public function getTimeRequired()
    {
        return $this->timeRequired;
    }

    public function setTimeRequired($timeRequired)
    {
        $this->timeRequired = $timeRequired;
    }

    public function getIsBasedOnUrl()
    {
        return $this->isBasedOnUrl;
    }

    public function setIsBasedOnUrl($isBasedOnUrl)
    {
        $this->isBasedOnUrl = $isBasedOnUrl;
    }

    public function getIsBasedOn()
    {
        return $this->isBasedOn;
    }

    public function setIsBasedOn($isBasedOn)
    {
        $this->isBasedOn = $isBasedOn;
    }

    public function getSdLicense()
    {
        return $this->sdLicense;
    }

    public function setSdLicense($sdLicense)
    {
        $this->sdLicense = $sdLicense;
    }

    public function getHasPart()
    {
        return $this->hasPart;
    }

    public function setHasPart($hasPart)
    {
        $this->hasPart = $hasPart;
    }

    public function getAccessMode()
    {
        return $this->accessMode;
    }

    public function setAccessMode($accessMode)
    {
        $this->accessMode = $accessMode;
    }

    public function getSdPublisher()
    {
        return $this->sdPublisher;
    }

    public function setSdPublisher($sdPublisher)
    {
        $this->sdPublisher = $sdPublisher;
    }

    public function getHeadline()
    {
        return $this->headline;
    }

    public function setHeadline($headline)
    {
        $this->headline = $headline;
    }

    public function getSourceOrganization()
    {
        return $this->sourceOrganization;
    }

    public function setSourceOrganization($sourceOrganization)
    {
        $this->sourceOrganization = $sourceOrganization;
    }

    public function getAlternativeHeadline()
    {
        return $this->alternativeHeadline;
    }

    public function setAlternativeHeadline($alternativeHeadline)
    {
        $this->alternativeHeadline = $alternativeHeadline;
    }

    public function getAccessibilityHazard()
    {
        return $this->accessibilityHazard;
    }

    public function setAccessibilityHazard($accessibilityHazard)
    {
        $this->accessibilityHazard = $accessibilityHazard;
    }

    public function getPublication()
    {
        return $this->publication;
    }

    public function setPublication($publication)
    {
        $this->publication = $publication;
    }

    public function getAbstract()
    {
        return $this->abstract;
    }

    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    }

    public function getCreator()
    {
        return $this->creator;
    }

    public function setCreator($creator)
    {
        $this->creator = $creator;
    }

    public function getInteractivityType()
    {
        return $this->interactivityType;
    }

    public function setInteractivityType($interactivityType)
    {
        $this->interactivityType = $interactivityType;
    }

    public function getSdDatePublished()
    {
        return $this->sdDatePublished;
    }

    public function setSdDatePublished($sdDatePublished)
    {
        $this->sdDatePublished = $sdDatePublished;
    }

    public function getDateModified()
    {
        return $this->dateModified;
    }

    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
    }

    public function getCharacter()
    {
        return $this->character;
    }

    public function setCharacter($character)
    {
        $this->character = $character;
    }

    public function getTranslator()
    {
        return $this->translator;
    }

    public function setTranslator($translator)
    {
        $this->translator = $translator;
    }

    public function getAccessibilityFeature()
    {
        return $this->accessibilityFeature;
    }

    public function setAccessibilityFeature($accessibilityFeature)
    {
        $this->accessibilityFeature = $accessibilityFeature;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    public function getTeaches()
    {
        return $this->teaches;
    }

    public function setTeaches($teaches)
    {
        $this->teaches = $teaches;
    }

    public function getEducationalAlignment()
    {
        return $this->educationalAlignment;
    }

    public function setEducationalAlignment($educationalAlignment)
    {
        $this->educationalAlignment = $educationalAlignment;
    }

    public function getMaintainer()
    {
        return $this->maintainer;
    }

    public function setMaintainer($maintainer)
    {
        $this->maintainer = $maintainer;
    }

    public function getEducationalUse()
    {
        return $this->educationalUse;
    }

    public function setEducationalUse($educationalUse)
    {
        $this->educationalUse = $educationalUse;
    }

    public function getMaterialExtent()
    {
        return $this->materialExtent;
    }

    public function setMaterialExtent($materialExtent)
    {
        $this->materialExtent = $materialExtent;
    }

    public function getTypicalAgeRange()
    {
        return $this->typicalAgeRange;
    }

    public function setTypicalAgeRange($typicalAgeRange)
    {
        $this->typicalAgeRange = $typicalAgeRange;
    }

    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
    }

    public function getEncodingFormat()
    {
        return $this->encodingFormat;
    }

    public function setEncodingFormat($encodingFormat)
    {
        $this->encodingFormat = $encodingFormat;
    }

    public function getEditor()
    {
        return $this->editor;
    }

    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    public function getTemporal()
    {
        return $this->temporal;
    }

    public function setTemporal($temporal)
    {
        $this->temporal = $temporal;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getAccountablePerson()
    {
        return $this->accountablePerson;
    }

    public function setAccountablePerson($accountablePerson)
    {
        $this->accountablePerson = $accountablePerson;
    }

    public function getAccessModeSufficient()
    {
        return $this->accessModeSufficient;
    }

    public function setAccessModeSufficient($accessModeSufficient)
    {
        $this->accessModeSufficient = $accessModeSufficient;
    }

    public function getLearningResourceType()
    {
        return $this->learningResourceType;
    }

    public function setLearningResourceType($learningResourceType)
    {
        $this->learningResourceType = $learningResourceType;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getExpires()
    {
        return $this->expires;
    }

    public function setExpires($expires)
    {
        $this->expires = $expires;
    }

    public function getCopyrightHolder()
    {
        return $this->copyrightHolder;
    }

    public function setCopyrightHolder($copyrightHolder)
    {
        $this->copyrightHolder = $copyrightHolder;
    }

    public function getCreditText()
    {
        return $this->creditText;
    }

    public function setCreditText($creditText)
    {
        $this->creditText = $creditText;
    }

    public function getAccessibilityAPI()
    {
        return $this->accessibilityAPI;
    }

    public function setAccessibilityAPI($accessibilityAPI)
    {
        $this->accessibilityAPI = $accessibilityAPI;
    }

    public function getLocationCreated()
    {
        return $this->locationCreated;
    }

    public function setLocationCreated($locationCreated)
    {
        $this->locationCreated = $locationCreated;
    }

    public function getAccessibilityControl()
    {
        return $this->accessibilityControl;
    }

    public function setAccessibilityControl($accessibilityControl)
    {
        $this->accessibilityControl = $accessibilityControl;
    }

    public function getCopyrightYear()
    {
        return $this->copyrightYear;
    }

    public function setCopyrightYear($copyrightYear)
    {
        $this->copyrightYear = $copyrightYear;
    }

    public function getIsFamilyFriendly()
    {
        return $this->isFamilyFriendly;
    }

    public function setIsFamilyFriendly($isFamilyFriendly)
    {
        $this->isFamilyFriendly = $isFamilyFriendly;
    }

    public function getLicense()
    {
        return $this->license;
    }

    public function setLicense($license)
    {
        $this->license = $license;
    }

    public function getSchemaVersion()
    {
        return $this->schemaVersion;
    }

    public function setSchemaVersion($schemaVersion)
    {
        $this->schemaVersion = $schemaVersion;
    }

    public function getMainEntity()
    {
        return $this->mainEntity;
    }

    public function setMainEntity($mainEntity)
    {
        $this->mainEntity = $mainEntity;
    }

    public function getAbout()
    {
        return $this->about;
    }

    public function setAbout($about)
    {
        $this->about = $about;
    }

    public function getWorkTranslation()
    {
        return $this->workTranslation;
    }

    public function setWorkTranslation($workTranslation)
    {
        $this->workTranslation = $workTranslation;
    }

    public function getTranslationOfWork()
    {
        return $this->translationOfWork;
    }

    public function setTranslationOfWork($translationOfWork)
    {
        $this->translationOfWork = $translationOfWork;
    }

    public function getRecordedAt()
    {
        return $this->recordedAt;
    }

    public function setRecordedAt($recordedAt)
    {
        $this->recordedAt = $recordedAt;
    }

    public function getExampleOfWork()
    {
        return $this->exampleOfWork;
    }

    public function setExampleOfWork($exampleOfWork)
    {
        $this->exampleOfWork = $exampleOfWork;
    }

    public function getContentLocation()
    {
        return $this->contentLocation;
    }

    public function setContentLocation($contentLocation)
    {
        $this->contentLocation = $contentLocation;
    }
}

