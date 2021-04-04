<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Application;


final class GeneratorConfig
{
    private ?string $schemaDefinitionFile;

    public function __construct(
        ?string $schemaDefinitionFile
    )
    {
        $this->schemaDefinitionFile = $schemaDefinitionFile;
    }

    public function getSchemaDefinitionFile(): string
    {
        return $this->schemaDefinitionFile ?? 'https://schema.org/version/latest/schemaorg-all-https.rdf';
    }
}
