# Qwenta\Fulleapps\PointsDeStockApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**8d24a6b22a8bd4ee617d1c686ed65d60**](PointsDeStockApi.md#8d24a6b22a8bd4ee617d1c686ed65d60) | **POST** /points_of_stocks/{id} | Modification
[**9f7e94287bc44feed733c9e62bad5112**](PointsDeStockApi.md#9f7e94287bc44feed733c9e62bad5112) | **POST** /points_of_stocks | Création
[**getPointsOfStock**](PointsDeStockApi.md#getpointsofstock) | **GET** /points_of_stocks | Récupération

# **8d24a6b22a8bd4ee617d1c686ed65d60**
> 8d24a6b22a8bd4ee617d1c686ed65d60($body, $id)

Modification

Modification d'un point de stock (Option requise : Stocks Centralisés)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PointsDeStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\PointOfStock(); // \Qwenta\Fulleapps\Model\PointOfStock | 
$id = 56; // int | Identifiant du point de stock

try {
    $apiInstance->8d24a6b22a8bd4ee617d1c686ed65d60($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling PointsDeStockApi->8d24a6b22a8bd4ee617d1c686ed65d60: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\PointOfStock**](../Model/PointOfStock.md)|  |
 **id** | **int**| Identifiant du point de stock |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **9f7e94287bc44feed733c9e62bad5112**
> 9f7e94287bc44feed733c9e62bad5112($body)

Création

Création d'un point de stock (Option requise : Stocks Centralisés)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PointsDeStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\PointOfStock(); // \Qwenta\Fulleapps\Model\PointOfStock | 

try {
    $apiInstance->9f7e94287bc44feed733c9e62bad5112($body);
} catch (Exception $e) {
    echo 'Exception when calling PointsDeStockApi->9f7e94287bc44feed733c9e62bad5112: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\PointOfStock**](../Model/PointOfStock.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPointsOfStock**
> \Qwenta\Fulleapps\Model\InlineResponse20019 getPointsOfStock($id)

Récupération

Récupération des points de stock (Option requise : Stocks Centralisés)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PointsDeStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant du point de stock (pour récupération unique)

try {
    $result = $apiInstance->getPointsOfStock($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsDeStockApi->getPointsOfStock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant du point de stock (pour récupération unique) | [optional]

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

