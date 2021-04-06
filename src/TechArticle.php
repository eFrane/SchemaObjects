<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A technical article - Example: How-to (task) topics, step-by-step, procedural
 * troubleshooting, specifications, etc.
 */
class TechArticle extends Article
{
    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     */
    private $proficiencyLevel;

    /**
     * Prerequisites needed to fulfill steps in article.
     */
    private $dependencies;

    public function getProficiencyLevel()
    {
        return $this->proficiencyLevel;
    }

    public function setProficiencyLevel($proficiencyLevel)
    {
        $this->proficiencyLevel = $proficiencyLevel;
    }

    public function getDependencies()
    {
        return $this->dependencies;
    }

    public function setDependencies($dependencies)
    {
        $this->dependencies = $dependencies;
    }
}

