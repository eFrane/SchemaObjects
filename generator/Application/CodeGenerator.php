<?php


namespace EFrane\SchemaObjects\Generator\Application;


use Doctrine\Inflector\InflectorFactory;
use Doctrine\Inflector\Language;
use EFrane\SchemaObjects\Generator\Schema\RdfsClass;
use EFrane\SchemaObjects\Generator\Schema\SchemaReader;
use Laminas\Code\DeclareStatement;
use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\FileGenerator;
use Laminas\Code\Generator\MethodGenerator;
use Laminas\Code\Generator\ParameterGenerator;
use Laminas\Code\Generator\PropertyGenerator;
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
        $inflector = InflectorFactory::createForLanguage(Language::ENGLISH)->build();

        $className = $classDefinition->getLabel();
        if (is_numeric($className[0])) {
            $className = '_'.$className;
        }

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

        foreach ($classDefinition->getProperties() as $propertyDefinition) {
            $propertyName = $propertyDefinition->getLabel();

            $class->addProperty($propertyName);
            $property = $class->getProperty($propertyName);

            $property->setDocBlock($propertyDefinition->getComment())
                ->setVisibility(PropertyGenerator::VISIBILITY_PRIVATE)
                ->omitDefaultValue();

            $getter = new MethodGenerator(sprintf('get%s', $inflector->classify($propertyName)));
            $getter->setVisibility(MethodGenerator::VISIBILITY_PUBLIC)
                ->setBody("return \$this->{$propertyName};");

            $class->addMethodFromGenerator($getter);

            $setter = new MethodGenerator(sprintf('set%s', $inflector->classify($propertyName)), ["{$propertyName}"]);
            $setter->setVisibility(MethodGenerator::VISIBILITY_PUBLIC)
                ->setBody("\$this->{$propertyName} = \${$propertyName};");

            $class->addMethodFromGenerator($setter);
        }

        $file->setClass($class);

        $generatedFile = $file->generate();

        file_put_contents($fileName, $generatedFile);
    }
}
