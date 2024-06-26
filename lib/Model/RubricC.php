<?php
/**
 * RubricC
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
 * RubricC Class Doc Comment
 *
 * @category Class
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RubricC implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RubricC';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => '\Qwenta\Fulleapps\Model\RubricName',
        'order_name' => '\Qwenta\Fulleapps\Model\RubricOrderName',
        'tax_grouping' => '\Qwenta\Fulleapps\Model\RubricCTaxGrouping',
        'decimals' => '\Qwenta\Fulleapps\Model\RubricDecimals',
        'excluded' => '\Qwenta\Fulleapps\Model\RubricExcluded',
        'color' => '\Qwenta\Fulleapps\Model\RubricColor',
        'order_slot' => '\Qwenta\Fulleapps\Model\RubricOrderSlot',
        'limit_order_slot' => '\Qwenta\Fulleapps\Model\RubricLimitOrderSlot',
        'n_scale' => '\Qwenta\Fulleapps\Model\RubricNScale',
        'id_kitchen_level' => '\Qwenta\Fulleapps\Model\RubricIdKitchenLevel',
        'id_parent' => '\Qwenta\Fulleapps\Model\RubricIdParent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'order_name' => null,
        'tax_grouping' => null,
        'decimals' => null,
        'excluded' => null,
        'color' => null,
        'order_slot' => null,
        'limit_order_slot' => null,
        'n_scale' => null,
        'id_kitchen_level' => null,
        'id_parent' => null
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
        'name' => 'name',
        'order_name' => 'order_name',
        'tax_grouping' => 'tax_grouping',
        'decimals' => 'decimals',
        'excluded' => 'excluded',
        'color' => 'color',
        'order_slot' => 'order_slot',
        'limit_order_slot' => 'limit_order_slot',
        'n_scale' => 'n_scale',
        'id_kitchen_level' => 'id_kitchen_level',
        'id_parent' => 'id_parent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'order_name' => 'setOrderName',
        'tax_grouping' => 'setTaxGrouping',
        'decimals' => 'setDecimals',
        'excluded' => 'setExcluded',
        'color' => 'setColor',
        'order_slot' => 'setOrderSlot',
        'limit_order_slot' => 'setLimitOrderSlot',
        'n_scale' => 'setNScale',
        'id_kitchen_level' => 'setIdKitchenLevel',
        'id_parent' => 'setIdParent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'order_name' => 'getOrderName',
        'tax_grouping' => 'getTaxGrouping',
        'decimals' => 'getDecimals',
        'excluded' => 'getExcluded',
        'color' => 'getColor',
        'order_slot' => 'getOrderSlot',
        'limit_order_slot' => 'getLimitOrderSlot',
        'n_scale' => 'getNScale',
        'id_kitchen_level' => 'getIdKitchenLevel',
        'id_parent' => 'getIdParent'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order_name'] = isset($data['order_name']) ? $data['order_name'] : null;
        $this->container['tax_grouping'] = isset($data['tax_grouping']) ? $data['tax_grouping'] : null;
        $this->container['decimals'] = isset($data['decimals']) ? $data['decimals'] : null;
        $this->container['excluded'] = isset($data['excluded']) ? $data['excluded'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['order_slot'] = isset($data['order_slot']) ? $data['order_slot'] : null;
        $this->container['limit_order_slot'] = isset($data['limit_order_slot']) ? $data['limit_order_slot'] : null;
        $this->container['n_scale'] = isset($data['n_scale']) ? $data['n_scale'] : null;
        $this->container['id_kitchen_level'] = isset($data['id_kitchen_level']) ? $data['id_kitchen_level'] : null;
        $this->container['id_parent'] = isset($data['id_parent']) ? $data['id_parent'] : null;
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
        if ($this->container['tax_grouping'] === null) {
            $invalidProperties[] = "'tax_grouping' can't be null";
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
     * Gets name
     *
     * @return \Qwenta\Fulleapps\Model\RubricName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Qwenta\Fulleapps\Model\RubricName $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets order_name
     *
     * @return \Qwenta\Fulleapps\Model\RubricOrderName
     */
    public function getOrderName()
    {
        return $this->container['order_name'];
    }

    /**
     * Sets order_name
     *
     * @param \Qwenta\Fulleapps\Model\RubricOrderName $order_name order_name
     *
     * @return $this
     */
    public function setOrderName($order_name)
    {
        $this->container['order_name'] = $order_name;

        return $this;
    }

    /**
     * Gets tax_grouping
     *
     * @return \Qwenta\Fulleapps\Model\RubricCTaxGrouping
     */
    public function getTaxGrouping()
    {
        return $this->container['tax_grouping'];
    }

    /**
     * Sets tax_grouping
     *
     * @param \Qwenta\Fulleapps\Model\RubricCTaxGrouping $tax_grouping tax_grouping
     *
     * @return $this
     */
    public function setTaxGrouping($tax_grouping)
    {
        $this->container['tax_grouping'] = $tax_grouping;

        return $this;
    }

    /**
     * Gets decimals
     *
     * @return \Qwenta\Fulleapps\Model\RubricDecimals
     */
    public function getDecimals()
    {
        return $this->container['decimals'];
    }

    /**
     * Sets decimals
     *
     * @param \Qwenta\Fulleapps\Model\RubricDecimals $decimals decimals
     *
     * @return $this
     */
    public function setDecimals($decimals)
    {
        $this->container['decimals'] = $decimals;

        return $this;
    }

    /**
     * Gets excluded
     *
     * @return \Qwenta\Fulleapps\Model\RubricExcluded
     */
    public function getExcluded()
    {
        return $this->container['excluded'];
    }

    /**
     * Sets excluded
     *
     * @param \Qwenta\Fulleapps\Model\RubricExcluded $excluded excluded
     *
     * @return $this
     */
    public function setExcluded($excluded)
    {
        $this->container['excluded'] = $excluded;

        return $this;
    }

    /**
     * Gets color
     *
     * @return \Qwenta\Fulleapps\Model\RubricColor
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param \Qwenta\Fulleapps\Model\RubricColor $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets order_slot
     *
     * @return \Qwenta\Fulleapps\Model\RubricOrderSlot
     */
    public function getOrderSlot()
    {
        return $this->container['order_slot'];
    }

    /**
     * Sets order_slot
     *
     * @param \Qwenta\Fulleapps\Model\RubricOrderSlot $order_slot order_slot
     *
     * @return $this
     */
    public function setOrderSlot($order_slot)
    {
        $this->container['order_slot'] = $order_slot;

        return $this;
    }

    /**
     * Gets limit_order_slot
     *
     * @return \Qwenta\Fulleapps\Model\RubricLimitOrderSlot
     */
    public function getLimitOrderSlot()
    {
        return $this->container['limit_order_slot'];
    }

    /**
     * Sets limit_order_slot
     *
     * @param \Qwenta\Fulleapps\Model\RubricLimitOrderSlot $limit_order_slot limit_order_slot
     *
     * @return $this
     */
    public function setLimitOrderSlot($limit_order_slot)
    {
        $this->container['limit_order_slot'] = $limit_order_slot;

        return $this;
    }

    /**
     * Gets n_scale
     *
     * @return \Qwenta\Fulleapps\Model\RubricNScale
     */
    public function getNScale()
    {
        return $this->container['n_scale'];
    }

    /**
     * Sets n_scale
     *
     * @param \Qwenta\Fulleapps\Model\RubricNScale $n_scale n_scale
     *
     * @return $this
     */
    public function setNScale($n_scale)
    {
        $this->container['n_scale'] = $n_scale;

        return $this;
    }

    /**
     * Gets id_kitchen_level
     *
     * @return \Qwenta\Fulleapps\Model\RubricIdKitchenLevel
     */
    public function getIdKitchenLevel()
    {
        return $this->container['id_kitchen_level'];
    }

    /**
     * Sets id_kitchen_level
     *
     * @param \Qwenta\Fulleapps\Model\RubricIdKitchenLevel $id_kitchen_level id_kitchen_level
     *
     * @return $this
     */
    public function setIdKitchenLevel($id_kitchen_level)
    {
        $this->container['id_kitchen_level'] = $id_kitchen_level;

        return $this;
    }

    /**
     * Gets id_parent
     *
     * @return \Qwenta\Fulleapps\Model\RubricIdParent
     */
    public function getIdParent()
    {
        return $this->container['id_parent'];
    }

    /**
     * Sets id_parent
     *
     * @param \Qwenta\Fulleapps\Model\RubricIdParent $id_parent id_parent
     *
     * @return $this
     */
    public function setIdParent($id_parent)
    {
        $this->container['id_parent'] = $id_parent;

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
