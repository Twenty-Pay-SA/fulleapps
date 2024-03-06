# Qwenta\Fulleapps\LocalisationsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**80b83011240cac4a3fed00b6ebb1e592**](LocalisationsApi.md#80b83011240cac4a3fed00b6ebb1e592) | **GET** /v1/countries | Récupération des pays
[**getCities**](LocalisationsApi.md#getcities) | **GET** /v1/cities | Récupération des villes
[**getPostalCodes**](LocalisationsApi.md#getpostalcodes) | **GET** /v1/postal_codes | Récupération des codes postaux

# **80b83011240cac4a3fed00b6ebb1e592**
> \Qwenta\Fulleapps\Model\Country[] 80b83011240cac4a3fed00b6ebb1e592()

Récupération des pays

Récupération des pays pris en charge par Fulle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\LocalisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->80b83011240cac4a3fed00b6ebb1e592();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalisationsApi->80b83011240cac4a3fed00b6ebb1e592: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\Country[]**](../Model/Country.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCities**
> \Qwenta\Fulleapps\Model\City[] getCities($id_country, $postal_code)

Récupération des villes

Récupération des villes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\LocalisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_country = 56; // int | Récupération des villes par pays
$postal_code = 56; // int | Récupération des villes par code postal

try {
    $result = $apiInstance->getCities($id_country, $postal_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalisationsApi->getCities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_country** | **int**| Récupération des villes par pays |
 **postal_code** | **int**| Récupération des villes par code postal |

### Return type

[**\Qwenta\Fulleapps\Model\City[]**](../Model/City.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPostalCodes**
> getPostalCodes($id_country)

Récupération des codes postaux

Récupération des codes postaux

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\LocalisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_country = 56; // int | Identifiant du pays

try {
    $apiInstance->getPostalCodes($id_country);
} catch (Exception $e) {
    echo 'Exception when calling LocalisationsApi->getPostalCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_country** | **int**| Identifiant du pays |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

