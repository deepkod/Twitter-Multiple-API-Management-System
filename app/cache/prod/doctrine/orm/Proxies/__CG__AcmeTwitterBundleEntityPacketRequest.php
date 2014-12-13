<?php

namespace Proxies\__CG__\Acme\TwitterBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PacketRequest extends \Acme\TwitterBundle\Entity\PacketRequest implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'userMail', 'packetId', 'paypalMail', 'insertTime', 'isFinish', 'processValue', 'sentTime', 'paymentMail', 'packetType', 'userTwitterName', 'sendedTweetId', 'eid');
        }

        return array('__isInitialized__', 'userMail', 'packetId', 'paypalMail', 'insertTime', 'isFinish', 'processValue', 'sentTime', 'paymentMail', 'packetType', 'userTwitterName', 'sendedTweetId', 'eid');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PacketRequest $proxy) {
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
    public function setUserMail($userMail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserMail', array($userMail));

        return parent::setUserMail($userMail);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserMail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserMail', array());

        return parent::getUserMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPacketId($packetId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPacketId', array($packetId));

        return parent::setPacketId($packetId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPacketId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPacketId', array());

        return parent::getPacketId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaypalMail($paypalMail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaypalMail', array($paypalMail));

        return parent::setPaypalMail($paypalMail);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaypalMail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaypalMail', array());

        return parent::getPaypalMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setInsertTime($insertTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInsertTime', array($insertTime));

        return parent::setInsertTime($insertTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getInsertTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInsertTime', array());

        return parent::getInsertTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFinish($isFinish)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFinish', array($isFinish));

        return parent::setIsFinish($isFinish);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFinish()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFinish', array());

        return parent::getIsFinish();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcessValue($processValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcessValue', array($processValue));

        return parent::setProcessValue($processValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcessValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcessValue', array());

        return parent::getProcessValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setSentTime($sentTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSentTime', array($sentTime));

        return parent::setSentTime($sentTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getSentTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSentTime', array());

        return parent::getSentTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaymentMail($paymentMail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaymentMail', array($paymentMail));

        return parent::setPaymentMail($paymentMail);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentMail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentMail', array());

        return parent::getPaymentMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPacketType($packetType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPacketType', array($packetType));

        return parent::setPacketType($packetType);
    }

    /**
     * {@inheritDoc}
     */
    public function getPacketType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPacketType', array());

        return parent::getPacketType();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserTwitterName($userTwitterName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserTwitterName', array($userTwitterName));

        return parent::setUserTwitterName($userTwitterName);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserTwitterName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserTwitterName', array());

        return parent::getUserTwitterName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSendedTweetId($sendedTweetId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSendedTweetId', array($sendedTweetId));

        return parent::setSendedTweetId($sendedTweetId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSendedTweetId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSendedTweetId', array());

        return parent::getSendedTweetId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getEid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEid', array());

        return parent::getEid();
    }

}