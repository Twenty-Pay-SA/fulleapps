# Qwenta\Fulleapps\HorairesDouvertureApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**927a90f7518b7a9667b77c2ef45f1072**](HorairesDouvertureApi.md#927a90f7518b7a9667b77c2ef45f1072) | **GET** /v1/timetables | Récupération

# **927a90f7518b7a9667b77c2ef45f1072**
> \Qwenta\Fulleapps\Model\TimeTable[] 927a90f7518b7a9667b77c2ef45f1072($id_point_of_sale)

Récupération

Récupération des horaires d'ouverture (Commande en ligne uniquement)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\HorairesDouvertureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_point_of_sale = 56; // int | Identifiant du point de vente

try {
    $result = $apiInstance->927a90f7518b7a9667b77c2ef45f1072($id_point_of_sale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HorairesDouvertureApi->927a90f7518b7a9667b77c2ef45f1072: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_point_of_sale** | **int**| Identifiant du point de vente |

### Return type

[**\Qwenta\Fulleapps\Model\TimeTable[]**](../Model/TimeTable.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

