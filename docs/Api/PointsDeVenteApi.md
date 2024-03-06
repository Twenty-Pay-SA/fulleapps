# Qwenta\Fulleapps\PointsDeVenteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPointOfSale**](PointsDeVenteApi.md#createpointofsale) | **POST** /points_of_sale | Création
[**deletePointOfSale**](PointsDeVenteApi.md#deletepointofsale) | **POST** /points_of_sale/delete/{id} | Suppression
[**getPointsOfSale**](PointsDeVenteApi.md#getpointsofsale) | **GET** /points_of_sale | Récupération
[**updatePointOfSale**](PointsDeVenteApi.md#updatepointofsale) | **POST** /points_of_sale/{id} | Modification

# **createPointOfSale**
> createPointOfSale($body)

Création

Création d'un point de vente<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PointsDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\PointOfSale(); // \Qwenta\Fulleapps\Model\PointOfSale | 

try {
    $apiInstance->createPointOfSale($body);
} catch (Exception $e) {
    echo 'Exception when calling PointsDeVenteApi->createPointOfSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\PointOfSale**](../Model/PointOfSale.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePointOfSale**
> deletePointOfSale($id)

Suppression

Suppression d'un point de vente<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PointsDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant du point de vente

try {
    $apiInstance->deletePointOfSale($id);
} catch (Exception $e) {
    echo 'Exception when calling PointsDeVenteApi->deletePointOfSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant du point de vente | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPointsOfSale**
> \Qwenta\Fulleapps\Model\InlineResponse20018 getPointsOfSale($base64)

Récupération

Récupération des points de vente

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PointsDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base64 = "base64_example"; // string | Récupération de l'image associé au point de vente en base64 (mini = 72x72, small = 128x128, medium = 256x256, large = 512x512)

try {
    $result = $apiInstance->getPointsOfSale($base64);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsDeVenteApi->getPointsOfSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base64** | **string**| Récupération de l&#x27;image associé au point de vente en base64 (mini &#x3D; 72x72, small &#x3D; 128x128, medium &#x3D; 256x256, large &#x3D; 512x512) |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePointOfSale**
> updatePointOfSale($body, $id)

Modification

Modification d'un point de vente<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PointsDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\PointOfSale(); // \Qwenta\Fulleapps\Model\PointOfSale | 
$id = 56; // int | Identifiant du point de vente

try {
    $apiInstance->updatePointOfSale($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling PointsDeVenteApi->updatePointOfSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\PointOfSale**](../Model/PointOfSale.md)|  |
 **id** | **int**| Identifiant du point de vente | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

