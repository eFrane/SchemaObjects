<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An application programming interface accessible over Web/Internet technologies.
 */
class WebAPI extends Service
{
    /**
     * Further documentation describing the Web API in more detail.
     */
    private $documentation;

    public function getDocumentation()
    {
        return $this->documentation;
    }

    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
    }
}

