<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A post to a social media platform, including blog posts, tweets, Facebook posts,
 * etc.
 */
class SocialMediaPosting extends Article
{
    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this
     * posting.
     */
    private $sharedContent;

    public function getSharedContent()
    {
        return $this->sharedContent;
    }

    public function setSharedContent($sharedContent)
    {
        $this->sharedContent = $sharedContent;
    }
}

