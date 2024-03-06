# Qwenta\Fulleapps\OffresDeFidlitApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFidelityRules**](OffresDeFidlitApi.md#getfidelityrules) | **GET** /v1/fidelity_rules | Récupération

# **getFidelityRules**
> \Qwenta\Fulleapps\Model\FidelityRule[] getFidelityRules($archive)

Récupération

Récupération des offres de fidélité

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\OffresDeFidlitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$archive = 789; // int | Niveau d'archivage (0 = actif, 1 = archivé)

try {
    $result = $apiInstance->getFidelityRules($archive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffresDeFidlitApi->getFidelityRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **archive** | **int**| Niveau d&#x27;archivage (0 &#x3D; actif, 1 &#x3D; archivé) |

### Return type

[**\Qwenta\Fulleapps\Model\FidelityRule[]**](../Model/FidelityRule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

