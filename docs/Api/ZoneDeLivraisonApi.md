# Qwenta\Fulleapps\ZoneDeLivraisonApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDeliveryZone**](ZoneDeLivraisonApi.md#adddeliveryzone) | **POST** /v1/delivery_zones | Création
[**deleteDeliveryZone**](ZoneDeLivraisonApi.md#deletedeliveryzone) | **POST** /v1/delivery_zones/delete/id | Suppression
[**getDeliveryZones**](ZoneDeLivraisonApi.md#getdeliveryzones) | **GET** /v1/delivery_zones | Récupération

# **addDeliveryZone**
> addDeliveryZone($body)

Création

Création d'une zone de livraison

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ZoneDeLivraisonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\DeliveryZone(); // \Qwenta\Fulleapps\Model\DeliveryZone | 

try {
    $apiInstance->addDeliveryZone($body);
} catch (Exception $e) {
    echo 'Exception when calling ZoneDeLivraisonApi->addDeliveryZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\DeliveryZone**](../Model/DeliveryZone.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeliveryZone**
> deleteDeliveryZone()

Suppression

Suppression d'une zone de livraison

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ZoneDeLivraisonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->deleteDeliveryZone();
} catch (Exception $e) {
    echo 'Exception when calling ZoneDeLivraisonApi->deleteDeliveryZone: ', $e->getMessage(), PHP_EOL;
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

# **getDeliveryZones**
> \Qwenta\Fulleapps\Model\DeliveryZone[] getDeliveryZones($id_point_of_sale)

Récupération

Récupération des zones de livraison

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ZoneDeLivraisonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_point_of_sale = 56; // int | Identifiant du point de vente

try {
    $result = $apiInstance->getDeliveryZones($id_point_of_sale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneDeLivraisonApi->getDeliveryZones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_point_of_sale** | **int**| Identifiant du point de vente |

### Return type

[**\Qwenta\Fulleapps\Model\DeliveryZone[]**](../Model/DeliveryZone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

