<?php
/**
 * Account
 *
 * PHP version 5
 *
 * @category Class
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fulle API
 *
 * <strong>IMPORTANT !<br/>Les requetes externes vers l'API sont susceptibles d'être interrompues en cas de trafic fort sur le serveur !<br/>  Pour éviter ce genre de contraintes, nous pouvons vous intégrer dans notre programme partenaire et vous définir un identifiant Partner, afin de permettre une disponibilité continue de l'API.<br/>  L'identifiant Partner sera à insérer dans un header 'X-Api-Key' : '%ID_PARTNER%'</strong><br/><br/> Pour utiliser l'API en externe, vous devez utiliser la clé utilisateur unique de votre compte commerçant.<br/> Cette clé est disponible à la demande auprés de votre revendeur.<br/> Une fois la clé obtenue, utilisez celle ci dans un header Authorization afin de récupérer et gérer les données de compte via notre API REST.<br/> Pour utiliser l'API avec votre clé, voici un exemple du header à placer : <br/> 'Authorization' : 'Mutual %CLE_UTILISATEUR%'<br/>
 *
 * OpenAPI spec version: 1.0
 * Contact: contact@fulleapps.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.52
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Qwenta\Fulleapps\Model;

use \ArrayAccess;
use \Qwenta\Fulleapps\ObjectSerializer;

/**
 * Account Class Doc Comment
 *
 * @category Class
 * @description Class Account
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '',
        'activate' => '',
        'is_trial' => '',
        'id_activity' => '',
        'people_attribute' => '',
        'table_attribute' => '',
        'id_agency' => '',
        'accountant_code' => '',
        'id_stripe_subscription' => '',
        'inscription' => '',
        'expiration' => '',
        'denomination' => '\Qwenta\Fulleapps\Model\AccountDenomination',
        'mail' => '',
        'mail_subscription' => '',
        'firstname' => '\Qwenta\Fulleapps\Model\AccountFirstname',
        'lastname' => '\Qwenta\Fulleapps\Model\AccountLastname',
        'address' => '\Qwenta\Fulleapps\Model\AccountAddress',
        'postal' => '\Qwenta\Fulleapps\Model\AccountPostal',
        'city' => '\Qwenta\Fulleapps\Model\AccountCity',
        'website' => '\Qwenta\Fulleapps\Model\AccountWebsite',
        'reference' => '',
        'webhook' => '\Qwenta\Fulleapps\Model\AccountWebhook',
        'mobile' => '\Qwenta\Fulleapps\Model\AccountMobile',
        'max_devices' => '',
        'country' => '\Qwenta\Fulleapps\Model\Country',
        'currency' => '\Qwenta\Fulleapps\Model\Currency',
        'licence' => '\Qwenta\Fulleapps\Model\Licence',
        'resaler' => '\Qwenta\Fulleapps\Model\Resaler'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int',
        'activate' => 'int',
        'is_trial' => 'boolean',
        'id_activity' => 'int',
        'people_attribute' => 'int',
        'table_attribute' => 'int',
        'id_agency' => 'int',
        'accountant_code' => 'string',
        'id_stripe_subscription' => 'string',
        'inscription' => 'string',
        'expiration' => 'string',
        'denomination' => null,
        'mail' => 'string',
        'mail_subscription' => 'string',
        'firstname' => null,
        'lastname' => null,
        'address' => null,
        'postal' => null,
        'city' => null,
        'website' => null,
        'reference' => 'string',
        'webhook' => null,
        'mobile' => null,
        'max_devices' => 'string',
        'country' => null,
        'currency' => null,
        'licence' => null,
        'resaler' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'activate' => 'activate',
        'is_trial' => 'is_trial',
        'id_activity' => 'id_activity',
        'people_attribute' => 'people_attribute',
        'table_attribute' => 'table_attribute',
        'id_agency' => 'id_agency',
        'accountant_code' => 'accountant_code',
        'id_stripe_subscription' => 'id_stripe_subscription',
        'inscription' => 'inscription',
        'expiration' => 'expiration',
        'denomination' => 'denomination',
        'mail' => 'mail',
        'mail_subscription' => 'mail_subscription',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'address' => 'address',
        'postal' => 'postal',
        'city' => 'city',
        'website' => 'website',
        'reference' => 'reference',
        'webhook' => 'webhook',
        'mobile' => 'mobile',
        'max_devices' => 'max_devices',
        'country' => 'country',
        'currency' => 'currency',
        'licence' => 'licence',
        'resaler' => 'resaler'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'activate' => 'setActivate',
        'is_trial' => 'setIsTrial',
        'id_activity' => 'setIdActivity',
        'people_attribute' => 'setPeopleAttribute',
        'table_attribute' => 'setTableAttribute',
        'id_agency' => 'setIdAgency',
        'accountant_code' => 'setAccountantCode',
        'id_stripe_subscription' => 'setIdStripeSubscription',
        'inscription' => 'setInscription',
        'expiration' => 'setExpiration',
        'denomination' => 'setDenomination',
        'mail' => 'setMail',
        'mail_subscription' => 'setMailSubscription',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'address' => 'setAddress',
        'postal' => 'setPostal',
        'city' => 'setCity',
        'website' => 'setWebsite',
        'reference' => 'setReference',
        'webhook' => 'setWebhook',
        'mobile' => 'setMobile',
        'max_devices' => 'setMaxDevices',
        'country' => 'setCountry',
        'currency' => 'setCurrency',
        'licence' => 'setLicence',
        'resaler' => 'setResaler'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'activate' => 'getActivate',
        'is_trial' => 'getIsTrial',
        'id_activity' => 'getIdActivity',
        'people_attribute' => 'getPeopleAttribute',
        'table_attribute' => 'getTableAttribute',
        'id_agency' => 'getIdAgency',
        'accountant_code' => 'getAccountantCode',
        'id_stripe_subscription' => 'getIdStripeSubscription',
        'inscription' => 'getInscription',
        'expiration' => 'getExpiration',
        'denomination' => 'getDenomination',
        'mail' => 'getMail',
        'mail_subscription' => 'getMailSubscription',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'address' => 'getAddress',
        'postal' => 'getPostal',
        'city' => 'getCity',
        'website' => 'getWebsite',
        'reference' => 'getReference',
        'webhook' => 'getWebhook',
        'mobile' => 'getMobile',
        'max_devices' => 'getMaxDevices',
        'country' => 'getCountry',
        'currency' => 'getCurrency',
        'licence' => 'getLicence',
        'resaler' => 'getResaler'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['activate'] = isset($data['activate']) ? $data['activate'] : null;
        $this->container['is_trial'] = isset($data['is_trial']) ? $data['is_trial'] : null;
        $this->container['id_activity'] = isset($data['id_activity']) ? $data['id_activity'] : null;
        $this->container['people_attribute'] = isset($data['people_attribute']) ? $data['people_attribute'] : null;
        $this->container['table_attribute'] = isset($data['table_attribute']) ? $data['table_attribute'] : null;
        $this->container['id_agency'] = isset($data['id_agency']) ? $data['id_agency'] : null;
        $this->container['accountant_code'] = isset($data['accountant_code']) ? $data['accountant_code'] : null;
        $this->container['id_stripe_subscription'] = isset($data['id_stripe_subscription']) ? $data['id_stripe_subscription'] : null;
        $this->container['inscription'] = isset($data['inscription']) ? $data['inscription'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['denomination'] = isset($data['denomination']) ? $data['denomination'] : null;
        $this->container['mail'] = isset($data['mail']) ? $data['mail'] : null;
        $this->container['mail_subscription'] = isset($data['mail_subscription']) ? $data['mail_subscription'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['postal'] = isset($data['postal']) ? $data['postal'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['webhook'] = isset($data['webhook']) ? $data['webhook'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['max_devices'] = isset($data['max_devices']) ? $data['max_devices'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['licence'] = isset($data['licence']) ? $data['licence'] : null;
        $this->container['resaler'] = isset($data['resaler']) ? $data['resaler'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return 
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param  $id Identifiant
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets activate
     *
     * @return 
     */
    public function getActivate()
    {
        return $this->container['activate'];
    }

    /**
     * Sets activate
     *
     * @param  $activate Niveau d'activation du compte
     *
     * @return $this
     */
    public function setActivate($activate)
    {
        $this->container['activate'] = $activate;

        return $this;
    }

    /**
     * Gets is_trial
     *
     * @return 
     */
    public function getIsTrial()
    {
        return $this->container['is_trial'];
    }

    /**
     * Sets is_trial
     *
     * @param  $is_trial Compte en période d'essai
     *
     * @return $this
     */
    public function setIsTrial($is_trial)
    {
        $this->container['is_trial'] = $is_trial;

        return $this;
    }

    /**
     * Gets id_activity
     *
     * @return 
     */
    public function getIdActivity()
    {
        return $this->container['id_activity'];
    }

    /**
     * Sets id_activity
     *
     * @param  $id_activity Identifiant du type d'activité du compte
     *
     * @return $this
     */
    public function setIdActivity($id_activity)
    {
        $this->container['id_activity'] = $id_activity;

        return $this;
    }

    /**
     * Gets people_attribute
     *
     * @return 
     */
    public function getPeopleAttribute()
    {
        return $this->container['people_attribute'];
    }

    /**
     * Sets people_attribute
     *
     * @param  $people_attribute Identifiant de l'information Couverts
     *
     * @return $this
     */
    public function setPeopleAttribute($people_attribute)
    {
        $this->container['people_attribute'] = $people_attribute;

        return $this;
    }

    /**
     * Gets table_attribute
     *
     * @return 
     */
    public function getTableAttribute()
    {
        return $this->container['table_attribute'];
    }

    /**
     * Sets table_attribute
     *
     * @param  $table_attribute Identifiant de l'information Table
     *
     * @return $this
     */
    public function setTableAttribute($table_attribute)
    {
        $this->container['table_attribute'] = $table_attribute;

        return $this;
    }

    /**
     * Gets id_agency
     *
     * @return 
     */
    public function getIdAgency()
    {
        return $this->container['id_agency'];
    }

    /**
     * Sets id_agency
     *
     * @param  $id_agency Identifiant de l'agence associée
     *
     * @return $this
     */
    public function setIdAgency($id_agency)
    {
        $this->container['id_agency'] = $id_agency;

        return $this;
    }

    /**
     * Gets accountant_code
     *
     * @return 
     */
    public function getAccountantCode()
    {
        return $this->container['accountant_code'];
    }

    /**
     * Sets accountant_code
     *
     * @param  $accountant_code N° de code comptable associé au compte
     *
     * @return $this
     */
    public function setAccountantCode($accountant_code)
    {
        $this->container['accountant_code'] = $accountant_code;

        return $this;
    }

    /**
     * Gets id_stripe_subscription
     *
     * @return 
     */
    public function getIdStripeSubscription()
    {
        return $this->container['id_stripe_subscription'];
    }

    /**
     * Sets id_stripe_subscription
     *
     * @param  $id_stripe_subscription Identifiant de souscription Stripe
     *
     * @return $this
     */
    public function setIdStripeSubscription($id_stripe_subscription)
    {
        $this->container['id_stripe_subscription'] = $id_stripe_subscription;

        return $this;
    }

    /**
     * Gets inscription
     *
     * @return 
     */
    public function getInscription()
    {
        return $this->container['inscription'];
    }

    /**
     * Sets inscription
     *
     * @param  $inscription Date de création du compte
     *
     * @return $this
     */
    public function setInscription($inscription)
    {
        $this->container['inscription'] = $inscription;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return 
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param  $expiration Date d'expiration du compte (renouvellé automatiquement si une souscription est en cours)
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets denomination
     *
     * @return \Qwenta\Fulleapps\Model\AccountDenomination
     */
    public function getDenomination()
    {
        return $this->container['denomination'];
    }

    /**
     * Sets denomination
     *
     * @param \Qwenta\Fulleapps\Model\AccountDenomination $denomination denomination
     *
     * @return $this
     */
    public function setDenomination($denomination)
    {
        $this->container['denomination'] = $denomination;

        return $this;
    }

    /**
     * Gets mail
     *
     * @return 
     */
    public function getMail()
    {
        return $this->container['mail'];
    }

    /**
     * Sets mail
     *
     * @param  $mail Mail associé au compte
     *
     * @return $this
     */
    public function setMail($mail)
    {
        $this->container['mail'] = $mail;

        return $this;
    }

    /**
     * Gets mail_subscription
     *
     * @return 
     */
    public function getMailSubscription()
    {
        return $this->container['mail_subscription'];
    }

    /**
     * Sets mail_subscription
     *
     * @param  $mail_subscription Mail d'envoi des informations de souscription
     *
     * @return $this
     */
    public function setMailSubscription($mail_subscription)
    {
        $this->container['mail_subscription'] = $mail_subscription;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return \Qwenta\Fulleapps\Model\AccountFirstname
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param \Qwenta\Fulleapps\Model\AccountFirstname $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return \Qwenta\Fulleapps\Model\AccountLastname
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param \Qwenta\Fulleapps\Model\AccountLastname $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Qwenta\Fulleapps\Model\AccountAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Qwenta\Fulleapps\Model\AccountAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets postal
     *
     * @return \Qwenta\Fulleapps\Model\AccountPostal
     */
    public function getPostal()
    {
        return $this->container['postal'];
    }

    /**
     * Sets postal
     *
     * @param \Qwenta\Fulleapps\Model\AccountPostal $postal postal
     *
     * @return $this
     */
    public function setPostal($postal)
    {
        $this->container['postal'] = $postal;

        return $this;
    }

    /**
     * Gets city
     *
     * @return \Qwenta\Fulleapps\Model\AccountCity
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param \Qwenta\Fulleapps\Model\AccountCity $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets website
     *
     * @return \Qwenta\Fulleapps\Model\AccountWebsite
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param \Qwenta\Fulleapps\Model\AccountWebsite $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return 
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param  $reference Référence interne du compte
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets webhook
     *
     * @return \Qwenta\Fulleapps\Model\AccountWebhook
     */
    public function getWebhook()
    {
        return $this->container['webhook'];
    }

    /**
     * Sets webhook
     *
     * @param \Qwenta\Fulleapps\Model\AccountWebhook $webhook webhook
     *
     * @return $this
     */
    public function setWebhook($webhook)
    {
        $this->container['webhook'] = $webhook;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return \Qwenta\Fulleapps\Model\AccountMobile
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param \Qwenta\Fulleapps\Model\AccountMobile $mobile mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets max_devices
     *
     * @return 
     */
    public function getMaxDevices()
    {
        return $this->container['max_devices'];
    }

    /**
     * Sets max_devices
     *
     * @param  $max_devices Nombre d'appareils autorisés sur le compte
     *
     * @return $this
     */
    public function setMaxDevices($max_devices)
    {
        $this->container['max_devices'] = $max_devices;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Qwenta\Fulleapps\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Qwenta\Fulleapps\Model\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Qwenta\Fulleapps\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Qwenta\Fulleapps\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets licence
     *
     * @return \Qwenta\Fulleapps\Model\Licence
     */
    public function getLicence()
    {
        return $this->container['licence'];
    }

    /**
     * Sets licence
     *
     * @param \Qwenta\Fulleapps\Model\Licence $licence licence
     *
     * @return $this
     */
    public function setLicence($licence)
    {
        $this->container['licence'] = $licence;

        return $this;
    }

    /**
     * Gets resaler
     *
     * @return \Qwenta\Fulleapps\Model\Resaler
     */
    public function getResaler()
    {
        return $this->container['resaler'];
    }

    /**
     * Sets resaler
     *
     * @param \Qwenta\Fulleapps\Model\Resaler $resaler resaler
     *
     * @return $this
     */
    public function setResaler($resaler)
    {
        $this->container['resaler'] = $resaler;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
