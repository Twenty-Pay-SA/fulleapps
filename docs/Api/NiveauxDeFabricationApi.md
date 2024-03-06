# Qwenta\Fulleapps\NiveauxDeFabricationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**2b00caad42538e9be7dab4f1ff320ef9**](NiveauxDeFabricationApi.md#2b00caad42538e9be7dab4f1ff320ef9) | **POST** /v1/kitchen_levels/id | Modification
[**500e11a684de8458a5c2542edf4c69f1**](NiveauxDeFabricationApi.md#500e11a684de8458a5c2542edf4c69f1) | **GET** /v1/kitchen_levels | Récupération

# **2b00caad42538e9be7dab4f1ff320ef9**
> 2b00caad42538e9be7dab4f1ff320ef9($body)

Modification

Modification d'un niveau de fabrication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\NiveauxDeFabricationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\KitchenLevel(); // \Qwenta\Fulleapps\Model\KitchenLevel | Pet object that needs to be added to the store

try {
    $apiInstance->2b00caad42538e9be7dab4f1ff320ef9($body);
} catch (Exception $e) {
    echo 'Exception when calling NiveauxDeFabricationApi->2b00caad42538e9be7dab4f1ff320ef9: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\KitchenLevel**](../Model/KitchenLevel.md)| Pet object that needs to be added to the store |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **500e11a684de8458a5c2542edf4c69f1**
> \Qwenta\Fulleapps\Model\KitchenLevel[] 500e11a684de8458a5c2542edf4c69f1()

Récupération

Récupération des niveaux de fabrication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\NiveauxDeFabricationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->500e11a684de8458a5c2542edf4c69f1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NiveauxDeFabricationApi->500e11a684de8458a5c2542edf4c69f1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\KitchenLevel[]**](../Model/KitchenLevel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

