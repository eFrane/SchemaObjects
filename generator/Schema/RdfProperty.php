<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Schema;

use EasyRdf\Resource;

final class RdfProperty extends Resource
{
    public function includesDomain(string $uri): bool
    {
        return $this->hasProperty('schema:domainIncludes')
            && $this->get('schema:domainIncludes')->getValue() === $uri;
    }
}
