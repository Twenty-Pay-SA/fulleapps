# Qwenta\Fulleapps\PeriodesDePrixApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPricePeriod**](PeriodesDePrixApi.md#addpriceperiod) | **POST** /price_periods | Création
[**deletePricePeriod**](PeriodesDePrixApi.md#deletepriceperiod) | **POST** /price_periods/delete/{id} | Suppression
[**getPricePeriods**](PeriodesDePrixApi.md#getpriceperiods) | **GET** /price_periods | Récupération
[**updatePricePeriod**](PeriodesDePrixApi.md#updatepriceperiod) | **POST** /price_periods/{id} | Modification

# **addPricePeriod**
> addPricePeriod($body)

Création

Création d'une période

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PeriodesDePrixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\PricePeriod(); // \Qwenta\Fulleapps\Model\PricePeriod | 

try {
    $apiInstance->addPricePeriod($body);
} catch (Exception $e) {
    echo 'Exception when calling PeriodesDePrixApi->addPricePeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\PricePeriod**](../Model/PricePeriod.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePricePeriod**
> deletePricePeriod($id)

Suppression

Suppression d'une période

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PeriodesDePrixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant de la période

try {
    $apiInstance->deletePricePeriod($id);
} catch (Exception $e) {
    echo 'Exception when calling PeriodesDePrixApi->deletePricePeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant de la période | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPricePeriods**
> \Qwenta\Fulleapps\Model\InlineResponse20020 getPricePeriods($id)

Récupération

Récupération des périodes<br/>Les périodes de prix permettent de gérer des happy hours ou plats du jour en définissant un prix sur des horaires particuliers pour chaque combinaison produits / mode de vente

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PeriodesDePrixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant de la période de prix

try {
    $result = $apiInstance->getPricePeriods($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeriodesDePrixApi->getPricePeriods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant de la période de prix |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePricePeriod**
> updatePricePeriod($body, $id)

Modification

Modification d'une période

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PeriodesDePrixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\PricePeriod(); // \Qwenta\Fulleapps\Model\PricePeriod | 
$id = 56; // int | Identifiant de la période

try {
    $apiInstance->updatePricePeriod($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling PeriodesDePrixApi->updatePricePeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\PricePeriod**](../Model/PricePeriod.md)|  |
 **id** | **int**| Identifiant de la période | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

