<?php namespace nl\rabobank\gict\payments_savings\omnikassa_sdk\model\response;

/**
 * @package nl\rabobank\gict\payments_savings\omnikassa_sdk\model\response
 */
class AnnouncementResponse extends Response
{
    /** @var int */
    protected $poiId;
    /** @var string */
    protected $authentication;
    /** @var string */
    protected $expiry;
    /** @var string */
    protected $eventName;

    /**
     * @return int
     */
    public function getPoiId()
    {
        return $this->poiId;
    }

    /**
     * @param int $poiId
     */
    public function setPoiId($poiId)
    {
        $this->poiId = $poiId;
    }

    /**
     * @return string
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }

    /**
     * @param string $authentication
     */
    public function setAuthentication($authentication)
    {
        $this->authentication = $authentication;
    }

    /**
     * @return string
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * @param string $expiry
     */
    public function setExpiry($expiry)
    {
        $this->expiry = $expiry;
    }

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @param string $eventName
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @return array
     */
    public function getSignatureData()
    {
        return array($this->authentication, $this->expiry, $this->eventName, $this->poiId);
    }
}