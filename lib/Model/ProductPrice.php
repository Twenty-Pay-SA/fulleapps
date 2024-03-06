<?php
/**
 * ProductPrice
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
 * ProductPrice Class Doc Comment
 *
 * @category Class
 * @description Class ProductPrice
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductPrice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_sale_method' => '',
        'price' => '',
        'for_sale' => '',
        'id_tax_grouping' => '',
        'id_price_period' => ''
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_sale_method' => 'int',
        'price' => 'float',
        'for_sale' => 'int',
        'id_tax_grouping' => 'int',
        'id_price_period' => 'int'
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
        'id_sale_method' => 'id_sale_method',
        'price' => 'price',
        'for_sale' => 'for_sale',
        'id_tax_grouping' => 'id_tax_grouping',
        'id_price_period' => 'id_price_period'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_sale_method' => 'setIdSaleMethod',
        'price' => 'setPrice',
        'for_sale' => 'setForSale',
        'id_tax_grouping' => 'setIdTaxGrouping',
        'id_price_period' => 'setIdPricePeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_sale_method' => 'getIdSaleMethod',
        'price' => 'getPrice',
        'for_sale' => 'getForSale',
        'id_tax_grouping' => 'getIdTaxGrouping',
        'id_price_period' => 'getIdPricePeriod'
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
        $this->container['id_sale_method'] = isset($data['id_sale_method']) ? $data['id_sale_method'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['for_sale'] = isset($data['for_sale']) ? $data['for_sale'] : null;
        $this->container['id_tax_grouping'] = isset($data['id_tax_grouping']) ? $data['id_tax_grouping'] : null;
        $this->container['id_price_period'] = isset($data['id_price_period']) ? $data['id_price_period'] : null;
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
     * Gets id_sale_method
     *
     * @return 
     */
    public function getIdSaleMethod()
    {
        return $this->container['id_sale_method'];
    }

    /**
     * Sets id_sale_method
     *
     * @param  $id_sale_method Identifiant du mode de vente associé au prix
     *
     * @return $this
     */
    public function setIdSaleMethod($id_sale_method)
    {
        $this->container['id_sale_method'] = $id_sale_method;

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
     * @param  $price Prix du produit sur le mode de vente
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets for_sale
     *
     * @return 
     */
    public function getForSale()
    {
        return $this->container['for_sale'];
    }

    /**
     * Sets for_sale
     *
     * @param  $for_sale Prix actif (en vente)
     *
     * @return $this
     */
    public function setForSale($for_sale)
    {
        $this->container['for_sale'] = $for_sale;

        return $this;
    }

    /**
     * Gets id_tax_grouping
     *
     * @return 
     */
    public function getIdTaxGrouping()
    {
        return $this->container['id_tax_grouping'];
    }

    /**
     * Sets id_tax_grouping
     *
     * @param  $id_tax_grouping Identifiant du regroupement de taxe associé au prix (null si le regroupement appliqué est celui de la rubrique)
     *
     * @return $this
     */
    public function setIdTaxGrouping($id_tax_grouping)
    {
        $this->container['id_tax_grouping'] = $id_tax_grouping;

        return $this;
    }

    /**
     * Gets id_price_period
     *
     * @return 
     */
    public function getIdPricePeriod()
    {
        return $this->container['id_price_period'];
    }

    /**
     * Sets id_price_period
     *
     * @param  $id_price_period Identifiant de la période associée au prix (null si prix permanent)
     *
     * @return $this
     */
    public function setIdPricePeriod($id_price_period)
    {
        $this->container['id_price_period'] = $id_price_period;

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
