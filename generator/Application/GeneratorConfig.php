<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Application;


use Webmozart\PathUtil\Path;

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

    public function getOutputDir(): string
    {
        return Path::join(dirname(__DIR__, 2), 'src');
    }

    public function getNamespace(): string
    {
        return 'EFrane\\SchemaObjects';
    }
}
