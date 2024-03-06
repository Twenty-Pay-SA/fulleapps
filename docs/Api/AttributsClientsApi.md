# Qwenta\Fulleapps\AttributsClientsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**8f97ab0136a33c5b61c5205e536db080**](AttributsClientsApi.md#8f97ab0136a33c5b61c5205e536db080) | **POST** /client_attributes | Création d&#x27;un attribut client
[**944cce98151b78d439212d0f53c58cca**](AttributsClientsApi.md#944cce98151b78d439212d0f53c58cca) | **POST** /client_attributes/id | Modification d&#x27;un attribut client
[**deleteClientAttribute**](AttributsClientsApi.md#deleteclientattribute) | **GET** /client_attributes/delete/{id} | Suppression d&#x27;un attribut client
[**ec344b54a555a97d273c4a58ef8c7001**](AttributsClientsApi.md#ec344b54a555a97d273c4a58ef8c7001) | **GET** /client_attributes | Récupération d&#x27;un attribut client

# **8f97ab0136a33c5b61c5205e536db080**
> 8f97ab0136a33c5b61c5205e536db080($body)

Création d'un attribut client

Création d'un attribut client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AttributsClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientAttribute(); // \Qwenta\Fulleapps\Model\ClientAttribute | 

try {
    $apiInstance->8f97ab0136a33c5b61c5205e536db080($body);
} catch (Exception $e) {
    echo 'Exception when calling AttributsClientsApi->8f97ab0136a33c5b61c5205e536db080: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientAttribute**](../Model/ClientAttribute.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **944cce98151b78d439212d0f53c58cca**
> 944cce98151b78d439212d0f53c58cca($body)

Modification d'un attribut client

Modification d'un attribut client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AttributsClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientAttribute(); // \Qwenta\Fulleapps\Model\ClientAttribute | 

try {
    $apiInstance->944cce98151b78d439212d0f53c58cca($body);
} catch (Exception $e) {
    echo 'Exception when calling AttributsClientsApi->944cce98151b78d439212d0f53c58cca: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientAttribute**](../Model/ClientAttribute.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClientAttribute**
> deleteClientAttribute($id)

Suppression d'un attribut client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AttributsClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant de l'attribut client

try {
    $apiInstance->deleteClientAttribute($id);
} catch (Exception $e) {
    echo 'Exception when calling AttributsClientsApi->deleteClientAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant de l&#x27;attribut client |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ec344b54a555a97d273c4a58ef8c7001**
> \Qwenta\Fulleapps\Model\ClientAttribute[] ec344b54a555a97d273c4a58ef8c7001()

Récupération d'un attribut client

Récupération d'un attribut client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AttributsClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ec344b54a555a97d273c4a58ef8c7001();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributsClientsApi->ec344b54a555a97d273c4a58ef8c7001: ', $e->getMessage(), PHP_EOL;
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

