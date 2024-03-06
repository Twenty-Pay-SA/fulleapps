# Qwenta\Fulleapps\PlanDeSalleApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRoomPlan**](PlanDeSalleApi.md#getroomplan) | **GET** /rooms | Récupération

# **getRoomPlan**
> \Qwenta\Fulleapps\Model\InlineResponse20023 getRoomPlan($id_point_of_sale)

Récupération

Récupération des plans de salle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\PlanDeSalleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_point_of_sale = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du point de vente associé

try {
    $result = $apiInstance->getRoomPlan($id_point_of_sale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanDeSalleApi->getRoomPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_point_of_sale** | [**Int**](../Model/.md)| Identifiant du point de vente associé |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

