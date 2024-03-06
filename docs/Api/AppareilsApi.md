# Qwenta\Fulleapps\AppareilsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDevices**](AppareilsApi.md#getdevices) | **GET** /devices | Récupération des appareils

# **getDevices**
> \Qwenta\Fulleapps\Model\Device[] getDevices($id)

Récupération des appareils

Récupération des appareils

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AppareilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant de l'appareil (Récupération unique)

try {
    $result = $apiInstance->getDevices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppareilsApi->getDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant de l&#x27;appareil (Récupération unique) |

### Return type

[**\Qwenta\Fulleapps\Model\Device[]**](../Model/Device.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

