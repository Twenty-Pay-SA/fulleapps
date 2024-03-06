# Qwenta\Fulleapps\AdressesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**294d0f9a1d8d475e701a2b353d6ba139**](AdressesApi.md#294d0f9a1d8d475e701a2b353d6ba139) | **POST** /client_addresses/id | Modification
[**b14e872fe1fa12d6de1bb1214abd83f1**](AdressesApi.md#b14e872fe1fa12d6de1bb1214abd83f1) | **POST** /client_addresses | Création
[**getClientAddresses**](AdressesApi.md#getclientaddresses) | **GET** /client_addresses/{id} | Récupération

# **294d0f9a1d8d475e701a2b353d6ba139**
> 294d0f9a1d8d475e701a2b353d6ba139($body)

Modification

Modification d'une adresse client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AdressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientAddress(); // \Qwenta\Fulleapps\Model\ClientAddress | 

try {
    $apiInstance->294d0f9a1d8d475e701a2b353d6ba139($body);
} catch (Exception $e) {
    echo 'Exception when calling AdressesApi->294d0f9a1d8d475e701a2b353d6ba139: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientAddress**](../Model/ClientAddress.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **b14e872fe1fa12d6de1bb1214abd83f1**
> b14e872fe1fa12d6de1bb1214abd83f1($body)

Création

Création d'une adresse client<br/>En mode création d'adresse, vous devez spécifier un champ 'id_client' dans l'object JSON, correspondant à l'identifiant du client associé à l'adresse

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AdressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientAddress(); // \Qwenta\Fulleapps\Model\ClientAddress | 

try {
    $apiInstance->b14e872fe1fa12d6de1bb1214abd83f1($body);
} catch (Exception $e) {
    echo 'Exception when calling AdressesApi->b14e872fe1fa12d6de1bb1214abd83f1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientAddress**](../Model/ClientAddress.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientAddresses**
> \Qwenta\Fulleapps\Model\ClientAddress[] getClientAddresses($id)

Récupération

Récupération des adresses clients

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AdressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du client

try {
    $result = $apiInstance->getClientAddresses($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdressesApi->getClientAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**Int**](../Model/.md)| Identifiant du client |

### Return type

[**\Qwenta\Fulleapps\Model\ClientAddress[]**](../Model/ClientAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

