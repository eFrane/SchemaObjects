<?php


namespace EFrane\SchemaObjects\Generator\Application;


use EFrane\SchemaObjects\Generator\Schema\SchemaReader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;

final class CodeGenerator
{
    /**
     * @var GeneratorConfig
     */
    private $generatorConfig;
    /**
     * @var SchemaReader
     */
    private SchemaReader $schemaReader;

    public function __construct(SchemaReader $schemaReader)
    {
        $this->schemaReader = $schemaReader;
    }

    public function update(GeneratorConfig $config, OutputInterface $output): int
    {
        $this->generatorConfig = $config;

        $classDefinitions = $this->schemaReader->getClasses($config->getSchemaDefinitionFile());

        $output->writeln('Creating classes for '.count($classDefinitions).' type definitions');

        return Command::SUCCESS;
    }
}
