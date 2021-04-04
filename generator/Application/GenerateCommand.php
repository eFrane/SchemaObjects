<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Application;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
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

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello world');

        return Command::SUCCESS;
    }
}
