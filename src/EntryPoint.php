<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An entry point, within some Web-based protocol.
 */
class EntryPoint extends Intangible
{
    /**
     * The supported content type(s) for an EntryPoint response.
     */
    private $contentType;

    /**
     * The supported encoding type(s) for an EntryPoint request.
     */
    private $encodingType;

    /**
     * An application that can complete the request.
     */
    private $application;

    /**
     * An application that can complete the request.
     */
    private $actionApplication;

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to an
     * HTTP EntryPoint. Values are capitalized strings as used in HTTP.
     */
    private $httpMethod;

    /**
     * The high level platform(s) where the Action can be performed for the given URL.
     * To specify a specific application or operating system instance, use
     * actionApplication.
     */
    private $actionPlatform;

    /**
     * An url template (RFC6570) that will be used to construct the target of the
     * execution of the action.
     */
    private $urlTemplate;

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    public function getEncodingType()
    {
        return $this->encodingType;
    }

    public function setEncodingType($encodingType)
    {
        $this->encodingType = $encodingType;
    }

    public function getApplication()
    {
        return $this->application;
    }

    public function setApplication($application)
    {
        $this->application = $application;
    }

    public function getActionApplication()
    {
        return $this->actionApplication;
    }

    public function setActionApplication($actionApplication)
    {
        $this->actionApplication = $actionApplication;
    }

    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    public function setHttpMethod($httpMethod)
    {
        $this->httpMethod = $httpMethod;
    }

    public function getActionPlatform()
    {
        return $this->actionPlatform;
    }

    public function setActionPlatform($actionPlatform)
    {
        $this->actionPlatform = $actionPlatform;
    }

    public function getUrlTemplate()
    {
        return $this->urlTemplate;
    }

    public function setUrlTemplate($urlTemplate)
    {
        $this->urlTemplate = $urlTemplate;
    }
}

