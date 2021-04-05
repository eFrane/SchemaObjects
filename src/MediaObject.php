<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A media object, such as an image, video, or audio object embedded in a web page
 * or a downloadable dataset i.e. DataDownload. Note that a creative work may have
 * many media objects associated with it on the same web page. For example, a page
 * about a single song (MusicRecording) may have a music video (VideoObject), and a
 * high and low bandwidth audio stream (2 AudioObject's).
 */
class MediaObject extends CreativeWork
{
    /**
     * Actual bytes of the media object, for example the image file or video file.
     */
    private $contentUrl;

    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For actions
     * that span a period of time, when the action was performed. e.g. John wrote a
     * book from January to *December*. For media, including audio and video, it's the
     * time offset of the end of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when
     * describing dates with times. This situation may be clarified in future
     * revisions.
     */
    private $endTime;

    /**
     * The production company or studio responsible for the item e.g. series, video
     * game, episode etc.
     */
    private $productionCompany;

    /**
     * Date when this media object was uploaded to this site.
     */
    private $uploadDate;

    /**
     * The width of the item.
     */
    private $width;

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to
     * be allowed everywhere. Specify the countries in [ISO 3166
     * format](http://en.wikipedia.org/wiki/ISO_3166).
     */
    private $regionsAllowed;

    /**
     * A URL pointing to a player for a specific video. In general, this is the
     * information in the ```src``` element of an ```embed``` tag and should not be the
     * same as the content of the ```loc``` tag.
     */
    private $embedUrl;

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     */
    private $playerType;

    /**
     * File size in (mega/kilo) bytes.
     */
    private $contentSize;

    /**
     * The bitrate of the media object.
     */
    private $bitrate;

    /**
     * A NewsArticle associated with the Media Object.
     */
    private $associatedArticle;

    /**
     * The CreativeWork encoded by this media object.
     */
    private $encodesCreativeWork;

    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    public function setContentUrl($contentUrl)
    {
        $this->contentUrl = $contentUrl;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    public function setProductionCompany($productionCompany)
    {
        $this->productionCompany = $productionCompany;
    }

    public function getUploadDate()
    {
        return $this->uploadDate;
    }

    public function setUploadDate($uploadDate)
    {
        $this->uploadDate = $uploadDate;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getRegionsAllowed()
    {
        return $this->regionsAllowed;
    }

    public function setRegionsAllowed($regionsAllowed)
    {
        $this->regionsAllowed = $regionsAllowed;
    }

    public function getEmbedUrl()
    {
        return $this->embedUrl;
    }

    public function setEmbedUrl($embedUrl)
    {
        $this->embedUrl = $embedUrl;
    }

    public function getPlayerType()
    {
        return $this->playerType;
    }

    public function setPlayerType($playerType)
    {
        $this->playerType = $playerType;
    }

    public function getContentSize()
    {
        return $this->contentSize;
    }

    public function setContentSize($contentSize)
    {
        $this->contentSize = $contentSize;
    }

    public function getBitrate()
    {
        return $this->bitrate;
    }

    public function setBitrate($bitrate)
    {
        $this->bitrate = $bitrate;
    }

    public function getAssociatedArticle()
    {
        return $this->associatedArticle;
    }

    public function setAssociatedArticle($associatedArticle)
    {
        $this->associatedArticle = $associatedArticle;
    }

    public function getEncodesCreativeWork()
    {
        return $this->encodesCreativeWork;
    }

    public function setEncodesCreativeWork($encodesCreativeWork)
    {
        $this->encodesCreativeWork = $encodesCreativeWork;
    }
}

