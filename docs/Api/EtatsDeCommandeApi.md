# Qwenta\Fulleapps\EtatsDeCommandeApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderLevel**](EtatsDeCommandeApi.md#addorderlevel) | **POST** /order_levels | Création
[**deleteOrderLevel**](EtatsDeCommandeApi.md#deleteorderlevel) | **POST** /order_levels/delete/id | Suppression
[**editOrderLevel**](EtatsDeCommandeApi.md#editorderlevel) | **POST** /order_levels/id | Modification
[**getOrderLevel**](EtatsDeCommandeApi.md#getorderlevel) | **GET** /order_levels | Récupération

# **addOrderLevel**
> addOrderLevel($body)

Création

Création d'un état de commande

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\EtatsDeCommandeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\OrderLevel(); // \Qwenta\Fulleapps\Model\OrderLevel | 

try {
    $apiInstance->addOrderLevel($body);
} catch (Exception $e) {
    echo 'Exception when calling EtatsDeCommandeApi->addOrderLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\OrderLevel**](../Model/OrderLevel.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderLevel**
> deleteOrderLevel()

Suppression

Suppression d'un état de commande

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\EtatsDeCommandeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->deleteOrderLevel();
} catch (Exception $e) {
    echo 'Exception when calling EtatsDeCommandeApi->deleteOrderLevel: ', $e->getMessage(), PHP_EOL;
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

# **editOrderLevel**
> editOrderLevel($body)

Modification

Modification d'un état de commande

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\EtatsDeCommandeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\OrderLevel(); // \Qwenta\Fulleapps\Model\OrderLevel | 

try {
    $apiInstance->editOrderLevel($body);
} catch (Exception $e) {
    echo 'Exception when calling EtatsDeCommandeApi->editOrderLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\OrderLevel**](../Model/OrderLevel.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderLevel**
> \Qwenta\Fulleapps\Model\OrderLevel[] getOrderLevel()

Récupération

Récupération des états de commandes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\EtatsDeCommandeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOrderLevel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EtatsDeCommandeApi->getOrderLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\OrderLevel[]**](../Model/OrderLevel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

