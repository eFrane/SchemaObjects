<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A blog post intended to provide a rolling textual coverage of an ongoing event
 * through continuous updates.
 */
class LiveBlogPosting extends BlogPosting
{
    /**
     * An update to the LiveBlog.
     */
    private $liveBlogUpdate;

    /**
     * The time when the live blog will begin covering the Event. Note that coverage
     * may begin before the Event's start time. The LiveBlogPosting may also be created
     * before coverage begins.
     */
    private $coverageStartTime;

    /**
     * The time when the live blog will stop covering the Event. Note that coverage may
     * continue after the Event concludes.
     */
    private $coverageEndTime;

    public function getLiveBlogUpdate()
    {
        return $this->liveBlogUpdate;
    }

    public function setLiveBlogUpdate($liveBlogUpdate)
    {
        $this->liveBlogUpdate = $liveBlogUpdate;
    }

    public function getCoverageStartTime()
    {
        return $this->coverageStartTime;
    }

    public function setCoverageStartTime($coverageStartTime)
    {
        $this->coverageStartTime = $coverageStartTime;
    }

    public function getCoverageEndTime()
    {
        return $this->coverageEndTime;
    }

    public function setCoverageEndTime($coverageEndTime)
    {
        $this->coverageEndTime = $coverageEndTime;
    }
}

