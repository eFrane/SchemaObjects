<?php


namespace EFrane\SchemaObjects\Generator\Application;


use EFrane\SchemaObjects\Generator\Schema\RdfsClass;
use EFrane\SchemaObjects\Generator\Schema\SchemaReader;
use Laminas\Code\DeclareStatement;
use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\FileGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\OutputInterface;
use Webmozart\PathUtil\Path;

final class CodeGenerator
{
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
        $classDefinitions = $this->schemaReader->getClasses($config->getSchemaDefinitionFile());

        $definitionCount = count($classDefinitions);
        $output->writeln('Creating classes for '.$definitionCount.' type definitions');

        $progress = new ProgressBar($output, $definitionCount);
        $progress->start();

        foreach ($classDefinitions as $classDefinition) {
            $this->generateClass($classDefinition, $config);

            $progress->advance();
        }

        $progress->finish();

        $output->writeln('');

        return Command::SUCCESS;
    }

    private function generateClass(
        RdfsClass $classDefinition,
        GeneratorConfig $config
    ): void {
        $className = sprintf('%s', $classDefinition->getLabel());
        $fileName = Path::join($config->getOutputDir(), sprintf('%s.php', $className));

        $file = new FileGenerator();
        $file->setFilename($fileName);
        $file->setNamespace($config->getNamespace());
        $file->setDeclares([DeclareStatement::strictTypes(1)]);

        $class = new ClassGenerator($className, $config->getNamespace());

        $class->setDocBlock(new DocBlockGenerator($classDefinition->getComment()));

        if (!$classDefinition->isSubClass()) {
            $class->setExtendedClass('Type');
        } else {
            $class->setExtendedClass($classDefinition->getSubClassOf());
        }

        $file->setClass($class);

        $generatedFile = $file->generate();

        file_put_contents($fileName, $generatedFile);
    }
}
