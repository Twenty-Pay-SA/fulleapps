# Qwenta\Fulleapps\TarifsDexpeditionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**21ec321a64a985429452b4318ce8f31e**](TarifsDexpeditionApi.md#21ec321a64a985429452b4318ce8f31e) | **POST** /v1/shipping_costs/delete/id | Suppression
[**59996808a4dbfac478c96c8a4d77a4c1**](TarifsDexpeditionApi.md#59996808a4dbfac478c96c8a4d77a4c1) | **POST** /v1/shipping_costs | Création
[**a19f924dae93630dcde7a199b2a1b244**](TarifsDexpeditionApi.md#a19f924dae93630dcde7a199b2a1b244) | **POST** /v1/shipping_costs/id | Modification
[**f04305bdf0ac9ea3745c0d631d651e7a**](TarifsDexpeditionApi.md#f04305bdf0ac9ea3745c0d631d651e7a) | **GET** /v1/shipping_costs | Récupération

# **21ec321a64a985429452b4318ce8f31e**
> 21ec321a64a985429452b4318ce8f31e()

Suppression

Suppression des tarifs d'expedition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TarifsDexpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->21ec321a64a985429452b4318ce8f31e();
} catch (Exception $e) {
    echo 'Exception when calling TarifsDexpeditionApi->21ec321a64a985429452b4318ce8f31e: ', $e->getMessage(), PHP_EOL;
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

# **59996808a4dbfac478c96c8a4d77a4c1**
> 59996808a4dbfac478c96c8a4d77a4c1($body)

Création

Création des tarifs d'expedition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TarifsDexpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ShippingCost(); // \Qwenta\Fulleapps\Model\ShippingCost | 

try {
    $apiInstance->59996808a4dbfac478c96c8a4d77a4c1($body);
} catch (Exception $e) {
    echo 'Exception when calling TarifsDexpeditionApi->59996808a4dbfac478c96c8a4d77a4c1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ShippingCost**](../Model/ShippingCost.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **a19f924dae93630dcde7a199b2a1b244**
> a19f924dae93630dcde7a199b2a1b244($body)

Modification

Modification des tarifs d'expedition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TarifsDexpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ShippingCost(); // \Qwenta\Fulleapps\Model\ShippingCost | 

try {
    $apiInstance->a19f924dae93630dcde7a199b2a1b244($body);
} catch (Exception $e) {
    echo 'Exception when calling TarifsDexpeditionApi->a19f924dae93630dcde7a199b2a1b244: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ShippingCost**](../Model/ShippingCost.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **f04305bdf0ac9ea3745c0d631d651e7a**
> \Qwenta\Fulleapps\Model\ShippingCost[] f04305bdf0ac9ea3745c0d631d651e7a($id_point_of_sale)

Récupération

Récupération des tarifs d'expedition (Commande en ligne uniquement).<br/>Permet de calculer les tarifs d'expedition par rapport au pays d'expédition et au poids du panier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TarifsDexpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_point_of_sale = 56; // int | Identifiant du point de vente

try {
    $result = $apiInstance->f04305bdf0ac9ea3745c0d631d651e7a($id_point_of_sale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TarifsDexpeditionApi->f04305bdf0ac9ea3745c0d631d651e7a: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_point_of_sale** | **int**| Identifiant du point de vente |

### Return type

[**\Qwenta\Fulleapps\Model\ShippingCost[]**](../Model/ShippingCost.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

