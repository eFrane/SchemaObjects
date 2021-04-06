<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Reference documentation for application programming interfaces (APIs).
 */
class APIReference extends TechArticle
{
    /**
     * Associated product/technology version. e.g., .NET Framework 4.5.
     */
    private $assemblyVersion;

    /**
     * Indicates whether API is managed or unmanaged.
     */
    private $programmingModel;

    /**
     * Library file name e.g., mscorlib.dll, system.web.dll.
     */
    private $assembly;

    /**
     * Library file name e.g., mscorlib.dll, system.web.dll.
     */
    private $executableLibraryName;

    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     */
    private $targetPlatform;

    public function getAssemblyVersion()
    {
        return $this->assemblyVersion;
    }

    public function setAssemblyVersion($assemblyVersion)
    {
        $this->assemblyVersion = $assemblyVersion;
    }

    public function getProgrammingModel()
    {
        return $this->programmingModel;
    }

    public function setProgrammingModel($programmingModel)
    {
        $this->programmingModel = $programmingModel;
    }

    public function getAssembly()
    {
        return $this->assembly;
    }

    public function setAssembly($assembly)
    {
        $this->assembly = $assembly;
    }

    public function getExecutableLibraryName()
    {
        return $this->executableLibraryName;
    }

    public function setExecutableLibraryName($executableLibraryName)
    {
        $this->executableLibraryName = $executableLibraryName;
    }

    public function getTargetPlatform()
    {
        return $this->targetPlatform;
    }

    public function setTargetPlatform($targetPlatform)
    {
        $this->targetPlatform = $targetPlatform;
    }
}

