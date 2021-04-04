<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Application;

use Symfony\Component\Console\Application;

final class GeneratorApplication
{
    public function __invoke()
    {
        $consoleApplication = new Application('generator', '-void-');

        $consoleApplication->add(new GenerateCommand(new CodeGenerator()));

        $consoleApplication->setDefaultCommand('generate');

        return $consoleApplication->run();
    }
}
