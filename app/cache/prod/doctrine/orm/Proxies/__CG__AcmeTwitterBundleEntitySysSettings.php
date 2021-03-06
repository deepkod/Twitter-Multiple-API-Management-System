<?php

namespace Proxies\__CG__\Acme\TwitterBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SysSettings extends \Acme\TwitterBundle\Entity\SysSettings implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'eId', 'adminUser', 'adminPass', 'siteTitle', 'siteHeader', 'siteFooter', 'normalKredi', 'paypalMail', 'otoTweet', 'otoFollowHesap', 'sysOnline', 'paketOnline', 'facebookPage', 'twitterPage', 'tumblrPage', 'googlePage', 'mainApi', 'sysLan', 'siteKeys', 'favicon', 'googleAnal', 'siteLogo', 'siteTitleBro', 'siteDesc', 'copyPlace', 'homeEntryPla', 'logWithTwitterBut', 'siteFea1', 'siteFea2', 'siteFea3', 'siteFea4', 'siteFea5', 'siteFea6', 'siteFea7', 'siteFea8', 'takeCreInfos', 'takeFolInfos', 'takeRetInfos', 'takeTweInfos');
        }

        return array('__isInitialized__', 'eId', 'adminUser', 'adminPass', 'siteTitle', 'siteHeader', 'siteFooter', 'normalKredi', 'paypalMail', 'otoTweet', 'otoFollowHesap', 'sysOnline', 'paketOnline', 'facebookPage', 'twitterPage', 'tumblrPage', 'googlePage', 'mainApi', 'sysLan', 'siteKeys', 'favicon', 'googleAnal', 'siteLogo', 'siteTitleBro', 'siteDesc', 'copyPlace', 'homeEntryPla', 'logWithTwitterBut', 'siteFea1', 'siteFea2', 'siteFea3', 'siteFea4', 'siteFea5', 'siteFea6', 'siteFea7', 'siteFea8', 'takeCreInfos', 'takeFolInfos', 'takeRetInfos', 'takeTweInfos');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SysSettings $proxy) {
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
    public function setAdminUser($adminUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminUser', array($adminUser));

        return parent::setAdminUser($adminUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminUser', array());

        return parent::getAdminUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdminPass($adminPass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminPass', array($adminPass));

        return parent::setAdminPass($adminPass);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminPass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminPass', array());

        return parent::getAdminPass();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteTitle($siteTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteTitle', array($siteTitle));

        return parent::setSiteTitle($siteTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteTitle', array());

        return parent::getSiteTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteHeader($siteHeader)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteHeader', array($siteHeader));

        return parent::setSiteHeader($siteHeader);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteHeader()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteHeader', array());

        return parent::getSiteHeader();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteFooter($siteFooter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteFooter', array($siteFooter));

        return parent::setSiteFooter($siteFooter);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteFooter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteFooter', array());

        return parent::getSiteFooter();
    }

    /**
     * {@inheritDoc}
     */
    public function setNormalKredi($normalKredi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNormalKredi', array($normalKredi));

        return parent::setNormalKredi($normalKredi);
    }

    /**
     * {@inheritDoc}
     */
    public function getNormalKredi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNormalKredi', array());

        return parent::getNormalKredi();
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
    public function setOtoTweet($otoTweet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOtoTweet', array($otoTweet));

        return parent::setOtoTweet($otoTweet);
    }

    /**
     * {@inheritDoc}
     */
    public function getOtoTweet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOtoTweet', array());

        return parent::getOtoTweet();
    }

    /**
     * {@inheritDoc}
     */
    public function setOtoFollowHesap($otoFollowHesap)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOtoFollowHesap', array($otoFollowHesap));

        return parent::setOtoFollowHesap($otoFollowHesap);
    }

    /**
     * {@inheritDoc}
     */
    public function getOtoFollowHesap()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOtoFollowHesap', array());

        return parent::getOtoFollowHesap();
    }

    /**
     * {@inheritDoc}
     */
    public function setSysOnline($sysOnline)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSysOnline', array($sysOnline));

        return parent::setSysOnline($sysOnline);
    }

    /**
     * {@inheritDoc}
     */
    public function getSysOnline()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSysOnline', array());

        return parent::getSysOnline();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaketOnline($paketOnline)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaketOnline', array($paketOnline));

        return parent::setPaketOnline($paketOnline);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaketOnline()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaketOnline', array());

        return parent::getPaketOnline();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacebookPage($facebookPage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacebookPage', array($facebookPage));

        return parent::setFacebookPage($facebookPage);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacebookPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacebookPage', array());

        return parent::getFacebookPage();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitterPage($twitterPage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitterPage', array($twitterPage));

        return parent::setTwitterPage($twitterPage);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitterPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitterPage', array());

        return parent::getTwitterPage();
    }

    /**
     * {@inheritDoc}
     */
    public function setTumblrPage($tumblrPage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTumblrPage', array($tumblrPage));

        return parent::setTumblrPage($tumblrPage);
    }

    /**
     * {@inheritDoc}
     */
    public function getTumblrPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTumblrPage', array());

        return parent::getTumblrPage();
    }

    /**
     * {@inheritDoc}
     */
    public function setGooglePage($googlePage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGooglePage', array($googlePage));

        return parent::setGooglePage($googlePage);
    }

    /**
     * {@inheritDoc}
     */
    public function getGooglePage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGooglePage', array());

        return parent::getGooglePage();
    }

    /**
     * {@inheritDoc}
     */
    public function setMainApi($mainApi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMainApi', array($mainApi));

        return parent::setMainApi($mainApi);
    }

    /**
     * {@inheritDoc}
     */
    public function getMainApi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainApi', array());

        return parent::getMainApi();
    }

    /**
     * {@inheritDoc}
     */
    public function setSysLan($sysLan)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSysLan', array($sysLan));

        return parent::setSysLan($sysLan);
    }

    /**
     * {@inheritDoc}
     */
    public function getSysLan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSysLan', array());

        return parent::getSysLan();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteKeys($siteKeys)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteKeys', array($siteKeys));

        return parent::setSiteKeys($siteKeys);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteKeys()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteKeys', array());

        return parent::getSiteKeys();
    }

    /**
     * {@inheritDoc}
     */
    public function setFavicon($favicon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFavicon', array($favicon));

        return parent::setFavicon($favicon);
    }

    /**
     * {@inheritDoc}
     */
    public function getFavicon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFavicon', array());

        return parent::getFavicon();
    }

    /**
     * {@inheritDoc}
     */
    public function setGoogleAnal($googleAnal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoogleAnal', array($googleAnal));

        return parent::setGoogleAnal($googleAnal);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoogleAnal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoogleAnal', array());

        return parent::getGoogleAnal();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteLogo($siteLogo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteLogo', array($siteLogo));

        return parent::setSiteLogo($siteLogo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteLogo', array());

        return parent::getSiteLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteTitleBro($siteTitleBro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteTitleBro', array($siteTitleBro));

        return parent::setSiteTitleBro($siteTitleBro);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteTitleBro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteTitleBro', array());

        return parent::getSiteTitleBro();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteDesc($siteDesc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteDesc', array($siteDesc));

        return parent::setSiteDesc($siteDesc);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteDesc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteDesc', array());

        return parent::getSiteDesc();
    }

    /**
     * {@inheritDoc}
     */
    public function setCopyPlace($copyPlace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCopyPlace', array($copyPlace));

        return parent::setCopyPlace($copyPlace);
    }

    /**
     * {@inheritDoc}
     */
    public function getCopyPlace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCopyPlace', array());

        return parent::getCopyPlace();
    }

    /**
     * {@inheritDoc}
     */
    public function setHomeEntryPla($homeEntryPla)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHomeEntryPla', array($homeEntryPla));

        return parent::setHomeEntryPla($homeEntryPla);
    }

    /**
     * {@inheritDoc}
     */
    public function getHomeEntryPla()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHomeEntryPla', array());

        return parent::getHomeEntryPla();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogWithTwitterBut($logWithTwitterBut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogWithTwitterBut', array($logWithTwitterBut));

        return parent::setLogWithTwitterBut($logWithTwitterBut);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogWithTwitterBut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogWithTwitterBut', array());

        return parent::getLogWithTwitterBut();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteFea1($siteFea1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteFea1', array($siteFea1));

        return parent::setSiteFea1($siteFea1);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteFea1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteFea1', array());

        return parent::getSiteFea1();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteFea2($siteFea2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteFea2', array($siteFea2));

        return parent::setSiteFea2($siteFea2);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteFea2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteFea2', array());

        return parent::getSiteFea2();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteFea3($siteFea3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteFea3', array($siteFea3));

        return parent::setSiteFea3($siteFea3);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteFea3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteFea3', array());

        return parent::getSiteFea3();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteFea4($siteFea4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteFea4', array($siteFea4));

        return parent::setSiteFea4($siteFea4);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteFea4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteFea4', array());

        return parent::getSiteFea4();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteFea5($siteFea5)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteFea5', array($siteFea5));

        return parent::setSiteFea5($siteFea5);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteFea5()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteFea5', array());

        return parent::getSiteFea5();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteFea6($siteFea6)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteFea6', array($siteFea6));

        return parent::setSiteFea6($siteFea6);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteFea6()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteFea6', array());

        return parent::getSiteFea6();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteFea7($siteFea7)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteFea7', array($siteFea7));

        return parent::setSiteFea7($siteFea7);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteFea7()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteFea7', array());

        return parent::getSiteFea7();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteFea8($siteFea8)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteFea8', array($siteFea8));

        return parent::setSiteFea8($siteFea8);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteFea8()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteFea8', array());

        return parent::getSiteFea8();
    }

    /**
     * {@inheritDoc}
     */
    public function setTakeCreInfos($takeCreInfos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTakeCreInfos', array($takeCreInfos));

        return parent::setTakeCreInfos($takeCreInfos);
    }

    /**
     * {@inheritDoc}
     */
    public function getTakeCreInfos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTakeCreInfos', array());

        return parent::getTakeCreInfos();
    }

    /**
     * {@inheritDoc}
     */
    public function setTakeFolInfos($takeFolInfos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTakeFolInfos', array($takeFolInfos));

        return parent::setTakeFolInfos($takeFolInfos);
    }

    /**
     * {@inheritDoc}
     */
    public function getTakeFolInfos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTakeFolInfos', array());

        return parent::getTakeFolInfos();
    }

    /**
     * {@inheritDoc}
     */
    public function setTakeRetInfos($takeRetInfos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTakeRetInfos', array($takeRetInfos));

        return parent::setTakeRetInfos($takeRetInfos);
    }

    /**
     * {@inheritDoc}
     */
    public function getTakeRetInfos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTakeRetInfos', array());

        return parent::getTakeRetInfos();
    }

    /**
     * {@inheritDoc}
     */
    public function setTakeTweInfos($takeTweInfos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTakeTweInfos', array($takeTweInfos));

        return parent::setTakeTweInfos($takeTweInfos);
    }

    /**
     * {@inheritDoc}
     */
    public function getTakeTweInfos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTakeTweInfos', array());

        return parent::getTakeTweInfos();
    }

    /**
     * {@inheritDoc}
     */
    public function getEId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getEId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEId', array());

        return parent::getEId();
    }

}
