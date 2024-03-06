# Qwenta\Fulleapps\RemisesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDiscount**](RemisesApi.md#adddiscount) | **POST** /discounts | Création
[**deleteDiscount**](RemisesApi.md#deletediscount) | **POST** /discounts/delete/{id} | Suppression
[**getDiscounts**](RemisesApi.md#getdiscounts) | **GET** /discounts | Récupération
[**updateDiscount**](RemisesApi.md#updatediscount) | **POST** /discount/{id} | Modification

# **addDiscount**
> addDiscount($body)

Création

Création d'une remise

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RemisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Discount(); // \Qwenta\Fulleapps\Model\Discount | 

try {
    $apiInstance->addDiscount($body);
} catch (Exception $e) {
    echo 'Exception when calling RemisesApi->addDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Discount**](../Model/Discount.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDiscount**
> deleteDiscount($id)

Suppression

Suppression d'une remise

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RemisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant de la remise

try {
    $apiInstance->deleteDiscount($id);
} catch (Exception $e) {
    echo 'Exception when calling RemisesApi->deleteDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant de la remise | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscounts**
> \Qwenta\Fulleapps\Model\InlineResponse20012 getDiscounts($is_active)

Récupération

Récupération des remises pré-configurées<br/>Les remises pré-configurées permettent des périodicités et des remises spécifiques par rubriques / produits

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RemisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_active = new \Qwenta\Fulleapps\Model\Int(); // Int | 1 pour récupérer uniquement les remises actives sur la période en cours

try {
    $result = $apiInstance->getDiscounts($is_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemisesApi->getDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_active** | [**Int**](../Model/.md)| 1 pour récupérer uniquement les remises actives sur la période en cours | [optional]

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDiscount**
> updateDiscount($body, $id)

Modification

Modification d'une remise

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RemisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Discount(); // \Qwenta\Fulleapps\Model\Discount | 
$id = 56; // int | Identifiant de la période

try {
    $apiInstance->updateDiscount($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling RemisesApi->updateDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Discount**](../Model/Discount.md)|  |
 **id** | **int**| Identifiant de la période | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

