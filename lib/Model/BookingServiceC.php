<?php
/**
 * BookingServiceC
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
 * BookingServiceC Class Doc Comment
 *
 * @category Class
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookingServiceC implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BookingServiceC';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_extern' => '\Qwenta\Fulleapps\Model\BookingServiceIdExtern',
        'name' => '\Qwenta\Fulleapps\Model\BookingServiceName',
        'id_point_of_sale' => '\Qwenta\Fulleapps\Model\BookingServiceIdPointOfSale',
        'limit_booking_slot' => '\Qwenta\Fulleapps\Model\BookingServiceLimitBookingSlot',
        'booking_slot' => '\Qwenta\Fulleapps\Model\BookingServiceBookingSlot',
        'start' => '\Qwenta\Fulleapps\Model\BookingServiceStart',
        'end' => '\Qwenta\Fulleapps\Model\BookingServiceEnd',
        'days' => '\Qwenta\Fulleapps\Model\BookingServiceDays'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_extern' => null,
        'name' => null,
        'id_point_of_sale' => null,
        'limit_booking_slot' => null,
        'booking_slot' => null,
        'start' => null,
        'end' => null,
        'days' => null
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
        'id_extern' => 'id_extern',
        'name' => 'name',
        'id_point_of_sale' => 'id_point_of_sale',
        'limit_booking_slot' => 'limit_booking_slot',
        'booking_slot' => 'booking_slot',
        'start' => 'start',
        'end' => 'end',
        'days' => 'days'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_extern' => 'setIdExtern',
        'name' => 'setName',
        'id_point_of_sale' => 'setIdPointOfSale',
        'limit_booking_slot' => 'setLimitBookingSlot',
        'booking_slot' => 'setBookingSlot',
        'start' => 'setStart',
        'end' => 'setEnd',
        'days' => 'setDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_extern' => 'getIdExtern',
        'name' => 'getName',
        'id_point_of_sale' => 'getIdPointOfSale',
        'limit_booking_slot' => 'getLimitBookingSlot',
        'booking_slot' => 'getBookingSlot',
        'start' => 'getStart',
        'end' => 'getEnd',
        'days' => 'getDays'
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
        $this->container['id_extern'] = isset($data['id_extern']) ? $data['id_extern'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id_point_of_sale'] = isset($data['id_point_of_sale']) ? $data['id_point_of_sale'] : null;
        $this->container['limit_booking_slot'] = isset($data['limit_booking_slot']) ? $data['limit_booking_slot'] : null;
        $this->container['booking_slot'] = isset($data['booking_slot']) ? $data['booking_slot'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
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
     * Gets id_extern
     *
     * @return \Qwenta\Fulleapps\Model\BookingServiceIdExtern
     */
    public function getIdExtern()
    {
        return $this->container['id_extern'];
    }

    /**
     * Sets id_extern
     *
     * @param \Qwenta\Fulleapps\Model\BookingServiceIdExtern $id_extern id_extern
     *
     * @return $this
     */
    public function setIdExtern($id_extern)
    {
        $this->container['id_extern'] = $id_extern;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Qwenta\Fulleapps\Model\BookingServiceName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Qwenta\Fulleapps\Model\BookingServiceName $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets id_point_of_sale
     *
     * @return \Qwenta\Fulleapps\Model\BookingServiceIdPointOfSale
     */
    public function getIdPointOfSale()
    {
        return $this->container['id_point_of_sale'];
    }

    /**
     * Sets id_point_of_sale
     *
     * @param \Qwenta\Fulleapps\Model\BookingServiceIdPointOfSale $id_point_of_sale id_point_of_sale
     *
     * @return $this
     */
    public function setIdPointOfSale($id_point_of_sale)
    {
        $this->container['id_point_of_sale'] = $id_point_of_sale;

        return $this;
    }

    /**
     * Gets limit_booking_slot
     *
     * @return \Qwenta\Fulleapps\Model\BookingServiceLimitBookingSlot
     */
    public function getLimitBookingSlot()
    {
        return $this->container['limit_booking_slot'];
    }

    /**
     * Sets limit_booking_slot
     *
     * @param \Qwenta\Fulleapps\Model\BookingServiceLimitBookingSlot $limit_booking_slot limit_booking_slot
     *
     * @return $this
     */
    public function setLimitBookingSlot($limit_booking_slot)
    {
        $this->container['limit_booking_slot'] = $limit_booking_slot;

        return $this;
    }

    /**
     * Gets booking_slot
     *
     * @return \Qwenta\Fulleapps\Model\BookingServiceBookingSlot
     */
    public function getBookingSlot()
    {
        return $this->container['booking_slot'];
    }

    /**
     * Sets booking_slot
     *
     * @param \Qwenta\Fulleapps\Model\BookingServiceBookingSlot $booking_slot booking_slot
     *
     * @return $this
     */
    public function setBookingSlot($booking_slot)
    {
        $this->container['booking_slot'] = $booking_slot;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \Qwenta\Fulleapps\Model\BookingServiceStart
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \Qwenta\Fulleapps\Model\BookingServiceStart $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \Qwenta\Fulleapps\Model\BookingServiceEnd
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \Qwenta\Fulleapps\Model\BookingServiceEnd $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets days
     *
     * @return \Qwenta\Fulleapps\Model\BookingServiceDays
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param \Qwenta\Fulleapps\Model\BookingServiceDays $days days
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

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
