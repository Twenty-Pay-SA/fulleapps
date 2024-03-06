# Qwenta\Fulleapps\ClientsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**17fbd3b411db30f4b7617004576c1667**](ClientsApi.md#17fbd3b411db30f4b7617004576c1667) | **POST** /client_phones | Téléphone client
[**7e68b42573f5fa4bfbb5a5e1c3bfe984**](ClientsApi.md#7e68b42573f5fa4bfbb5a5e1c3bfe984) | **GET** /clients | List all clients
[**84296fbe6a10aaaf600d67365c9689f7**](ClientsApi.md#84296fbe6a10aaaf600d67365c9689f7) | **POST** /clients | Création
[**946269d51fb17f425e86ecacf6bee4f0**](ClientsApi.md#946269d51fb17f425e86ecacf6bee4f0) | **POST** /clients/delete/id | Suppression
[**clientAttributesIdGet**](ClientsApi.md#clientattributesidget) | **GET** /client_attributes/id | Récupération des attributs client
[**clientsIdGet**](ClientsApi.md#clientsidget) | **GET** /clients/{id} | Retrieve a client
[**f2613b0767e283ce8b94eb7b7c445f99**](ClientsApi.md#f2613b0767e283ce8b94eb7b7c445f99) | **POST** /clients/id | Modification
[**getClientPictures**](ClientsApi.md#getclientpictures) | **GET** /ticket_pictures | Galerie

# **17fbd3b411db30f4b7617004576c1667**
> 17fbd3b411db30f4b7617004576c1667($body)

Téléphone client

Création d'une fiche client à partir d'un numéro de téléphone (disponible uniquement depuis l'application de caisse)<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientPhone(); // \Qwenta\Fulleapps\Model\ClientPhone | 

try {
    $apiInstance->17fbd3b411db30f4b7617004576c1667($body);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->17fbd3b411db30f4b7617004576c1667: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientPhone**](../Model/ClientPhone.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **7e68b42573f5fa4bfbb5a5e1c3bfe984**
> \Qwenta\Fulleapps\Model\InlineResponse2006 7e68b42573f5fa4bfbb5a5e1c3bfe984($reference, $mail, $phone, $phone_country, $search)

List all clients

List all clients.<br/>You can add GET Parameters to filter the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference = "reference_example"; // string | Récupération par référence (unique)
$mail = "mail_example"; // string | Récupération par email (unique)
$phone = "phone_example"; // string | Récupération par téléphone mobile (Le paramètre phone_country doit être également renseigné)
$phone_country = "phone_country_example"; // string | Code pays du téléphone mobile du client (ISO alpha-2) (Le paramètre phone doit être également renseigné)
$search = "search_example"; // string | Recherche textuelle (Recherche par début de prenom, nom, société, mail)

try {
    $result = $apiInstance->7e68b42573f5fa4bfbb5a5e1c3bfe984($reference, $mail, $phone, $phone_country, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->7e68b42573f5fa4bfbb5a5e1c3bfe984: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Récupération par référence (unique) |
 **mail** | **string**| Récupération par email (unique) |
 **phone** | **string**| Récupération par téléphone mobile (Le paramètre phone_country doit être également renseigné) |
 **phone_country** | **string**| Code pays du téléphone mobile du client (ISO alpha-2) (Le paramètre phone doit être également renseigné) |
 **search** | **string**| Recherche textuelle (Recherche par début de prenom, nom, société, mail) |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **84296fbe6a10aaaf600d67365c9689f7**
> \Qwenta\Fulleapps\Model\InlineResponse2007 84296fbe6a10aaaf600d67365c9689f7($body)

Création

Création d'un client<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Client(); // \Qwenta\Fulleapps\Model\Client | 

try {
    $result = $apiInstance->84296fbe6a10aaaf600d67365c9689f7($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->84296fbe6a10aaaf600d67365c9689f7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Client**](../Model/Client.md)|  |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **946269d51fb17f425e86ecacf6bee4f0**
> 946269d51fb17f425e86ecacf6bee4f0()

Suppression

Suppression d'un client<br/><strong>WEBHOOK OK</strong><br/>Les données uniques au client seront supprimées définitivement (référence, mail et numéro de mobile).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->946269d51fb17f425e86ecacf6bee4f0();
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->946269d51fb17f425e86ecacf6bee4f0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientAttributesIdGet**
> \Qwenta\Fulleapps\Model\ClientAttribute[] clientAttributesIdGet()

Récupération des attributs client

Récupération des attributs client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->clientAttributesIdGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientAttributesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\ClientAttribute[]**](../Model/ClientAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsIdGet**
> \Qwenta\Fulleapps\Model\InlineResponse2006 clientsIdGet()

Retrieve a client

Retrieve a client. Supply the unique ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->clientsIdGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **f2613b0767e283ce8b94eb7b7c445f99**
> f2613b0767e283ce8b94eb7b7c445f99($body)

Modification

Modification d'un client<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Client(); // \Qwenta\Fulleapps\Model\Client | 

try {
    $apiInstance->f2613b0767e283ce8b94eb7b7c445f99($body);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->f2613b0767e283ce8b94eb7b7c445f99: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Client**](../Model/Client.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientPictures**
> \Qwenta\Fulleapps\Model\InlineResponse2003 getClientPictures($id_client)

Galerie

Récupération de la galerie photo du client (photos associées aux tickets passages du client)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_client = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du client

try {
    $result = $apiInstance->getClientPictures($id_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->getClientPictures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_client** | [**Int**](../Model/.md)| Identifiant du client |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

