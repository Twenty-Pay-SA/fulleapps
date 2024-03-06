# Qwenta\Fulleapps\MailsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**e2b0b6ea3ccf76a7e2dbe7f4d6093089**](MailsApi.md#e2b0b6ea3ccf76a7e2dbe7f4d6093089) | **GET** /mails/type | Récupération

# **e2b0b6ea3ccf76a7e2dbe7f4d6093089**
> \Qwenta\Fulleapps\Model\MailHistory[] e2b0b6ea3ccf76a7e2dbe7f4d6093089($type)

Récupération

Récupération de l'historique d'envoi de mails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\MailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | Type de mail (account_statement = Relevés de comptes)

try {
    $result = $apiInstance->e2b0b6ea3ccf76a7e2dbe7f4d6093089($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailsApi->e2b0b6ea3ccf76a7e2dbe7f4d6093089: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type de mail (account_statement &#x3D; Relevés de comptes) |

### Return type

[**\Qwenta\Fulleapps\Model\MailHistory[]**](../Model/MailHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

