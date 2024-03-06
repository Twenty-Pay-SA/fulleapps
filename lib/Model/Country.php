<?php
/**
 * Country
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
 * Country Class Doc Comment
 *
 * @category Class
 * @description Class Country
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Country implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Country';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '',
        'name' => '',
        'code' => '',
        'phone_code' => '',
        'flag' => '',
        'company_identification' => '',
        'tax_identification' => '',
        'activity_identification' => '',
        'default_language' => ''
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int',
        'name' => 'string',
        'code' => 'string',
        'phone_code' => 'string',
        'flag' => 'string',
        'company_identification' => 'string',
        'tax_identification' => 'string',
        'activity_identification' => 'string',
        'default_language' => 'string'
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
        'name' => 'name',
        'code' => 'code',
        'phone_code' => 'phone_code',
        'flag' => 'flag',
        'company_identification' => 'company_identification',
        'tax_identification' => 'tax_identification',
        'activity_identification' => 'activity_identification',
        'default_language' => 'default_language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'code' => 'setCode',
        'phone_code' => 'setPhoneCode',
        'flag' => 'setFlag',
        'company_identification' => 'setCompanyIdentification',
        'tax_identification' => 'setTaxIdentification',
        'activity_identification' => 'setActivityIdentification',
        'default_language' => 'setDefaultLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'code' => 'getCode',
        'phone_code' => 'getPhoneCode',
        'flag' => 'getFlag',
        'company_identification' => 'getCompanyIdentification',
        'tax_identification' => 'getTaxIdentification',
        'activity_identification' => 'getActivityIdentification',
        'default_language' => 'getDefaultLanguage'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['phone_code'] = isset($data['phone_code']) ? $data['phone_code'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['company_identification'] = isset($data['company_identification']) ? $data['company_identification'] : null;
        $this->container['tax_identification'] = isset($data['tax_identification']) ? $data['tax_identification'] : null;
        $this->container['activity_identification'] = isset($data['activity_identification']) ? $data['activity_identification'] : null;
        $this->container['default_language'] = isset($data['default_language']) ? $data['default_language'] : null;
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
     * Gets name
     *
     * @return 
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param  $name Nom du pays
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return 
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param  $code Code pays
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets phone_code
     *
     * @return 
     */
    public function getPhoneCode()
    {
        return $this->container['phone_code'];
    }

    /**
     * Sets phone_code
     *
     * @param  $phone_code Indicatif téléphone
     *
     * @return $this
     */
    public function setPhoneCode($phone_code)
    {
        $this->container['phone_code'] = $phone_code;

        return $this;
    }

    /**
     * Gets flag
     *
     * @return 
     */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
     * Sets flag
     *
     * @param  $flag Drapeau du pays (Base 64 Image)
     *
     * @return $this
     */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;

        return $this;
    }

    /**
     * Gets company_identification
     *
     * @return 
     */
    public function getCompanyIdentification()
    {
        return $this->container['company_identification'];
    }

    /**
     * Sets company_identification
     *
     * @param  $company_identification Dénominattion de l'identification société
     *
     * @return $this
     */
    public function setCompanyIdentification($company_identification)
    {
        $this->container['company_identification'] = $company_identification;

        return $this;
    }

    /**
     * Gets tax_identification
     *
     * @return 
     */
    public function getTaxIdentification()
    {
        return $this->container['tax_identification'];
    }

    /**
     * Sets tax_identification
     *
     * @param  $tax_identification Dénominattion de l'identification société taxe
     *
     * @return $this
     */
    public function setTaxIdentification($tax_identification)
    {
        $this->container['tax_identification'] = $tax_identification;

        return $this;
    }

    /**
     * Gets activity_identification
     *
     * @return 
     */
    public function getActivityIdentification()
    {
        return $this->container['activity_identification'];
    }

    /**
     * Sets activity_identification
     *
     * @param  $activity_identification Dénominattion de l'identification d'activité société
     *
     * @return $this
     */
    public function setActivityIdentification($activity_identification)
    {
        $this->container['activity_identification'] = $activity_identification;

        return $this;
    }

    /**
     * Gets default_language
     *
     * @return 
     */
    public function getDefaultLanguage()
    {
        return $this->container['default_language'];
    }

    /**
     * Sets default_language
     *
     * @param  $default_language Langue par défaut por le pays
     *
     * @return $this
     */
    public function setDefaultLanguage($default_language)
    {
        $this->container['default_language'] = $default_language;

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
