<?php
/**
 * EmptyClass
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
 * EmptyClass Class Doc Comment
 *
 * @category Class
 * @description Regroupement de taxe
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmptyClass implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmptyClass';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '',
        'name' => '',
        'date' => '',
        'archive' => '',
        'id_tax_1' => '',
        'id_tax_2' => '',
        'percent_tax_1' => '',
        'percent_tax_2' => ''
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int',
        'name' => 'string',
        'date' => 'datetime',
        'archive' => 'int',
        'id_tax_1' => 'int',
        'id_tax_2' => 'int',
        'percent_tax_1' => 'float',
        'percent_tax_2' => 'float'
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
        'date' => 'date',
        'archive' => 'archive',
        'id_tax_1' => 'id_tax_1',
        'id_tax_2' => 'id_tax_2',
        'percent_tax_1' => 'percent_tax_1',
        'percent_tax_2' => 'percent_tax_2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'date' => 'setDate',
        'archive' => 'setArchive',
        'id_tax_1' => 'setIdTax1',
        'id_tax_2' => 'setIdTax2',
        'percent_tax_1' => 'setPercentTax1',
        'percent_tax_2' => 'setPercentTax2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'date' => 'getDate',
        'archive' => 'getArchive',
        'id_tax_1' => 'getIdTax1',
        'id_tax_2' => 'getIdTax2',
        'percent_tax_1' => 'getPercentTax1',
        'percent_tax_2' => 'getPercentTax2'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['archive'] = isset($data['archive']) ? $data['archive'] : null;
        $this->container['id_tax_1'] = isset($data['id_tax_1']) ? $data['id_tax_1'] : null;
        $this->container['id_tax_2'] = isset($data['id_tax_2']) ? $data['id_tax_2'] : null;
        $this->container['percent_tax_1'] = isset($data['percent_tax_1']) ? $data['percent_tax_1'] : null;
        $this->container['percent_tax_2'] = isset($data['percent_tax_2']) ? $data['percent_tax_2'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['id_tax_1'] === null) {
            $invalidProperties[] = "'id_tax_1' can't be null";
        }
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
     * @param  $name Nom
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets date
     *
     * @return 
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param  $date Date de création
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * Gets id_tax_1
     *
     * @return 
     */
    public function getIdTax1()
    {
        return $this->container['id_tax_1'];
    }

    /**
     * Sets id_tax_1
     *
     * @param  $id_tax_1 Identifiant de la taxe 1
     *
     * @return $this
     */
    public function setIdTax1($id_tax_1)
    {
        $this->container['id_tax_1'] = $id_tax_1;

        return $this;
    }

    /**
     * Gets id_tax_2
     *
     * @return 
     */
    public function getIdTax2()
    {
        return $this->container['id_tax_2'];
    }

    /**
     * Sets id_tax_2
     *
     * @param  $id_tax_2 Identifiant de la taxe 2
     *
     * @return $this
     */
    public function setIdTax2($id_tax_2)
    {
        $this->container['id_tax_2'] = $id_tax_2;

        return $this;
    }

    /**
     * Gets percent_tax_1
     *
     * @return 
     */
    public function getPercentTax1()
    {
        return $this->container['percent_tax_1'];
    }

    /**
     * Sets percent_tax_1
     *
     * @param  $percent_tax_1 Pourcentage de la taxe 1
     *
     * @return $this
     */
    public function setPercentTax1($percent_tax_1)
    {
        $this->container['percent_tax_1'] = $percent_tax_1;

        return $this;
    }

    /**
     * Gets percent_tax_2
     *
     * @return 
     */
    public function getPercentTax2()
    {
        return $this->container['percent_tax_2'];
    }

    /**
     * Sets percent_tax_2
     *
     * @param  $percent_tax_2 Pourcentage de la taxe 2
     *
     * @return $this
     */
    public function setPercentTax2($percent_tax_2)
    {
        $this->container['percent_tax_2'] = $percent_tax_2;

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
