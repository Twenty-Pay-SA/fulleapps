# Qwenta\Fulleapps\TicketsFacturesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**562036c332b6ce12941531a4d67d1dcc**](TicketsFacturesApi.md#562036c332b6ce12941531a4d67d1dcc) | **GET** /tickets | Get list
[**975b864a5ceffd0c3a4eecb52e4bc0f3**](TicketsFacturesApi.md#975b864a5ceffd0c3a4eecb52e4bc0f3) | **POST** /invoice/{id} | Générer une facture
[**d4ee3ae3ac497d65be0065b51f77a7c4**](TicketsFacturesApi.md#d4ee3ae3ac497d65be0065b51f77a7c4) | **POST** /tickets/{id} | Modifier un ticket
[**ticketsIdGet**](TicketsFacturesApi.md#ticketsidget) | **GET** /tickets/{id} | Get by ID
[**ticketsPost**](TicketsFacturesApi.md#ticketspost) | **POST** /tickets | Créer un ticket

# **562036c332b6ce12941531a4d67d1dcc**
> \Qwenta\Fulleapps\Model\InlineResponse20015 562036c332b6ce12941531a4d67d1dcc($from_service_date, $to_service_date, $from_date, $to_date, $id_point_of_sale, $id_sale_method, $offset, $limit)

Get list

Récupération des tickets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TicketsFacturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_service_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de début de période
$to_service_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de fin de période
$from_date = new \Qwenta\Fulleapps\Model\Datetime(); // Datetime | Date/Heure de saisie du ticket
$to_date = new \Qwenta\Fulleapps\Model\Datetime(); // Datetime | Date/Heure de saisie du ticket
$id_point_of_sale = 56; // int | Récupération par point de vente de vente
$id_sale_method = 56; // int | Récupération par mode de vente
$offset = 56; // int | Offset
$limit = 56; // int | Limit

try {
    $result = $apiInstance->562036c332b6ce12941531a4d67d1dcc($from_service_date, $to_service_date, $from_date, $to_date, $id_point_of_sale, $id_sale_method, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsFacturesApi->562036c332b6ce12941531a4d67d1dcc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_service_date** | [**\DateTime**](../Model/.md)| Date de début de période |
 **to_service_date** | [**\DateTime**](../Model/.md)| Date de fin de période |
 **from_date** | [**Datetime**](../Model/.md)| Date/Heure de saisie du ticket |
 **to_date** | [**Datetime**](../Model/.md)| Date/Heure de saisie du ticket |
 **id_point_of_sale** | **int**| Récupération par point de vente de vente |
 **id_sale_method** | **int**| Récupération par mode de vente |
 **offset** | **int**| Offset |
 **limit** | **int**| Limit |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **975b864a5ceffd0c3a4eecb52e4bc0f3**
> 975b864a5ceffd0c3a4eecb52e4bc0f3($id, $body)

Générer une facture

Création d'une facture à partir d'un ticket (Un client doit être associé au ticket, voir la section Modification de ticket si ce n'est pas le cas).<br/><br/>      - Le paramètre client_address (avec adresse complète, code postal et ville) est conseillé. Le cas échéant, le code postal renseigné sur la fiche client sera utilisé<br/>      - Pour les personnes physiques, le nom / prénom / code postal à minima sont obligatoires.<br/>      - Pour les personnes morales, le nom de la société / code postal à minima sont obligatoires.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TicketsFacturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Ticket ID
$body = new \Qwenta\Fulleapps\Model\InvoiceIdBody(); // \Qwenta\Fulleapps\Model\InvoiceIdBody | 

try {
    $apiInstance->975b864a5ceffd0c3a4eecb52e4bc0f3($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketsFacturesApi->975b864a5ceffd0c3a4eecb52e4bc0f3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Ticket ID |
 **body** | [**\Qwenta\Fulleapps\Model\InvoiceIdBody**](../Model/InvoiceIdBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **d4ee3ae3ac497d65be0065b51f77a7c4**
> d4ee3ae3ac497d65be0065b51f77a7c4($body, $id)

Modifier un ticket

Modification d'un ticket/facture (Uniquement disponible via l'application de caisse)<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TicketsFacturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\NoteTicket(); // \Qwenta\Fulleapps\Model\NoteTicket | 
$id = 56; // int | Ticket ID

try {
    $apiInstance->d4ee3ae3ac497d65be0065b51f77a7c4($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling TicketsFacturesApi->d4ee3ae3ac497d65be0065b51f77a7c4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\NoteTicket**](../Model/NoteTicket.md)|  |
 **id** | **int**| Ticket ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsIdGet**
> \Qwenta\Fulleapps\Model\InlineResponse20015 ticketsIdGet($)

Get by ID

Récupération d'un ticket/facture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TicketsFacturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ = new \Qwenta\Fulleapps\Model\null(); //  | Ticket ID

try {
    $result = $apiInstance->ticketsIdGet($);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsFacturesApi->ticketsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **** | [****](../Model/.md)| Ticket ID |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsPost**
> ticketsPost($body)

Créer un ticket

Création d'un ticket/facture (Uniquement disponible via l'application de caisse)<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TicketsFacturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\NoteTicket(); // \Qwenta\Fulleapps\Model\NoteTicket | 

try {
    $apiInstance->ticketsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling TicketsFacturesApi->ticketsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\NoteTicket**](../Model/NoteTicket.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

