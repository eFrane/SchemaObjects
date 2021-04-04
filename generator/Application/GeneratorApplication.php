<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Application;

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Application;


final class GeneratorApplication
{
    public function __invoke()
    {
        $container = $this->boot();

        return $this->run($container);
    }

    /**
     * @return int
     * @throws \Exception
     */
    private function run(ContainerInterface $container): int
    {
        $consoleApplication = new Application('generator', '-void-');

        $consoleApplication->add($container->get(GenerateCommand::class));

        $consoleApplication->setDefaultCommand('generate');

        return $consoleApplication->run();
    }

    private function boot(): ContainerInterface
    {
        $containerBuilder = new ContainerBuilder();

        return $containerBuilder->build();
    }
}
