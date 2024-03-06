<?php
/**
 * Tracing
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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
 * Tracing Class Doc Comment
 *
 * @category Class
 * @description Class Tracing
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Tracing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Tracing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'Int',
        'id_user' => 'Int',
        'id_point_of_sale' => 'Int',
        'code' => 'Int',
        'id_operator' => 'Int',
        'n_operator' => 'Int',
        'description' => 'string',
        'date' => 'Datetime',
        'previous_signature' => 'string',
        'signature' => 'string',
        'report_signature' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'id_user' => null,
        'id_point_of_sale' => null,
        'code' => null,
        'id_operator' => null,
        'n_operator' => null,
        'description' => null,
        'date' => null,
        'previous_signature' => null,
        'signature' => null,
        'report_signature' => null
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
        'id_user' => 'id_user',
        'id_point_of_sale' => 'id_point_of_sale',
        'code' => 'code',
        'id_operator' => 'id_operator',
        'n_operator' => 'n_operator',
        'description' => 'description',
        'date' => 'date',
        'previous_signature' => 'previous_signature',
        'signature' => 'signature',
        'report_signature' => 'report_signature'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_user' => 'setIdUser',
        'id_point_of_sale' => 'setIdPointOfSale',
        'code' => 'setCode',
        'id_operator' => 'setIdOperator',
        'n_operator' => 'setNOperator',
        'description' => 'setDescription',
        'date' => 'setDate',
        'previous_signature' => 'setPreviousSignature',
        'signature' => 'setSignature',
        'report_signature' => 'setReportSignature'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_user' => 'getIdUser',
        'id_point_of_sale' => 'getIdPointOfSale',
        'code' => 'getCode',
        'id_operator' => 'getIdOperator',
        'n_operator' => 'getNOperator',
        'description' => 'getDescription',
        'date' => 'getDate',
        'previous_signature' => 'getPreviousSignature',
        'signature' => 'getSignature',
        'report_signature' => 'getReportSignature'
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
        $this->container['id_user'] = isset($data['id_user']) ? $data['id_user'] : null;
        $this->container['id_point_of_sale'] = isset($data['id_point_of_sale']) ? $data['id_point_of_sale'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['id_operator'] = isset($data['id_operator']) ? $data['id_operator'] : null;
        $this->container['n_operator'] = isset($data['n_operator']) ? $data['n_operator'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['previous_signature'] = isset($data['previous_signature']) ? $data['previous_signature'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['report_signature'] = isset($data['report_signature']) ? $data['report_signature'] : null;
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
     * @return Int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param Int $id Identifiant
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_user
     *
     * @return Int
     */
    public function getIdUser()
    {
        return $this->container['id_user'];
    }

    /**
     * Sets id_user
     *
     * @param Int $id_user ID commerçant
     *
     * @return $this
     */
    public function setIdUser($id_user)
    {
        $this->container['id_user'] = $id_user;

        return $this;
    }

    /**
     * Gets id_point_of_sale
     *
     * @return Int
     */
    public function getIdPointOfSale()
    {
        return $this->container['id_point_of_sale'];
    }

    /**
     * Sets id_point_of_sale
     *
     * @param Int $id_point_of_sale ID point de vente
     *
     * @return $this
     */
    public function setIdPointOfSale($id_point_of_sale)
    {
        $this->container['id_point_of_sale'] = $id_point_of_sale;

        return $this;
    }

    /**
     * Gets code
     *
     * @return Int
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param Int $code Code evenement
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets id_operator
     *
     * @return Int
     */
    public function getIdOperator()
    {
        return $this->container['id_operator'];
    }

    /**
     * Sets id_operator
     *
     * @param Int $id_operator Identifiant vendeur
     *
     * @return $this
     */
    public function setIdOperator($id_operator)
    {
        $this->container['id_operator'] = $id_operator;

        return $this;
    }

    /**
     * Gets n_operator
     *
     * @return Int
     */
    public function getNOperator()
    {
        return $this->container['n_operator'];
    }

    /**
     * Sets n_operator
     *
     * @param Int $n_operator Nom du vendeur
     *
     * @return $this
     */
    public function setNOperator($n_operator)
    {
        $this->container['n_operator'] = $n_operator;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description evenement (JSON)
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets date
     *
     * @return Datetime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param Datetime $date Date de l'evenement
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets previous_signature
     *
     * @return string
     */
    public function getPreviousSignature()
    {
        return $this->container['previous_signature'];
    }

    /**
     * Sets previous_signature
     *
     * @param string $previous_signature Signature précédente
     *
     * @return $this
     */
    public function setPreviousSignature($previous_signature)
    {
        $this->container['previous_signature'] = $previous_signature;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature Signature de l'evenement
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets report_signature
     *
     * @return string
     */
    public function getReportSignature()
    {
        return $this->container['report_signature'];
    }

    /**
     * Sets report_signature
     *
     * @param string $report_signature N si première signature, sinon O
     *
     * @return $this
     */
    public function setReportSignature($report_signature)
    {
        $this->container['report_signature'] = $report_signature;

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
