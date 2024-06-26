<?php
/**
 * Attribute
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
 * Attribute Class Doc Comment
 *
 * @category Class
 * @description Class Attribute
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Attribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Attribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '',
        'name' => '',
        'archive' => '',
        'is_average' => '',
        'is_numeric' => '',
        'is_phone' => '',
        'value' => '',
        'sale_methods' => '\Qwenta\Fulleapps\Model\AttributeSaleMethods'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int',
        'name' => 'string',
        'archive' => 'int',
        'is_average' => 'int',
        'is_numeric' => 'int',
        'is_phone' => 'int',
        'value' => 'string',
        'sale_methods' => null
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
        'archive' => 'archive',
        'is_average' => 'is_average',
        'is_numeric' => 'is_numeric',
        'is_phone' => 'is_phone',
        'value' => 'value',
        'sale_methods' => 'sale_methods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'archive' => 'setArchive',
        'is_average' => 'setIsAverage',
        'is_numeric' => 'setIsNumeric',
        'is_phone' => 'setIsPhone',
        'value' => 'setValue',
        'sale_methods' => 'setSaleMethods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'archive' => 'getArchive',
        'is_average' => 'getIsAverage',
        'is_numeric' => 'getIsNumeric',
        'is_phone' => 'getIsPhone',
        'value' => 'getValue',
        'sale_methods' => 'getSaleMethods'
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
        $this->container['archive'] = isset($data['archive']) ? $data['archive'] : null;
        $this->container['is_average'] = isset($data['is_average']) ? $data['is_average'] : null;
        $this->container['is_numeric'] = isset($data['is_numeric']) ? $data['is_numeric'] : null;
        $this->container['is_phone'] = isset($data['is_phone']) ? $data['is_phone'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['sale_methods'] = isset($data['sale_methods']) ? $data['sale_methods'] : null;
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
     * @param  $id Identifiant de l'attribut
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
     * @param  $name Nom de l'attribut
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets archive
     *
     * @return 
     */
    public function getArchive()
    {
        return $this->container['archive'];
    }

    /**
     * Sets archive
     *
     * @param  $archive Niveau d'archivage
     *
     * @return $this
     */
    public function setArchive($archive)
    {
        $this->container['archive'] = $archive;

        return $this;
    }

    /**
     * Gets is_average
     *
     * @return 
     */
    public function getIsAverage()
    {
        return $this->container['is_average'];
    }

    /**
     * Sets is_average
     *
     * @param  $is_average Information cumulable
     *
     * @return $this
     */
    public function setIsAverage($is_average)
    {
        $this->container['is_average'] = $is_average;

        return $this;
    }

    /**
     * Gets is_numeric
     *
     * @return 
     */
    public function getIsNumeric()
    {
        return $this->container['is_numeric'];
    }

    /**
     * Sets is_numeric
     *
     * @param  $is_numeric Information numérique
     *
     * @return $this
     */
    public function setIsNumeric($is_numeric)
    {
        $this->container['is_numeric'] = $is_numeric;

        return $this;
    }

    /**
     * Gets is_phone
     *
     * @return 
     */
    public function getIsPhone()
    {
        return $this->container['is_phone'];
    }

    /**
     * Sets is_phone
     *
     * @param  $is_phone Information téléphone
     *
     * @return $this
     */
    public function setIsPhone($is_phone)
    {
        $this->container['is_phone'] = $is_phone;

        return $this;
    }

    /**
     * Gets value
     *
     * @return 
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param  $value Valeur de l'attribut (uniquement géré en création/modification de tickets)
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets sale_methods
     *
     * @return \Qwenta\Fulleapps\Model\AttributeSaleMethods
     */
    public function getSaleMethods()
    {
        return $this->container['sale_methods'];
    }

    /**
     * Sets sale_methods
     *
     * @param \Qwenta\Fulleapps\Model\AttributeSaleMethods $sale_methods sale_methods
     *
     * @return $this
     */
    public function setSaleMethods($sale_methods)
    {
        $this->container['sale_methods'] = $sale_methods;

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
