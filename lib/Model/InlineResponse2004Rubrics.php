<?php
/**
 * InlineResponse2004Rubrics
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
 * InlineResponse2004Rubrics Class Doc Comment
 *
 * @category Class
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2004Rubrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_4_rubrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_rubric' => '',
        'name' => '',
        'percent' => '',
        'amount' => '',
        'amount_ht' => '',
        'quantity' => '',
        'free' => '',
        'products' => '\Qwenta\Fulleapps\Model\InlineResponse2004Products[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_rubric' => 'integer',
        'name' => 'string',
        'percent' => 'float',
        'amount' => 'float',
        'amount_ht' => 'float',
        'quantity' => 'integer',
        'free' => 'integer',
        'products' => null
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
        'id_rubric' => 'id_rubric',
        'name' => 'name',
        'percent' => 'percent',
        'amount' => 'amount',
        'amount_ht' => 'amount_ht',
        'quantity' => 'quantity',
        'free' => 'free',
        'products' => 'products'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_rubric' => 'setIdRubric',
        'name' => 'setName',
        'percent' => 'setPercent',
        'amount' => 'setAmount',
        'amount_ht' => 'setAmountHt',
        'quantity' => 'setQuantity',
        'free' => 'setFree',
        'products' => 'setProducts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_rubric' => 'getIdRubric',
        'name' => 'getName',
        'percent' => 'getPercent',
        'amount' => 'getAmount',
        'amount_ht' => 'getAmountHt',
        'quantity' => 'getQuantity',
        'free' => 'getFree',
        'products' => 'getProducts'
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
        $this->container['id_rubric'] = isset($data['id_rubric']) ? $data['id_rubric'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['amount_ht'] = isset($data['amount_ht']) ? $data['amount_ht'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['free'] = isset($data['free']) ? $data['free'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
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
     * Gets id_rubric
     *
     * @return 
     */
    public function getIdRubric()
    {
        return $this->container['id_rubric'];
    }

    /**
     * Sets id_rubric
     *
     * @param  $id_rubric Identifiant de la rubrique de vente
     *
     * @return $this
     */
    public function setIdRubric($id_rubric)
    {
        $this->container['id_rubric'] = $id_rubric;

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
     * @param  $name Libelle de la rubrique de vente
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets percent
     *
     * @return 
     */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
     * Sets percent
     *
     * @param  $percent Pourcentage des ventes de la rubrique
     *
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return 
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param  $amount Montant total TTC des ventes de la rubrique
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_ht
     *
     * @return 
     */
    public function getAmountHt()
    {
        return $this->container['amount_ht'];
    }

    /**
     * Sets amount_ht
     *
     * @param  $amount_ht Montant total HT des ventes de la rubrique
     *
     * @return $this
     */
    public function setAmountHt($amount_ht)
    {
        $this->container['amount_ht'] = $amount_ht;

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
     * @param  $quantity Quantité unitaire totale des ventes de la rubrique
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @param  $free Nombre d'offerts de la rubrique
     *
     * @return $this
     */
    public function setFree($free)
    {
        $this->container['free'] = $free;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \Qwenta\Fulleapps\Model\InlineResponse2004Products[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \Qwenta\Fulleapps\Model\InlineResponse2004Products[] $products Liste des produits
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

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
