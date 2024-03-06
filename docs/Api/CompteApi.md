# Qwenta\Fulleapps\CompteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**731e85135df5902ffbe54731ad3cdfb0**](CompteApi.md#731e85135df5902ffbe54731ad3cdfb0) | **GET** /account | Récupération
[**updateAccount**](CompteApi.md#updateaccount) | **POST** /account | Modification

# **731e85135df5902ffbe54731ad3cdfb0**
> \Qwenta\Fulleapps\Model\InlineResponse200 731e85135df5902ffbe54731ad3cdfb0()

Récupération

Récupération des informations du compte commerçant<br/>Permet d'obtenir les informations de souscriptions, licences, revendeur associé, configuration globale du compte

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CompteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->731e85135df5902ffbe54731ad3cdfb0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompteApi->731e85135df5902ffbe54731ad3cdfb0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccount**
> updateAccount($body)

Modification

Modification des informations d'un compte

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CompteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\AccountC(); // \Qwenta\Fulleapps\Model\AccountC | 

try {
    $apiInstance->updateAccount($body);
} catch (Exception $e) {
    echo 'Exception when calling CompteApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\AccountC**](../Model/AccountC.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

