<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A means for accessing a service, e.g. a government office location, web site, or
 * phone number.
 */
class ServiceChannel extends Intangible
{
    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go
     * to access the service.
     */
    private $serviceLocation;

    /**
     * The address for accessing the service by mail.
     */
    private $servicePostalAddress;

    /**
     * The website to access the service.
     */
    private $serviceUrl;

    /**
     * Estimated processing time for the service using this channel.
     */
    private $processingTime;

    /**
     * The number to access the service by text message.
     */
    private $serviceSmsNumber;

    /**
     * The service provided by this channel.
     */
    private $providesService;

    /**
     * The phone number to use to access the service.
     */
    private $servicePhone;

    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    public function setServiceLocation($serviceLocation)
    {
        $this->serviceLocation = $serviceLocation;
    }

    public function getServicePostalAddress()
    {
        return $this->servicePostalAddress;
    }

    public function setServicePostalAddress($servicePostalAddress)
    {
        $this->servicePostalAddress = $servicePostalAddress;
    }

    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
    }

    public function getProcessingTime()
    {
        return $this->processingTime;
    }

    public function setProcessingTime($processingTime)
    {
        $this->processingTime = $processingTime;
    }

    public function getServiceSmsNumber()
    {
        return $this->serviceSmsNumber;
    }

    public function setServiceSmsNumber($serviceSmsNumber)
    {
        $this->serviceSmsNumber = $serviceSmsNumber;
    }

    public function getProvidesService()
    {
        return $this->providesService;
    }

    public function setProvidesService($providesService)
    {
        $this->providesService = $providesService;
    }

    public function getServicePhone()
    {
        return $this->servicePhone;
    }

    public function setServicePhone($servicePhone)
    {
        $this->servicePhone = $servicePhone;
    }
}

