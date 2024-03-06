<?php
/**
 * Booking
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
 * Booking Class Doc Comment
 *
 * @category Class
 * @description Class Booking
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Booking implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Booking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '',
        'id_extern' => '\Qwenta\Fulleapps\Model\BookingIdExtern',
        'n_people' => '\Qwenta\Fulleapps\Model\BookingNPeople',
        'reference' => '',
        'date_creation' => '\Qwenta\Fulleapps\Model\BookingDateCreation',
        'date_execution' => '\Qwenta\Fulleapps\Model\BookingDateExecution',
        'hour_execution' => '\Qwenta\Fulleapps\Model\BookingHourExecution',
        'hour_end_execution' => '\Qwenta\Fulleapps\Model\BookingHourEndExecution',
        'comment' => '\Qwenta\Fulleapps\Model\BookingComment',
        'client' => '\Qwenta\Fulleapps\Model\Client',
        'booking_service' => '\Qwenta\Fulleapps\Model\BookingService',
        'booking_level' => '\Qwenta\Fulleapps\Model\OrderLevel',
        'point_of_sale' => '\Qwenta\Fulleapps\Model\PointOfSale',
        'charges' => '\Qwenta\Fulleapps\Model\NoteTicketPayments'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int',
        'id_extern' => null,
        'n_people' => null,
        'reference' => 'string',
        'date_creation' => null,
        'date_execution' => null,
        'hour_execution' => null,
        'hour_end_execution' => null,
        'comment' => null,
        'client' => null,
        'booking_service' => null,
        'booking_level' => null,
        'point_of_sale' => null,
        'charges' => null
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
        'id_extern' => 'id_extern',
        'n_people' => 'n_people',
        'reference' => 'reference',
        'date_creation' => 'date_creation',
        'date_execution' => 'date_execution',
        'hour_execution' => 'hour_execution',
        'hour_end_execution' => 'hour_end_execution',
        'comment' => 'comment',
        'client' => 'client',
        'booking_service' => 'booking_service',
        'booking_level' => 'booking_level',
        'point_of_sale' => 'point_of_sale',
        'charges' => 'charges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_extern' => 'setIdExtern',
        'n_people' => 'setNPeople',
        'reference' => 'setReference',
        'date_creation' => 'setDateCreation',
        'date_execution' => 'setDateExecution',
        'hour_execution' => 'setHourExecution',
        'hour_end_execution' => 'setHourEndExecution',
        'comment' => 'setComment',
        'client' => 'setClient',
        'booking_service' => 'setBookingService',
        'booking_level' => 'setBookingLevel',
        'point_of_sale' => 'setPointOfSale',
        'charges' => 'setCharges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_extern' => 'getIdExtern',
        'n_people' => 'getNPeople',
        'reference' => 'getReference',
        'date_creation' => 'getDateCreation',
        'date_execution' => 'getDateExecution',
        'hour_execution' => 'getHourExecution',
        'hour_end_execution' => 'getHourEndExecution',
        'comment' => 'getComment',
        'client' => 'getClient',
        'booking_service' => 'getBookingService',
        'booking_level' => 'getBookingLevel',
        'point_of_sale' => 'getPointOfSale',
        'charges' => 'getCharges'
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
        $this->container['id_extern'] = isset($data['id_extern']) ? $data['id_extern'] : null;
        $this->container['n_people'] = isset($data['n_people']) ? $data['n_people'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['date_creation'] = isset($data['date_creation']) ? $data['date_creation'] : null;
        $this->container['date_execution'] = isset($data['date_execution']) ? $data['date_execution'] : null;
        $this->container['hour_execution'] = isset($data['hour_execution']) ? $data['hour_execution'] : null;
        $this->container['hour_end_execution'] = isset($data['hour_end_execution']) ? $data['hour_end_execution'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['booking_service'] = isset($data['booking_service']) ? $data['booking_service'] : null;
        $this->container['booking_level'] = isset($data['booking_level']) ? $data['booking_level'] : null;
        $this->container['point_of_sale'] = isset($data['point_of_sale']) ? $data['point_of_sale'] : null;
        $this->container['charges'] = isset($data['charges']) ? $data['charges'] : null;
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
     * @param  $id Identifiant de la reservation
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_extern
     *
     * @return \Qwenta\Fulleapps\Model\BookingIdExtern
     */
    public function getIdExtern()
    {
        return $this->container['id_extern'];
    }

    /**
     * Sets id_extern
     *
     * @param \Qwenta\Fulleapps\Model\BookingIdExtern $id_extern id_extern
     *
     * @return $this
     */
    public function setIdExtern($id_extern)
    {
        $this->container['id_extern'] = $id_extern;

        return $this;
    }

    /**
     * Gets n_people
     *
     * @return \Qwenta\Fulleapps\Model\BookingNPeople
     */
    public function getNPeople()
    {
        return $this->container['n_people'];
    }

    /**
     * Sets n_people
     *
     * @param \Qwenta\Fulleapps\Model\BookingNPeople $n_people n_people
     *
     * @return $this
     */
    public function setNPeople($n_people)
    {
        $this->container['n_people'] = $n_people;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return 
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param  $reference Référence unique de la reservation
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets date_creation
     *
     * @return \Qwenta\Fulleapps\Model\BookingDateCreation
     */
    public function getDateCreation()
    {
        return $this->container['date_creation'];
    }

    /**
     * Sets date_creation
     *
     * @param \Qwenta\Fulleapps\Model\BookingDateCreation $date_creation date_creation
     *
     * @return $this
     */
    public function setDateCreation($date_creation)
    {
        $this->container['date_creation'] = $date_creation;

        return $this;
    }

    /**
     * Gets date_execution
     *
     * @return \Qwenta\Fulleapps\Model\BookingDateExecution
     */
    public function getDateExecution()
    {
        return $this->container['date_execution'];
    }

    /**
     * Sets date_execution
     *
     * @param \Qwenta\Fulleapps\Model\BookingDateExecution $date_execution date_execution
     *
     * @return $this
     */
    public function setDateExecution($date_execution)
    {
        $this->container['date_execution'] = $date_execution;

        return $this;
    }

    /**
     * Gets hour_execution
     *
     * @return \Qwenta\Fulleapps\Model\BookingHourExecution
     */
    public function getHourExecution()
    {
        return $this->container['hour_execution'];
    }

    /**
     * Sets hour_execution
     *
     * @param \Qwenta\Fulleapps\Model\BookingHourExecution $hour_execution hour_execution
     *
     * @return $this
     */
    public function setHourExecution($hour_execution)
    {
        $this->container['hour_execution'] = $hour_execution;

        return $this;
    }

    /**
     * Gets hour_end_execution
     *
     * @return \Qwenta\Fulleapps\Model\BookingHourEndExecution
     */
    public function getHourEndExecution()
    {
        return $this->container['hour_end_execution'];
    }

    /**
     * Sets hour_end_execution
     *
     * @param \Qwenta\Fulleapps\Model\BookingHourEndExecution $hour_end_execution hour_end_execution
     *
     * @return $this
     */
    public function setHourEndExecution($hour_end_execution)
    {
        $this->container['hour_end_execution'] = $hour_end_execution;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return \Qwenta\Fulleapps\Model\BookingComment
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param \Qwenta\Fulleapps\Model\BookingComment $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \Qwenta\Fulleapps\Model\Client
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \Qwenta\Fulleapps\Model\Client $client client
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets booking_service
     *
     * @return \Qwenta\Fulleapps\Model\BookingService
     */
    public function getBookingService()
    {
        return $this->container['booking_service'];
    }

    /**
     * Sets booking_service
     *
     * @param \Qwenta\Fulleapps\Model\BookingService $booking_service booking_service
     *
     * @return $this
     */
    public function setBookingService($booking_service)
    {
        $this->container['booking_service'] = $booking_service;

        return $this;
    }

    /**
     * Gets booking_level
     *
     * @return \Qwenta\Fulleapps\Model\OrderLevel
     */
    public function getBookingLevel()
    {
        return $this->container['booking_level'];
    }

    /**
     * Sets booking_level
     *
     * @param \Qwenta\Fulleapps\Model\OrderLevel $booking_level booking_level
     *
     * @return $this
     */
    public function setBookingLevel($booking_level)
    {
        $this->container['booking_level'] = $booking_level;

        return $this;
    }

    /**
     * Gets point_of_sale
     *
     * @return \Qwenta\Fulleapps\Model\PointOfSale
     */
    public function getPointOfSale()
    {
        return $this->container['point_of_sale'];
    }

    /**
     * Sets point_of_sale
     *
     * @param \Qwenta\Fulleapps\Model\PointOfSale $point_of_sale point_of_sale
     *
     * @return $this
     */
    public function setPointOfSale($point_of_sale)
    {
        $this->container['point_of_sale'] = $point_of_sale;

        return $this;
    }

    /**
     * Gets charges
     *
     * @return \Qwenta\Fulleapps\Model\NoteTicketPayments
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \Qwenta\Fulleapps\Model\NoteTicketPayments $charges charges
     *
     * @return $this
     */
    public function setCharges($charges)
    {
        $this->container['charges'] = $charges;

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
