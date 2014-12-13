<?php

namespace Proxies\__CG__\Acme\TwitterBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SysApis extends \Acme\TwitterBundle\Entity\SysApis implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'apiKey', 'apiSecret', 'apiAccessLevel', 'apiOwnerName', 'apiOwnerId', 'apiOwnerAccessToken', 'apiOwnerTokenSecret', 'apiAddTime', 'apiTotalUser', 'apiLastUse', 'apiCreatedBy', 'apiName', 'apiDescription', 'apiWebsite', 'apiCallbackUrl', 'apiLogo', 'apiLogoutUrl', 'apiExtraInfo', 'apiId');
        }

        return array('__isInitialized__', 'apiKey', 'apiSecret', 'apiAccessLevel', 'apiOwnerName', 'apiOwnerId', 'apiOwnerAccessToken', 'apiOwnerTokenSecret', 'apiAddTime', 'apiTotalUser', 'apiLastUse', 'apiCreatedBy', 'apiName', 'apiDescription', 'apiWebsite', 'apiCallbackUrl', 'apiLogo', 'apiLogoutUrl', 'apiExtraInfo', 'apiId');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SysApis $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setApiKey($apiKey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiKey', array($apiKey));

        return parent::setApiKey($apiKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiKey', array());

        return parent::getApiKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiSecret($apiSecret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiSecret', array($apiSecret));

        return parent::setApiSecret($apiSecret);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiSecret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiSecret', array());

        return parent::getApiSecret();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiAccessLevel($apiAccessLevel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiAccessLevel', array($apiAccessLevel));

        return parent::setApiAccessLevel($apiAccessLevel);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiAccessLevel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiAccessLevel', array());

        return parent::getApiAccessLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiOwnerName($apiOwnerName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiOwnerName', array($apiOwnerName));

        return parent::setApiOwnerName($apiOwnerName);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiOwnerName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiOwnerName', array());

        return parent::getApiOwnerName();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiOwnerId($apiOwnerId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiOwnerId', array($apiOwnerId));

        return parent::setApiOwnerId($apiOwnerId);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiOwnerId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiOwnerId', array());

        return parent::getApiOwnerId();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiOwnerAccessToken($apiOwnerAccessToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiOwnerAccessToken', array($apiOwnerAccessToken));

        return parent::setApiOwnerAccessToken($apiOwnerAccessToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiOwnerAccessToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiOwnerAccessToken', array());

        return parent::getApiOwnerAccessToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiOwnerTokenSecret($apiOwnerTokenSecret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiOwnerTokenSecret', array($apiOwnerTokenSecret));

        return parent::setApiOwnerTokenSecret($apiOwnerTokenSecret);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiOwnerTokenSecret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiOwnerTokenSecret', array());

        return parent::getApiOwnerTokenSecret();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiAddTime($apiAddTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiAddTime', array($apiAddTime));

        return parent::setApiAddTime($apiAddTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiAddTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiAddTime', array());

        return parent::getApiAddTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiTotalUser($apiTotalUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiTotalUser', array($apiTotalUser));

        return parent::setApiTotalUser($apiTotalUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiTotalUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiTotalUser', array());

        return parent::getApiTotalUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiLastUse($apiLastUse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiLastUse', array($apiLastUse));

        return parent::setApiLastUse($apiLastUse);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiLastUse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiLastUse', array());

        return parent::getApiLastUse();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiCreatedBy($apiCreatedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiCreatedBy', array($apiCreatedBy));

        return parent::setApiCreatedBy($apiCreatedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiCreatedBy', array());

        return parent::getApiCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiName($apiName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiName', array($apiName));

        return parent::setApiName($apiName);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiName', array());

        return parent::getApiName();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiDescription($apiDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiDescription', array($apiDescription));

        return parent::setApiDescription($apiDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiDescription', array());

        return parent::getApiDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiWebsite($apiWebsite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiWebsite', array($apiWebsite));

        return parent::setApiWebsite($apiWebsite);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiWebsite', array());

        return parent::getApiWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiCallbackUrl($apiCallbackUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiCallbackUrl', array($apiCallbackUrl));

        return parent::setApiCallbackUrl($apiCallbackUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiCallbackUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiCallbackUrl', array());

        return parent::getApiCallbackUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiLogo($apiLogo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiLogo', array($apiLogo));

        return parent::setApiLogo($apiLogo);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiLogo', array());

        return parent::getApiLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiLogoutUrl($apiLogoutUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiLogoutUrl', array($apiLogoutUrl));

        return parent::setApiLogoutUrl($apiLogoutUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiLogoutUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiLogoutUrl', array());

        return parent::getApiLogoutUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiExtraInfo($apiExtraInfo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiExtraInfo', array($apiExtraInfo));

        return parent::setApiExtraInfo($apiExtraInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiExtraInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiExtraInfo', array());

        return parent::getApiExtraInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function getApiId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getApiId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiId', array());

        return parent::getApiId();
    }

}
