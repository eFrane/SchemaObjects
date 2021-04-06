<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An article, such as a news article or piece of investigative report. Newspapers
 * and magazines have articles of many different types and this is intended to
 * cover them all.
 *
 * See also [blog
 * post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 */
class Article extends CreativeWork
{
    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such
     * as Sports, Lifestyle, etc.
     */
    private $articleSection;

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for
     * example, "1-6, 9, 55" or "10-12, 46-49".
     */
    private $pagination;

    /**
     * For an [[Article]], typically a [[NewsArticle]], the backstory property provides
     * a textual summary giving a brief explanation of why and how an article was
     * created. In a journalistic setting this could include information about
     * reporting process, methods, interviews, data sources, etc.
     */
    private $backstory;

    /**
     * The actual body of the article.
     */
    private $articleBody;

    /**
     * The number of words in the text of the Article.
     */
    private $wordCount;

    public function getArticleSection()
    {
        return $this->articleSection;
    }

    public function setArticleSection($articleSection)
    {
        $this->articleSection = $articleSection;
    }

    public function getPagination()
    {
        return $this->pagination;
    }

    public function setPagination($pagination)
    {
        $this->pagination = $pagination;
    }

    public function getBackstory()
    {
        return $this->backstory;
    }

    public function setBackstory($backstory)
    {
        $this->backstory = $backstory;
    }

    public function getArticleBody()
    {
        return $this->articleBody;
    }

    public function setArticleBody($articleBody)
    {
        $this->articleBody = $articleBody;
    }

    public function getWordCount()
    {
        return $this->wordCount;
    }

    public function setWordCount($wordCount)
    {
        $this->wordCount = $wordCount;
    }
}

