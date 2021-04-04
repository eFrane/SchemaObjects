<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Application;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    /**
     * @var CodeGenerator
     */
    private CodeGenerator $codeGenerator;

    public function __construct(CodeGenerator $codeGenerator)
    {
        parent::__construct('generate');

        $this->codeGenerator = $codeGenerator;
    }

    protected function configure()
    {
        $this->addOption(
            'schema-definition-file',
            's',
            InputOption::VALUE_REQUIRED,
            'Don\'t default to using the latest schema file'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $config = $this->parseInput($input);

        return $this->codeGenerator->update($config, $output);
    }

    private function parseInput(InputInterface $input): GeneratorConfig
    {
        $schemaDefinitionFile = null;
        if ($input->hasOption('schema-definition-file')) {
            $schemaDefinitionFile = $input->getOption('schema-definition-file');
        }

        return new GeneratorConfig(
            $schemaDefinitionFile
        );
    }
}
