<?php
/**
 * NoteTicketDetail
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
 * NoteTicketDetail Class Doc Comment
 *
 * @category Class
 * @description Détail associé à un ticket
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoteTicketDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NoteTicketDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '',
        'id_product' => '',
        'id_operator' => '',
        'name' => '',
        'comment' => '',
        'id_tax_grouping' => '',
        'price' => '',
        'discount' => '',
        'id_discount' => '',
        'free' => '',
        'excluded' => '',
        'use_fidelity_points' => '',
        'rate_1' => '',
        'rate_2' => '',
        'percent_1' => '',
        'percent_2' => '',
        'quantity' => '',
        'quantity_decimal' => '',
        'date' => '',
        'unit_ht' => '',
        'total_ht' => '',
        'unit_ttc' => '',
        'total_ttc' => '',
        'details' => '\Qwenta\Fulleapps\Model\NoteTicketDetails',
        'taxes' => '\Qwenta\Fulleapps\Model\NoteTicketDetailTaxes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int',
        'id_product' => 'int',
        'id_operator' => 'int',
        'name' => 'string',
        'comment' => 'string',
        'id_tax_grouping' => 'int',
        'price' => 'float',
        'discount' => 'int',
        'id_discount' => 'int',
        'free' => 'int',
        'excluded' => 'int',
        'use_fidelity_points' => 'int',
        'rate_1' => 'float',
        'rate_2' => 'float',
        'percent_1' => 'int',
        'percent_2' => 'int',
        'quantity' => 'int',
        'quantity_decimal' => 'float',
        'date' => 'date',
        'unit_ht' => 'float',
        'total_ht' => 'float',
        'unit_ttc' => 'float',
        'total_ttc' => 'float',
        'details' => null,
        'taxes' => null
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
        'id_operator' => 'id_operator',
        'name' => 'name',
        'comment' => 'comment',
        'id_tax_grouping' => 'id_tax_grouping',
        'price' => 'price',
        'discount' => 'discount',
        'id_discount' => 'id_discount',
        'free' => 'free',
        'excluded' => 'excluded',
        'use_fidelity_points' => 'use_fidelity_points',
        'rate_1' => 'rate_1',
        'rate_2' => 'rate_2',
        'percent_1' => 'percent_1',
        'percent_2' => 'percent_2',
        'quantity' => 'quantity',
        'quantity_decimal' => 'quantity_decimal',
        'date' => 'date',
        'unit_ht' => 'unit_ht',
        'total_ht' => 'total_ht',
        'unit_ttc' => 'unit_ttc',
        'total_ttc' => 'total_ttc',
        'details' => 'details',
        'taxes' => 'taxes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_product' => 'setIdProduct',
        'id_operator' => 'setIdOperator',
        'name' => 'setName',
        'comment' => 'setComment',
        'id_tax_grouping' => 'setIdTaxGrouping',
        'price' => 'setPrice',
        'discount' => 'setDiscount',
        'id_discount' => 'setIdDiscount',
        'free' => 'setFree',
        'excluded' => 'setExcluded',
        'use_fidelity_points' => 'setUseFidelityPoints',
        'rate_1' => 'setRate1',
        'rate_2' => 'setRate2',
        'percent_1' => 'setPercent1',
        'percent_2' => 'setPercent2',
        'quantity' => 'setQuantity',
        'quantity_decimal' => 'setQuantityDecimal',
        'date' => 'setDate',
        'unit_ht' => 'setUnitHt',
        'total_ht' => 'setTotalHt',
        'unit_ttc' => 'setUnitTtc',
        'total_ttc' => 'setTotalTtc',
        'details' => 'setDetails',
        'taxes' => 'setTaxes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_product' => 'getIdProduct',
        'id_operator' => 'getIdOperator',
        'name' => 'getName',
        'comment' => 'getComment',
        'id_tax_grouping' => 'getIdTaxGrouping',
        'price' => 'getPrice',
        'discount' => 'getDiscount',
        'id_discount' => 'getIdDiscount',
        'free' => 'getFree',
        'excluded' => 'getExcluded',
        'use_fidelity_points' => 'getUseFidelityPoints',
        'rate_1' => 'getRate1',
        'rate_2' => 'getRate2',
        'percent_1' => 'getPercent1',
        'percent_2' => 'getPercent2',
        'quantity' => 'getQuantity',
        'quantity_decimal' => 'getQuantityDecimal',
        'date' => 'getDate',
        'unit_ht' => 'getUnitHt',
        'total_ht' => 'getTotalHt',
        'unit_ttc' => 'getUnitTtc',
        'total_ttc' => 'getTotalTtc',
        'details' => 'getDetails',
        'taxes' => 'getTaxes'
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
        $this->container['id_operator'] = isset($data['id_operator']) ? $data['id_operator'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['id_tax_grouping'] = isset($data['id_tax_grouping']) ? $data['id_tax_grouping'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['id_discount'] = isset($data['id_discount']) ? $data['id_discount'] : null;
        $this->container['free'] = isset($data['free']) ? $data['free'] : null;
        $this->container['excluded'] = isset($data['excluded']) ? $data['excluded'] : null;
        $this->container['use_fidelity_points'] = isset($data['use_fidelity_points']) ? $data['use_fidelity_points'] : null;
        $this->container['rate_1'] = isset($data['rate_1']) ? $data['rate_1'] : null;
        $this->container['rate_2'] = isset($data['rate_2']) ? $data['rate_2'] : null;
        $this->container['percent_1'] = isset($data['percent_1']) ? $data['percent_1'] : null;
        $this->container['percent_2'] = isset($data['percent_2']) ? $data['percent_2'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_decimal'] = isset($data['quantity_decimal']) ? $data['quantity_decimal'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['unit_ht'] = isset($data['unit_ht']) ? $data['unit_ht'] : null;
        $this->container['total_ht'] = isset($data['total_ht']) ? $data['total_ht'] : null;
        $this->container['unit_ttc'] = isset($data['unit_ttc']) ? $data['unit_ttc'] : null;
        $this->container['total_ttc'] = isset($data['total_ttc']) ? $data['total_ttc'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_product'] === null) {
            $invalidProperties[] = "'id_product' can't be null";
        }
        if ($this->container['id_operator'] === null) {
            $invalidProperties[] = "'id_operator' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['id_tax_grouping'] === null) {
            $invalidProperties[] = "'id_tax_grouping' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['rate_1'] === null) {
            $invalidProperties[] = "'rate_1' can't be null";
        }
        if ($this->container['rate_2'] === null) {
            $invalidProperties[] = "'rate_2' can't be null";
        }
        if ($this->container['percent_1'] === null) {
            $invalidProperties[] = "'percent_1' can't be null";
        }
        if ($this->container['percent_2'] === null) {
            $invalidProperties[] = "'percent_2' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['unit_ht'] === null) {
            $invalidProperties[] = "'unit_ht' can't be null";
        }
        if ($this->container['total_ht'] === null) {
            $invalidProperties[] = "'total_ht' can't be null";
        }
        if ($this->container['unit_ttc'] === null) {
            $invalidProperties[] = "'unit_ttc' can't be null";
        }
        if ($this->container['total_ttc'] === null) {
            $invalidProperties[] = "'total_ttc' can't be null";
        }
        if ($this->container['taxes'] === null) {
            $invalidProperties[] = "'taxes' can't be null";
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
     * @param  $id_tax_grouping Identifiant du regroupement de taxe
     *
     * @return $this
     */
    public function setIdTaxGrouping($id_tax_grouping)
    {
        $this->container['id_tax_grouping'] = $id_tax_grouping;

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
     * Gets id_discount
     *
     * @return 
     */
    public function getIdDiscount()
    {
        return $this->container['id_discount'];
    }

    /**
     * Sets id_discount
     *
     * @param  $id_discount Identifiant de la remise (si remise préconfigurée)
     *
     * @return $this
     */
    public function setIdDiscount($id_discount)
    {
        $this->container['id_discount'] = $id_discount;

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
     * Gets excluded
     *
     * @return 
     */
    public function getExcluded()
    {
        return $this->container['excluded'];
    }

    /**
     * Sets excluded
     *
     * @param  $excluded Flag exclu du CA
     *
     * @return $this
     */
    public function setExcluded($excluded)
    {
        $this->container['excluded'] = $excluded;

        return $this;
    }

    /**
     * Gets use_fidelity_points
     *
     * @return 
     */
    public function getUseFidelityPoints()
    {
        return $this->container['use_fidelity_points'];
    }

    /**
     * Sets use_fidelity_points
     *
     * @param  $use_fidelity_points Use fidelity points (ticket must have an associated client) [FIDELITY]
     *
     * @return $this
     */
    public function setUseFidelityPoints($use_fidelity_points)
    {
        $this->container['use_fidelity_points'] = $use_fidelity_points;

        return $this;
    }

    /**
     * Gets rate_1
     *
     * @return 
     */
    public function getRate1()
    {
        return $this->container['rate_1'];
    }

    /**
     * Sets rate_1
     *
     * @param  $rate_1 Valeur du TAUX 1
     *
     * @return $this
     */
    public function setRate1($rate_1)
    {
        $this->container['rate_1'] = $rate_1;

        return $this;
    }

    /**
     * Gets rate_2
     *
     * @return 
     */
    public function getRate2()
    {
        return $this->container['rate_2'];
    }

    /**
     * Sets rate_2
     *
     * @param  $rate_2 Valeur du TAUX 2
     *
     * @return $this
     */
    public function setRate2($rate_2)
    {
        $this->container['rate_2'] = $rate_2;

        return $this;
    }

    /**
     * Gets percent_1
     *
     * @return 
     */
    public function getPercent1()
    {
        return $this->container['percent_1'];
    }

    /**
     * Sets percent_1
     *
     * @param  $percent_1 Pourcentage du TAUX 1
     *
     * @return $this
     */
    public function setPercent1($percent_1)
    {
        $this->container['percent_1'] = $percent_1;

        return $this;
    }

    /**
     * Gets percent_2
     *
     * @return 
     */
    public function getPercent2()
    {
        return $this->container['percent_2'];
    }

    /**
     * Sets percent_2
     *
     * @param  $percent_2 Pourcentage du TAUX 2
     *
     * @return $this
     */
    public function setPercent2($percent_2)
    {
        $this->container['percent_2'] = $percent_2;

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
     * Gets unit_ht
     *
     * @return 
     */
    public function getUnitHt()
    {
        return $this->container['unit_ht'];
    }

    /**
     * Sets unit_ht
     *
     * @param  $unit_ht Prix unitaire HT
     *
     * @return $this
     */
    public function setUnitHt($unit_ht)
    {
        $this->container['unit_ht'] = $unit_ht;

        return $this;
    }

    /**
     * Gets total_ht
     *
     * @return 
     */
    public function getTotalHt()
    {
        return $this->container['total_ht'];
    }

    /**
     * Sets total_ht
     *
     * @param  $total_ht Prix total HT
     *
     * @return $this
     */
    public function setTotalHt($total_ht)
    {
        $this->container['total_ht'] = $total_ht;

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
     * @return \Qwenta\Fulleapps\Model\NoteTicketDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Qwenta\Fulleapps\Model\NoteTicketDetails $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \Qwenta\Fulleapps\Model\NoteTicketDetailTaxes
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Qwenta\Fulleapps\Model\NoteTicketDetailTaxes $taxes taxes
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

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
