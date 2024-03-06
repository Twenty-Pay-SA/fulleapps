# Qwenta\Fulleapps\HistoriqueFidlitApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**851a9e3b5a3f96682fa7d5fbaa8a438a**](HistoriqueFidlitApi.md#851a9e3b5a3f96682fa7d5fbaa8a438a) | **GET** /v1/fidelity_history | Récupération

# **851a9e3b5a3f96682fa7d5fbaa8a438a**
> \Qwenta\Fulleapps\Model\FidelityHistory[] 851a9e3b5a3f96682fa7d5fbaa8a438a()

Récupération

Récupération de l'historique de fidélité

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\HistoriqueFidlitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->851a9e3b5a3f96682fa7d5fbaa8a438a();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoriqueFidlitApi->851a9e3b5a3f96682fa7d5fbaa8a438a: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\FidelityHistory[]**](../Model/FidelityHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

