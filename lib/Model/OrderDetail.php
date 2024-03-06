<?php
/**
 * OrderDetail
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
 * OrderDetail Class Doc Comment
 *
 * @category Class
 * @description Détail associé à une commande
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '',
        'id_product' => '',
        'id_line' => '',
        'id_operator' => '',
        'name' => '',
        'comment' => '',
        'uuid' => '',
        'price' => '',
        'discount' => '',
        'free' => '',
        'quantity' => '',
        'quantity_decimal' => '',
        'date' => '',
        'unit_ttc' => '',
        'total_ttc' => '',
        'details' => '\Qwenta\Fulleapps\Model\OrderDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int',
        'id_product' => 'int',
        'id_line' => 'int',
        'id_operator' => 'int',
        'name' => 'string',
        'comment' => 'string',
        'uuid' => 'string',
        'price' => 'float',
        'discount' => 'int',
        'free' => 'int',
        'quantity' => 'int',
        'quantity_decimal' => 'float',
        'date' => 'date',
        'unit_ttc' => 'float',
        'total_ttc' => 'float',
        'details' => null
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
        'id_product' => 'id_product',
        'id_line' => 'id_line',
        'id_operator' => 'id_operator',
        'name' => 'name',
        'comment' => 'comment',
        'uuid' => 'uuid',
        'price' => 'price',
        'discount' => 'discount',
        'free' => 'free',
        'quantity' => 'quantity',
        'quantity_decimal' => 'quantity_decimal',
        'date' => 'date',
        'unit_ttc' => 'unit_ttc',
        'total_ttc' => 'total_ttc',
        'details' => 'details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_product' => 'setIdProduct',
        'id_line' => 'setIdLine',
        'id_operator' => 'setIdOperator',
        'name' => 'setName',
        'comment' => 'setComment',
        'uuid' => 'setUuid',
        'price' => 'setPrice',
        'discount' => 'setDiscount',
        'free' => 'setFree',
        'quantity' => 'setQuantity',
        'quantity_decimal' => 'setQuantityDecimal',
        'date' => 'setDate',
        'unit_ttc' => 'setUnitTtc',
        'total_ttc' => 'setTotalTtc',
        'details' => 'setDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_product' => 'getIdProduct',
        'id_line' => 'getIdLine',
        'id_operator' => 'getIdOperator',
        'name' => 'getName',
        'comment' => 'getComment',
        'uuid' => 'getUuid',
        'price' => 'getPrice',
        'discount' => 'getDiscount',
        'free' => 'getFree',
        'quantity' => 'getQuantity',
        'quantity_decimal' => 'getQuantityDecimal',
        'date' => 'getDate',
        'unit_ttc' => 'getUnitTtc',
        'total_ttc' => 'getTotalTtc',
        'details' => 'getDetails'
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
        $this->container['id_product'] = isset($data['id_product']) ? $data['id_product'] : null;
        $this->container['id_line'] = isset($data['id_line']) ? $data['id_line'] : null;
        $this->container['id_operator'] = isset($data['id_operator']) ? $data['id_operator'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['free'] = isset($data['free']) ? $data['free'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_decimal'] = isset($data['quantity_decimal']) ? $data['quantity_decimal'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['unit_ttc'] = isset($data['unit_ttc']) ? $data['unit_ttc'] : null;
        $this->container['total_ttc'] = isset($data['total_ttc']) ? $data['total_ttc'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
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
     * @param  $id Identifiant de la ligne détail
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_product
     *
     * @return 
     */
    public function getIdProduct()
    {
        return $this->container['id_product'];
    }

    /**
     * Sets id_product
     *
     * @param  $id_product Identifiant du produit
     *
     * @return $this
     */
    public function setIdProduct($id_product)
    {
        $this->container['id_product'] = $id_product;

        return $this;
    }

    /**
     * Gets id_line
     *
     * @return 
     */
    public function getIdLine()
    {
        return $this->container['id_line'];
    }

    /**
     * Sets id_line
     *
     * @param  $id_line Identifiant ligne parente (Formule/Options)
     *
     * @return $this
     */
    public function setIdLine($id_line)
    {
        $this->container['id_line'] = $id_line;

        return $this;
    }

    /**
     * Gets id_operator
     *
     * @return 
     */
    public function getIdOperator()
    {
        return $this->container['id_operator'];
    }

    /**
     * Sets id_operator
     *
     * @param  $id_operator Opérateur
     *
     * @return $this
     */
    public function setIdOperator($id_operator)
    {
        $this->container['id_operator'] = $id_operator;

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
     * @param  $name Nom du produit
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return 
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param  $comment Commentaire
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return 
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param  $uuid UUID ligne article (facultatif) (50 caractères max.)
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets price
     *
     * @return 
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param  $price Prix unitaire du produit
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return 
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param  $discount Remise en %
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets free
     *
     * @return 
     */
    public function getFree()
    {
        return $this->container['free'];
    }

    /**
     * Sets free
     *
     * @param  $free Flag offert
     *
     * @return $this
     */
    public function setFree($free)
    {
        $this->container['free'] = $free;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return 
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param  $quantity Quantité du produit
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_decimal
     *
     * @return 
     */
    public function getQuantityDecimal()
    {
        return $this->container['quantity_decimal'];
    }

    /**
     * Sets quantity_decimal
     *
     * @param  $quantity_decimal Quantité décimale
     *
     * @return $this
     */
    public function setQuantityDecimal($quantity_decimal)
    {
        $this->container['quantity_decimal'] = $quantity_decimal;

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
     * @param  $date Date d'ajout du produit
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets unit_ttc
     *
     * @return 
     */
    public function getUnitTtc()
    {
        return $this->container['unit_ttc'];
    }

    /**
     * Sets unit_ttc
     *
     * @param  $unit_ttc Prix unitaire TTC
     *
     * @return $this
     */
    public function setUnitTtc($unit_ttc)
    {
        $this->container['unit_ttc'] = $unit_ttc;

        return $this;
    }

    /**
     * Gets total_ttc
     *
     * @return 
     */
    public function getTotalTtc()
    {
        return $this->container['total_ttc'];
    }

    /**
     * Sets total_ttc
     *
     * @param  $total_ttc Prix total TTC
     *
     * @return $this
     */
    public function setTotalTtc($total_ttc)
    {
        $this->container['total_ttc'] = $total_ttc;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Qwenta\Fulleapps\Model\OrderDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Qwenta\Fulleapps\Model\OrderDetails $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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
