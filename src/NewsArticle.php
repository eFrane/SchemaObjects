<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A NewsArticle is an article whose content reports news, or provides background
 * context and supporting materials for understanding the news.
 *
 * A more detailed overview of [schema.org News markup](/docs/news.html) is also
 * available.
 */
class NewsArticle extends Article
{
    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     */
    private $printColumn;

    /**
     * A [dateline](https://en.wikipedia.org/wiki/Dateline) is a brief piece of text
     * included in news articles that describes where and when the story was written or
     * filed though the date is often omitted. Sometimes only a placename is provided.
     *
     * Structured representations of dateline-related information can also be expressed
     * more explicitly using [[locationCreated]] (which represents where a work was
     * created e.g. where a news report was written).  For location depicted or
     * described in the content, use [[contentLocation]].
     *
     * Dateline summaries are oriented more towards human readers than towards
     * automated processing, and can vary substantially. Some examples: "BEIRUT,
     * Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from
     * Washington", "Beijing/Moscow", "QUEZON CITY, Philippines".
     */
    private $dateline;

    /**
     * The edition of the print product in which the NewsArticle appears.
     */
    private $printEdition;

    /**
     * If this NewsArticle appears in print, this field indicates the print section in
     * which the article appeared.
     */
    private $printSection;

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page
     * on which the article is found. Please note that this field is intended for the
     * exact page name (e.g. A5, B18).
     */
    private $printPage;

    public function getPrintColumn()
    {
        return $this->printColumn;
    }

    public function setPrintColumn($printColumn)
    {
        $this->printColumn = $printColumn;
    }

    public function getDateline()
    {
        return $this->dateline;
    }

    public function setDateline($dateline)
    {
        $this->dateline = $dateline;
    }

    public function getPrintEdition()
    {
        return $this->printEdition;
    }

    public function setPrintEdition($printEdition)
    {
        $this->printEdition = $printEdition;
    }

    public function getPrintSection()
    {
        return $this->printSection;
    }

    public function setPrintSection($printSection)
    {
        $this->printSection = $printSection;
    }

    public function getPrintPage()
    {
        return $this->printPage;
    }

    public function setPrintPage($printPage)
    {
        $this->printPage = $printPage;
    }
}

