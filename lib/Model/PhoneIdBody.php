<?php
/**
 * PhoneIdBody
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
 * PhoneIdBody Class Doc Comment
 *
 * @category Class
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhoneIdBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'phone_id_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'old_phone' => '',
        'old_phone_country' => '',
        'new_phone' => '',
        'new_phone_country' => ''
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'old_phone' => 'string',
        'old_phone_country' => 'string',
        'new_phone' => 'string',
        'new_phone_country' => 'string'
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
        'old_phone' => 'old_phone',
        'old_phone_country' => 'old_phone_country',
        'new_phone' => 'new_phone',
        'new_phone_country' => 'new_phone_country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'old_phone' => 'setOldPhone',
        'old_phone_country' => 'setOldPhoneCountry',
        'new_phone' => 'setNewPhone',
        'new_phone_country' => 'setNewPhoneCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'old_phone' => 'getOldPhone',
        'old_phone_country' => 'getOldPhoneCountry',
        'new_phone' => 'getNewPhone',
        'new_phone_country' => 'getNewPhoneCountry'
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
        $this->container['old_phone'] = isset($data['old_phone']) ? $data['old_phone'] : null;
        $this->container['old_phone_country'] = isset($data['old_phone_country']) ? $data['old_phone_country'] : null;
        $this->container['new_phone'] = isset($data['new_phone']) ? $data['new_phone'] : null;
        $this->container['new_phone_country'] = isset($data['new_phone_country']) ? $data['new_phone_country'] : null;
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
     * Gets old_phone
     *
     * @return 
     */
    public function getOldPhone()
    {
        return $this->container['old_phone'];
    }

    /**
     * Sets old_phone
     *
     * @param  $old_phone Old phone number
     *
     * @return $this
     */
    public function setOldPhone($old_phone)
    {
        $this->container['old_phone'] = $old_phone;

        return $this;
    }

    /**
     * Gets old_phone_country
     *
     * @return 
     */
    public function getOldPhoneCountry()
    {
        return $this->container['old_phone_country'];
    }

    /**
     * Sets old_phone_country
     *
     * @param  $old_phone_country Old phone country
     *
     * @return $this
     */
    public function setOldPhoneCountry($old_phone_country)
    {
        $this->container['old_phone_country'] = $old_phone_country;

        return $this;
    }

    /**
     * Gets new_phone
     *
     * @return 
     */
    public function getNewPhone()
    {
        return $this->container['new_phone'];
    }

    /**
     * Sets new_phone
     *
     * @param  $new_phone New phone number
     *
     * @return $this
     */
    public function setNewPhone($new_phone)
    {
        $this->container['new_phone'] = $new_phone;

        return $this;
    }

    /**
     * Gets new_phone_country
     *
     * @return 
     */
    public function getNewPhoneCountry()
    {
        return $this->container['new_phone_country'];
    }

    /**
     * Sets new_phone_country
     *
     * @param  $new_phone_country New phone country
     *
     * @return $this
     */
    public function setNewPhoneCountry($new_phone_country)
    {
        $this->container['new_phone_country'] = $new_phone_country;

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
