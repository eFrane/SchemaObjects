<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Schema;


use EasyRdf\Graph;
use EasyRdf\RdfNamespace;
use EasyRdf\TypeMapper;

class SchemaReader
{
    /**
     * @return RdfsClass[]
     */
    public function getClasses(string $schemaUri): array
    {
        $this->configureTypeMapper();
        $graph = $this->loadSchemaGraph($schemaUri);

        $classes = $this->loadClasses($graph);

        foreach ($graph->allOfType('rdf:Property') as $rdfsProperty) {
            /** @var RdfProperty $rdfsProperty */
            $domain = $rdfsProperty->get('schema:domainIncludes');
            if (!is_null($domain)) {
                $class = $classes[$domain->getUri()];

                $class->addProperty($rdfsProperty);
            }
        }

        return $classes;
    }

    private function loadSchemaGraph(string $schemaUri): Graph
    {
        RdfNamespace::set('schema', 'https://schema.org/');

        $graph = new Graph();

        is_file($schemaUri)
            ? $graph->parseFile($schemaUri, 'rdf')
            : $graph->load($schemaUri, 'rdf');

        return $graph;
    }

    /**
     * @param Graph $graph
     *
     * @return RdfsClass[]
     */
    private function loadClasses(Graph $graph): array
    {
        $classes = [];
        foreach ($graph->allOfType('rdfs:Class') as $rdfsClass) {
            /** @var RdfsClass $rdfsClass */
            $classes[$rdfsClass->getUri()] = $rdfsClass;
        }

        return $classes;
    }

    private function configureTypeMapper(): void
    {
        TypeMapper::set('rdfs:Class', RdfsClass::class);
        TypeMapper::set('rdf:Property', RdfProperty::class);
    }
}
