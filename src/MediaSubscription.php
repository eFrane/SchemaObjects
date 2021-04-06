<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A subscription which allows a user to access media including audio, video,
 * books, etc.
 */
class MediaSubscription extends Intangible
{
    /**
     * The Organization responsible for authenticating the user's subscription. For
     * example, many media apps require a cable/satellite provider to authenticate your
     * subscription before playing media.
     */
    private $authenticator;

    public function getAuthenticator()
    {
        return $this->authenticator;
    }

    public function setAuthenticator($authenticator)
    {
        $this->authenticator = $authenticator;
    }
}

