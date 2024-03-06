# Qwenta\Fulleapps\ConfigurationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountantSettings**](ConfigurationApi.md#getaccountantsettings) | **GET** /accountant/settings/{id_point_of_sale} | Récupération
[**updateAccountantSettings**](ConfigurationApi.md#updateaccountantsettings) | **POST** /accountant/settings/{id_point_of_sale} | Modification

# **getAccountantSettings**
> \Qwenta\Fulleapps\Model\InlineResponse2002 getAccountantSettings($id_point_of_sale)

Récupération

Récupération de la configuration comptable d'un point de vente. (Option Comptabilité requise)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_point_of_sale = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du point de vente

try {
    $result = $apiInstance->getAccountantSettings($id_point_of_sale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getAccountantSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_point_of_sale** | [**Int**](../Model/.md)| Identifiant du point de vente |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountantSettings**
> updateAccountantSettings($body, $id_point_of_sale)

Modification

Modification de la configuration comptable d'un point de vente  (Option Comptabilité requise)<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\AccountantSetting(); // \Qwenta\Fulleapps\Model\AccountantSetting | 
$id_point_of_sale = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du point de vente

try {
    $apiInstance->updateAccountantSettings($body, $id_point_of_sale);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->updateAccountantSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\AccountantSetting**](../Model/AccountantSetting.md)|  |
 **id_point_of_sale** | [**Int**](../Model/.md)| Identifiant du point de vente |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

