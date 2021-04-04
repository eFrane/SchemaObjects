<?php


namespace EFrane\SchemaObjects\Generator\Application;


use EasyRdf\Graph;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use Webmozart\PathUtil\Path;

final class CodeGenerator
{
    /**
     * @var GeneratorConfig
     */
    private $generatorConfig;

    public function update(GeneratorConfig $config, OutputInterface $output): int
    {
        $this->generatorConfig = $config;

        $graph = $this->loadSchemaGraph();

        var_export($graph);

        return Command::SUCCESS;
    }

    private function loadSchemaGraph(): Graph
    {
        $graph = new Graph();

        $graphUrl = $this->generatorConfig->getSchemaDefinitionFile();

        is_file($graphUrl)
            ? $graph->parseFile($graphUrl, 'rdf')
            : $graph->load($graphUrl, 'rdf');

        return $graph;
    }
}
