<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A blog.
 */
class Blog extends CreativeWork
{
    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of, or
     * the linking ISSN (ISSN-L) for, this serial publication.
     */
    private $issn;

    /**
     * The postings that are part of this blog.
     */
    private $blogPosts;

    /**
     * A posting that is part of this blog.
     */
    private $blogPost;

    public function getIssn()
    {
        return $this->issn;
    }

    public function setIssn($issn)
    {
        $this->issn = $issn;
    }

    public function getBlogPosts()
    {
        return $this->blogPosts;
    }

    public function setBlogPosts($blogPosts)
    {
        $this->blogPosts = $blogPosts;
    }

    public function getBlogPost()
    {
        return $this->blogPost;
    }

    public function setBlogPost($blogPost)
    {
        $this->blogPost = $blogPost;
    }
}

