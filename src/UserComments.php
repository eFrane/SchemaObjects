<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * UserInteraction and its subtypes is an old way of talking about users
 * interacting with pages. It is generally better to use [[Action]]-based
 * vocabulary, alongside types such as [[Comment]].
 */
class UserComments extends UserInteraction
{
    /**
     * The text of the UserComment.
     */
    private $commentText;

    /**
     * The URL at which a reply may be posted to the specified UserComment.
     */
    private $replyToUrl;

    /**
     * The time at which the UserComment was made.
     */
    private $commentTime;

    /**
     * Specifies the CreativeWork associated with the UserComment.
     */
    private $discusses;

    public function getCommentText()
    {
        return $this->commentText;
    }

    public function setCommentText($commentText)
    {
        $this->commentText = $commentText;
    }

    public function getReplyToUrl()
    {
        return $this->replyToUrl;
    }

    public function setReplyToUrl($replyToUrl)
    {
        $this->replyToUrl = $replyToUrl;
    }

    public function getCommentTime()
    {
        return $this->commentTime;
    }

    public function setCommentTime($commentTime)
    {
        $this->commentTime = $commentTime;
    }

    public function getDiscusses()
    {
        return $this->discusses;
    }

    public function setDiscusses($discusses)
    {
        $this->discusses = $discusses;
    }
}

