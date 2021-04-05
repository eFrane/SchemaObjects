<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Computer programming source code. Example: Full (compile ready) solutions, code
 * snippet samples, scripts, templates.
 */
class SoftwareSourceCode extends CreativeWork
{
    /**
     * Target Operating System / Product to which the code applies.  If applies to
     * several versions, just the product name can be used.
     */
    private $targetProduct;

    /**
     * Link to the repository where the un-compiled, human readable code and related
     * code is located (SVN, github, CodePlex).
     */
    private $codeRepository;

    /**
     * The computer programming language.
     */
    private $programmingLanguage;

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline
     * code, scripts, template.
     */
    private $sampleType;

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline
     * code, scripts, template.
     */
    private $codeSampleType;

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1,
     * Python2.3, .Net Framework 3.0).
     */
    private $runtime;

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1,
     * Python2.3, .Net Framework 3.0).
     */
    private $runtimePlatform;

    public function getTargetProduct()
    {
        return $this->targetProduct;
    }

    public function setTargetProduct($targetProduct)
    {
        $this->targetProduct = $targetProduct;
    }

    public function getCodeRepository()
    {
        return $this->codeRepository;
    }

    public function setCodeRepository($codeRepository)
    {
        $this->codeRepository = $codeRepository;
    }

    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }

    public function setProgrammingLanguage($programmingLanguage)
    {
        $this->programmingLanguage = $programmingLanguage;
    }

    public function getSampleType()
    {
        return $this->sampleType;
    }

    public function setSampleType($sampleType)
    {
        $this->sampleType = $sampleType;
    }

    public function getCodeSampleType()
    {
        return $this->codeSampleType;
    }

    public function setCodeSampleType($codeSampleType)
    {
        $this->codeSampleType = $codeSampleType;
    }

    public function getRuntime()
    {
        return $this->runtime;
    }

    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
    }

    public function getRuntimePlatform()
    {
        return $this->runtimePlatform;
    }

    public function setRuntimePlatform($runtimePlatform)
    {
        $this->runtimePlatform = $runtimePlatform;
    }
}

