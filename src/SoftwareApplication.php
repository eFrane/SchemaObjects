<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A software application.
 */
class SoftwareApplication extends CreativeWork
{
    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     */
    private $applicationSubCategory;

    /**
     * Countries for which the application is supported. You can also provide the
     * two-letter ISO 3166-1 alpha-2 country code.
     */
    private $countriesSupported;

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     */
    private $applicationCategory;

    /**
     * Additional content for a software application.
     */
    private $softwareAddOn;

    /**
     * The name of the application suite to which the application belongs (e.g. Excel
     * belongs to Office).
     */
    private $applicationSuite;

    /**
     * Countries for which the application is not supported. You can also provide the
     * two-letter ISO 3166-1 alpha-2 country code.
     */
    private $countriesNotSupported;

    /**
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     */
    private $device;

    /**
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     */
    private $availableOnDevice;

    /**
     * Component dependency requirements for application. This includes runtime
     * environments and shared libraries that are not included in the application
     * distribution package, but required to run the application (Examples: DirectX,
     * Java or .NET runtime).
     */
    private $requirements;

    /**
     * Component dependency requirements for application. This includes runtime
     * environments and shared libraries that are not included in the application
     * distribution package, but required to run the application (Examples: DirectX,
     * Java or .NET runtime).
     */
    private $softwareRequirements;

    /**
     * Features or modules provided by this application (and possibly required by other
     * applications).
     */
    private $featureList;

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     */
    private $installUrl;

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB
     * etc.), KB will be assumed.
     */
    private $fileSize;

    /**
     * Minimum memory requirements.
     */
    private $memoryRequirements;

    /**
     * If the file can be downloaded, URL to download the binary.
     */
    private $downloadUrl;

    /**
     * Software application help.
     */
    private $softwareHelp;

    /**
     * Storage requirements (free space required).
     */
    private $storageRequirements;

    /**
     * Supporting data for a SoftwareApplication.
     */
    private $supportingData;

    /**
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     */
    private $operatingSystem;

    /**
     * A link to a screenshot image of the app.
     */
    private $screenshot;

    /**
     * Version of the software instance.
     */
    private $softwareVersion;

    /**
     * Permission(s) required to run the app (for example, a mobile app may require
     * full internet access or may run only on wifi).
     */
    private $permissions;

    /**
     * Description of what changed in this version.
     */
    private $releaseNotes;

    /**
     * Processor architecture required to run the application (e.g. IA64).
     */
    private $processorRequirements;

    public function getApplicationSubCategory()
    {
        return $this->applicationSubCategory;
    }

    public function setApplicationSubCategory($applicationSubCategory)
    {
        $this->applicationSubCategory = $applicationSubCategory;
    }

    public function getCountriesSupported()
    {
        return $this->countriesSupported;
    }

    public function setCountriesSupported($countriesSupported)
    {
        $this->countriesSupported = $countriesSupported;
    }

    public function getApplicationCategory()
    {
        return $this->applicationCategory;
    }

    public function setApplicationCategory($applicationCategory)
    {
        $this->applicationCategory = $applicationCategory;
    }

    public function getSoftwareAddOn()
    {
        return $this->softwareAddOn;
    }

    public function setSoftwareAddOn($softwareAddOn)
    {
        $this->softwareAddOn = $softwareAddOn;
    }

    public function getApplicationSuite()
    {
        return $this->applicationSuite;
    }

    public function setApplicationSuite($applicationSuite)
    {
        $this->applicationSuite = $applicationSuite;
    }

    public function getCountriesNotSupported()
    {
        return $this->countriesNotSupported;
    }

    public function setCountriesNotSupported($countriesNotSupported)
    {
        $this->countriesNotSupported = $countriesNotSupported;
    }

    public function getDevice()
    {
        return $this->device;
    }

    public function setDevice($device)
    {
        $this->device = $device;
    }

    public function getAvailableOnDevice()
    {
        return $this->availableOnDevice;
    }

    public function setAvailableOnDevice($availableOnDevice)
    {
        $this->availableOnDevice = $availableOnDevice;
    }

    public function getRequirements()
    {
        return $this->requirements;
    }

    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
    }

    public function getSoftwareRequirements()
    {
        return $this->softwareRequirements;
    }

    public function setSoftwareRequirements($softwareRequirements)
    {
        $this->softwareRequirements = $softwareRequirements;
    }

    public function getFeatureList()
    {
        return $this->featureList;
    }

    public function setFeatureList($featureList)
    {
        $this->featureList = $featureList;
    }

    public function getInstallUrl()
    {
        return $this->installUrl;
    }

    public function setInstallUrl($installUrl)
    {
        $this->installUrl = $installUrl;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    public function getMemoryRequirements()
    {
        return $this->memoryRequirements;
    }

    public function setMemoryRequirements($memoryRequirements)
    {
        $this->memoryRequirements = $memoryRequirements;
    }

    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }

    public function getSoftwareHelp()
    {
        return $this->softwareHelp;
    }

    public function setSoftwareHelp($softwareHelp)
    {
        $this->softwareHelp = $softwareHelp;
    }

    public function getStorageRequirements()
    {
        return $this->storageRequirements;
    }

    public function setStorageRequirements($storageRequirements)
    {
        $this->storageRequirements = $storageRequirements;
    }

    public function getSupportingData()
    {
        return $this->supportingData;
    }

    public function setSupportingData($supportingData)
    {
        $this->supportingData = $supportingData;
    }

    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    public function setOperatingSystem($operatingSystem)
    {
        $this->operatingSystem = $operatingSystem;
    }

    public function getScreenshot()
    {
        return $this->screenshot;
    }

    public function setScreenshot($screenshot)
    {
        $this->screenshot = $screenshot;
    }

    public function getSoftwareVersion()
    {
        return $this->softwareVersion;
    }

    public function setSoftwareVersion($softwareVersion)
    {
        $this->softwareVersion = $softwareVersion;
    }

    public function getPermissions()
    {
        return $this->permissions;
    }

    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    public function getReleaseNotes()
    {
        return $this->releaseNotes;
    }

    public function setReleaseNotes($releaseNotes)
    {
        $this->releaseNotes = $releaseNotes;
    }

    public function getProcessorRequirements()
    {
        return $this->processorRequirements;
    }

    public function setProcessorRequirements($processorRequirements)
    {
        $this->processorRequirements = $processorRequirements;
    }
}

