<?php
/**
 * NoteTicket
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
 * NoteTicket Class Doc Comment
 *
 * @category Class
 * @description Class NoteTicket
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoteTicket implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NoteTicket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '',
        'comment' => '',
        'date' => '',
        'r_note' => '',
        'r_ticket' => '',
        'r_invoice' => '',
        'n_note' => '',
        'n_ticket' => '',
        'n_invoice' => '',
        'n_people' => '',
        'n_table' => '',
        'software_version' => '',
        'type_operation' => '',
        'type_document' => '',
        'n_lines' => '',
        'total_ttc' => '',
        'total_ht' => '',
        'total_ca' => '',
        'reverse' => '',
        'reversal' => '',
        'id_order' => '',
        'short_signature' => '',
        'picture_base64' => '',
        'picture_link' => '',
        'point_value' => '',
        'operator' => '\Qwenta\Fulleapps\Model\Operator',
        'client' => '\Qwenta\Fulleapps\Model\Client',
        'sale_method' => '\Qwenta\Fulleapps\Model\SaleMethod',
        'service' => '\Qwenta\Fulleapps\Model\Service',
        'point_of_sale' => '\Qwenta\Fulleapps\Model\PointOfSale',
        'attributes' => '\Qwenta\Fulleapps\Model\Attributes',
        'taxes' => '\Qwenta\Fulleapps\Model\NoteTicketTaxes',
        'details' => '\Qwenta\Fulleapps\Model\NoteTicketDetails',
        'payments' => '\Qwenta\Fulleapps\Model\NoteTicketPayments'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int',
        'comment' => 'string',
        'date' => 'datetime',
        'r_note' => 'string',
        'r_ticket' => 'string',
        'r_invoice' => 'string',
        'n_note' => 'int',
        'n_ticket' => 'int',
        'n_invoice' => 'int',
        'n_people' => 'int',
        'n_table' => 'int',
        'software_version' => 'string',
        'type_operation' => 'string',
        'type_document' => 'string',
        'n_lines' => 'int',
        'total_ttc' => 'float',
        'total_ht' => 'float',
        'total_ca' => 'float',
        'reverse' => 'int',
        'reversal' => 'int',
        'id_order' => 'int',
        'short_signature' => 'string',
        'picture_base64' => 'string',
        'picture_link' => 'string',
        'point_value' => 'float',
        'operator' => null,
        'client' => null,
        'sale_method' => null,
        'service' => null,
        'point_of_sale' => null,
        'attributes' => null,
        'taxes' => null,
        'details' => null,
        'payments' => null
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
        'comment' => 'comment',
        'date' => 'date',
        'r_note' => 'r_note',
        'r_ticket' => 'r_ticket',
        'r_invoice' => 'r_invoice',
        'n_note' => 'n_note',
        'n_ticket' => 'n_ticket',
        'n_invoice' => 'n_invoice',
        'n_people' => 'n_people',
        'n_table' => 'n_table',
        'software_version' => 'software_version',
        'type_operation' => 'type_operation',
        'type_document' => 'type_document',
        'n_lines' => 'n_lines',
        'total_ttc' => 'total_ttc',
        'total_ht' => 'total_ht',
        'total_ca' => 'total_ca',
        'reverse' => 'reverse',
        'reversal' => 'reversal',
        'id_order' => 'id_order',
        'short_signature' => 'short_signature',
        'picture_base64' => 'picture_base64',
        'picture_link' => 'picture_link',
        'point_value' => 'point_value',
        'operator' => 'operator',
        'client' => 'client',
        'sale_method' => 'sale_method',
        'service' => 'service',
        'point_of_sale' => 'point_of_sale',
        'attributes' => 'attributes',
        'taxes' => 'taxes',
        'details' => 'details',
        'payments' => 'payments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'comment' => 'setComment',
        'date' => 'setDate',
        'r_note' => 'setRNote',
        'r_ticket' => 'setRTicket',
        'r_invoice' => 'setRInvoice',
        'n_note' => 'setNNote',
        'n_ticket' => 'setNTicket',
        'n_invoice' => 'setNInvoice',
        'n_people' => 'setNPeople',
        'n_table' => 'setNTable',
        'software_version' => 'setSoftwareVersion',
        'type_operation' => 'setTypeOperation',
        'type_document' => 'setTypeDocument',
        'n_lines' => 'setNLines',
        'total_ttc' => 'setTotalTtc',
        'total_ht' => 'setTotalHt',
        'total_ca' => 'setTotalCa',
        'reverse' => 'setReverse',
        'reversal' => 'setReversal',
        'id_order' => 'setIdOrder',
        'short_signature' => 'setShortSignature',
        'picture_base64' => 'setPictureBase64',
        'picture_link' => 'setPictureLink',
        'point_value' => 'setPointValue',
        'operator' => 'setOperator',
        'client' => 'setClient',
        'sale_method' => 'setSaleMethod',
        'service' => 'setService',
        'point_of_sale' => 'setPointOfSale',
        'attributes' => 'setAttributes',
        'taxes' => 'setTaxes',
        'details' => 'setDetails',
        'payments' => 'setPayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'comment' => 'getComment',
        'date' => 'getDate',
        'r_note' => 'getRNote',
        'r_ticket' => 'getRTicket',
        'r_invoice' => 'getRInvoice',
        'n_note' => 'getNNote',
        'n_ticket' => 'getNTicket',
        'n_invoice' => 'getNInvoice',
        'n_people' => 'getNPeople',
        'n_table' => 'getNTable',
        'software_version' => 'getSoftwareVersion',
        'type_operation' => 'getTypeOperation',
        'type_document' => 'getTypeDocument',
        'n_lines' => 'getNLines',
        'total_ttc' => 'getTotalTtc',
        'total_ht' => 'getTotalHt',
        'total_ca' => 'getTotalCa',
        'reverse' => 'getReverse',
        'reversal' => 'getReversal',
        'id_order' => 'getIdOrder',
        'short_signature' => 'getShortSignature',
        'picture_base64' => 'getPictureBase64',
        'picture_link' => 'getPictureLink',
        'point_value' => 'getPointValue',
        'operator' => 'getOperator',
        'client' => 'getClient',
        'sale_method' => 'getSaleMethod',
        'service' => 'getService',
        'point_of_sale' => 'getPointOfSale',
        'attributes' => 'getAttributes',
        'taxes' => 'getTaxes',
        'details' => 'getDetails',
        'payments' => 'getPayments'
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['r_note'] = isset($data['r_note']) ? $data['r_note'] : null;
        $this->container['r_ticket'] = isset($data['r_ticket']) ? $data['r_ticket'] : null;
        $this->container['r_invoice'] = isset($data['r_invoice']) ? $data['r_invoice'] : null;
        $this->container['n_note'] = isset($data['n_note']) ? $data['n_note'] : null;
        $this->container['n_ticket'] = isset($data['n_ticket']) ? $data['n_ticket'] : null;
        $this->container['n_invoice'] = isset($data['n_invoice']) ? $data['n_invoice'] : null;
        $this->container['n_people'] = isset($data['n_people']) ? $data['n_people'] : null;
        $this->container['n_table'] = isset($data['n_table']) ? $data['n_table'] : null;
        $this->container['software_version'] = isset($data['software_version']) ? $data['software_version'] : null;
        $this->container['type_operation'] = isset($data['type_operation']) ? $data['type_operation'] : null;
        $this->container['type_document'] = isset($data['type_document']) ? $data['type_document'] : null;
        $this->container['n_lines'] = isset($data['n_lines']) ? $data['n_lines'] : null;
        $this->container['total_ttc'] = isset($data['total_ttc']) ? $data['total_ttc'] : null;
        $this->container['total_ht'] = isset($data['total_ht']) ? $data['total_ht'] : null;
        $this->container['total_ca'] = isset($data['total_ca']) ? $data['total_ca'] : null;
        $this->container['reverse'] = isset($data['reverse']) ? $data['reverse'] : null;
        $this->container['reversal'] = isset($data['reversal']) ? $data['reversal'] : null;
        $this->container['id_order'] = isset($data['id_order']) ? $data['id_order'] : null;
        $this->container['short_signature'] = isset($data['short_signature']) ? $data['short_signature'] : null;
        $this->container['picture_base64'] = isset($data['picture_base64']) ? $data['picture_base64'] : null;
        $this->container['picture_link'] = isset($data['picture_link']) ? $data['picture_link'] : null;
        $this->container['point_value'] = isset($data['point_value']) ? $data['point_value'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['sale_method'] = isset($data['sale_method']) ? $data['sale_method'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['point_of_sale'] = isset($data['point_of_sale']) ? $data['point_of_sale'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
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
     * @param  $id Identifiant du ticket
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets r_note
     *
     * @return 
     */
    public function getRNote()
    {
        return $this->container['r_note'];
    }

    /**
     * Sets r_note
     *
     * @param  $r_note Référence de note
     *
     * @return $this
     */
    public function setRNote($r_note)
    {
        $this->container['r_note'] = $r_note;

        return $this;
    }

    /**
     * Gets r_ticket
     *
     * @return 
     */
    public function getRTicket()
    {
        return $this->container['r_ticket'];
    }

    /**
     * Sets r_ticket
     *
     * @param  $r_ticket Référence de ticket
     *
     * @return $this
     */
    public function setRTicket($r_ticket)
    {
        $this->container['r_ticket'] = $r_ticket;

        return $this;
    }

    /**
     * Gets r_invoice
     *
     * @return 
     */
    public function getRInvoice()
    {
        return $this->container['r_invoice'];
    }

    /**
     * Sets r_invoice
     *
     * @param  $r_invoice Référence de facture
     *
     * @return $this
     */
    public function setRInvoice($r_invoice)
    {
        $this->container['r_invoice'] = $r_invoice;

        return $this;
    }

    /**
     * Gets n_note
     *
     * @return 
     */
    public function getNNote()
    {
        return $this->container['n_note'];
    }

    /**
     * Sets n_note
     *
     * @param  $n_note Numéro de note
     *
     * @return $this
     */
    public function setNNote($n_note)
    {
        $this->container['n_note'] = $n_note;

        return $this;
    }

    /**
     * Gets n_ticket
     *
     * @return 
     */
    public function getNTicket()
    {
        return $this->container['n_ticket'];
    }

    /**
     * Sets n_ticket
     *
     * @param  $n_ticket Numéro de ticket
     *
     * @return $this
     */
    public function setNTicket($n_ticket)
    {
        $this->container['n_ticket'] = $n_ticket;

        return $this;
    }

    /**
     * Gets n_invoice
     *
     * @return 
     */
    public function getNInvoice()
    {
        return $this->container['n_invoice'];
    }

    /**
     * Sets n_invoice
     *
     * @param  $n_invoice Numéro de facture
     *
     * @return $this
     */
    public function setNInvoice($n_invoice)
    {
        $this->container['n_invoice'] = $n_invoice;

        return $this;
    }

    /**
     * Gets n_people
     *
     * @return 
     */
    public function getNPeople()
    {
        return $this->container['n_people'];
    }

    /**
     * Sets n_people
     *
     * @param  $n_people Nombre de convives
     *
     * @return $this
     */
    public function setNPeople($n_people)
    {
        $this->container['n_people'] = $n_people;

        return $this;
    }

    /**
     * Gets n_table
     *
     * @return 
     */
    public function getNTable()
    {
        return $this->container['n_table'];
    }

    /**
     * Sets n_table
     *
     * @param  $n_table Numéro de table
     *
     * @return $this
     */
    public function setNTable($n_table)
    {
        $this->container['n_table'] = $n_table;

        return $this;
    }

    /**
     * Gets software_version
     *
     * @return 
     */
    public function getSoftwareVersion()
    {
        return $this->container['software_version'];
    }

    /**
     * Sets software_version
     *
     * @param  $software_version Version logiciel
     *
     * @return $this
     */
    public function setSoftwareVersion($software_version)
    {
        $this->container['software_version'] = $software_version;

        return $this;
    }

    /**
     * Gets type_operation
     *
     * @return 
     */
    public function getTypeOperation()
    {
        return $this->container['type_operation'];
    }

    /**
     * Sets type_operation
     *
     * @param  $type_operation Type d'opération
     *
     * @return $this
     */
    public function setTypeOperation($type_operation)
    {
        $this->container['type_operation'] = $type_operation;

        return $this;
    }

    /**
     * Gets type_document
     *
     * @return 
     */
    public function getTypeDocument()
    {
        return $this->container['type_document'];
    }

    /**
     * Sets type_document
     *
     * @param  $type_document Type de document
     *
     * @return $this
     */
    public function setTypeDocument($type_document)
    {
        $this->container['type_document'] = $type_document;

        return $this;
    }

    /**
     * Gets n_lines
     *
     * @return 
     */
    public function getNLines()
    {
        return $this->container['n_lines'];
    }

    /**
     * Sets n_lines
     *
     * @param  $n_lines Nombre de lignes du ticket
     *
     * @return $this
     */
    public function setNLines($n_lines)
    {
        $this->container['n_lines'] = $n_lines;

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
     * @param  $total_ttc Total TTC du ticket
     *
     * @return $this
     */
    public function setTotalTtc($total_ttc)
    {
        $this->container['total_ttc'] = $total_ttc;

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
     * @param  $total_ht Total HT du ticket
     *
     * @return $this
     */
    public function setTotalHt($total_ht)
    {
        $this->container['total_ht'] = $total_ht;

        return $this;
    }

    /**
     * Gets total_ca
     *
     * @return 
     */
    public function getTotalCa()
    {
        return $this->container['total_ca'];
    }

    /**
     * Sets total_ca
     *
     * @param  $total_ca Total CA du ticket
     *
     * @return $this
     */
    public function setTotalCa($total_ca)
    {
        $this->container['total_ca'] = $total_ca;

        return $this;
    }

    /**
     * Gets reverse
     *
     * @return 
     */
    public function getReverse()
    {
        return $this->container['reverse'];
    }

    /**
     * Sets reverse
     *
     * @param  $reverse Flag extourne
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->container['reverse'] = $reverse;

        return $this;
    }

    /**
     * Gets reversal
     *
     * @return 
     */
    public function getReversal()
    {
        return $this->container['reversal'];
    }

    /**
     * Sets reversal
     *
     * @param  $reversal Référence extourne
     *
     * @return $this
     */
    public function setReversal($reversal)
    {
        $this->container['reversal'] = $reversal;

        return $this;
    }

    /**
     * Gets id_order
     *
     * @return 
     */
    public function getIdOrder()
    {
        return $this->container['id_order'];
    }

    /**
     * Sets id_order
     *
     * @param  $id_order Identifiant de la commande associée
     *
     * @return $this
     */
    public function setIdOrder($id_order)
    {
        $this->container['id_order'] = $id_order;

        return $this;
    }

    /**
     * Gets short_signature
     *
     * @return 
     */
    public function getShortSignature()
    {
        return $this->container['short_signature'];
    }

    /**
     * Sets short_signature
     *
     * @param  $short_signature Signature abrégé
     *
     * @return $this
     */
    public function setShortSignature($short_signature)
    {
        $this->container['short_signature'] = $short_signature;

        return $this;
    }

    /**
     * Gets picture_base64
     *
     * @return 
     */
    public function getPictureBase64()
    {
        return $this->container['picture_base64'];
    }

    /**
     * Sets picture_base64
     *
     * @param  $picture_base64 Photo associé au ticket (Base64)
     *
     * @return $this
     */
    public function setPictureBase64($picture_base64)
    {
        $this->container['picture_base64'] = $picture_base64;

        return $this;
    }

    /**
     * Gets picture_link
     *
     * @return 
     */
    public function getPictureLink()
    {
        return $this->container['picture_link'];
    }

    /**
     * Sets picture_link
     *
     * @param  $picture_link Photo associé au ticket (URL générique )
     *
     * @return $this
     */
    public function setPictureLink($picture_link)
    {
        $this->container['picture_link'] = $picture_link;

        return $this;
    }

    /**
     * Gets point_value
     *
     * @return 
     */
    public function getPointValue()
    {
        return $this->container['point_value'];
    }

    /**
     * Sets point_value
     *
     * @param  $point_value Valeur de point
     *
     * @return $this
     */
    public function setPointValue($point_value)
    {
        $this->container['point_value'] = $point_value;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return \Qwenta\Fulleapps\Model\Operator
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param \Qwenta\Fulleapps\Model\Operator $operator operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

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
     * Gets sale_method
     *
     * @return \Qwenta\Fulleapps\Model\SaleMethod
     */
    public function getSaleMethod()
    {
        return $this->container['sale_method'];
    }

    /**
     * Sets sale_method
     *
     * @param \Qwenta\Fulleapps\Model\SaleMethod $sale_method sale_method
     *
     * @return $this
     */
    public function setSaleMethod($sale_method)
    {
        $this->container['sale_method'] = $sale_method;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \Qwenta\Fulleapps\Model\Service
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \Qwenta\Fulleapps\Model\Service $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

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
     * Gets attributes
     *
     * @return \Qwenta\Fulleapps\Model\Attributes
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Qwenta\Fulleapps\Model\Attributes $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \Qwenta\Fulleapps\Model\NoteTicketTaxes
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Qwenta\Fulleapps\Model\NoteTicketTaxes $taxes taxes
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

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
     * Gets payments
     *
     * @return \Qwenta\Fulleapps\Model\NoteTicketPayments
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Qwenta\Fulleapps\Model\NoteTicketPayments $payments payments
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

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
