<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A comment on an item - for example, a comment on a blog post. The comment's
 * content is expressed via the [[text]] property, and its topic via [[about]],
 * properties shared with all CreativeWorks.
 */
class Comment extends CreativeWork
{
    /**
     * The number of upvotes this question, answer or comment has received from the
     * community.
     */
    private $upvoteCount;

    /**
     * The parent of a question, answer or item in general.
     */
    private $parentItem;

    /**
     * The number of downvotes this question, answer or comment has received from the
     * community.
     */
    private $downvoteCount;

    public function getUpvoteCount()
    {
        return $this->upvoteCount;
    }

    public function setUpvoteCount($upvoteCount)
    {
        $this->upvoteCount = $upvoteCount;
    }

    public function getParentItem()
    {
        return $this->parentItem;
    }

    public function setParentItem($parentItem)
    {
        $this->parentItem = $parentItem;
    }

    public function getDownvoteCount()
    {
        return $this->downvoteCount;
    }

    public function setDownvoteCount($downvoteCount)
    {
        $this->downvoteCount = $downvoteCount;
    }
}

