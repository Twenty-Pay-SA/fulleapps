# Qwenta\Fulleapps\CagnottesClientsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**87681cf49d617ea061dbd208e90838fb**](CagnottesClientsApi.md#87681cf49d617ea061dbd208e90838fb) | **POST** /advance_payments | Recharge cagnotte
[**98cb6eb870668c4239b5e237bc74e75e**](CagnottesClientsApi.md#98cb6eb870668c4239b5e237bc74e75e) | **GET** /advance_payments_history | Historique mouvements
[**getAdvancePayments**](CagnottesClientsApi.md#getadvancepayments) | **GET** /advance_payments | Historique recharges

# **87681cf49d617ea061dbd208e90838fb**
> 87681cf49d617ea061dbd208e90838fb($body)

Recharge cagnotte

Recharge cagnotte d'un client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CagnottesClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\AdvancePayment(); // \Qwenta\Fulleapps\Model\AdvancePayment | 

try {
    $apiInstance->87681cf49d617ea061dbd208e90838fb($body);
} catch (Exception $e) {
    echo 'Exception when calling CagnottesClientsApi->87681cf49d617ea061dbd208e90838fb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\AdvancePayment**](../Model/AdvancePayment.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **98cb6eb870668c4239b5e237bc74e75e**
> \Qwenta\Fulleapps\Model\InlineResponse2003 98cb6eb870668c4239b5e237bc74e75e($id_client, $from_date, $to_date)

Historique mouvements

Récupération de l'historique des mouvements cagnottes (recharges, facturation, utilisation webshop)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CagnottesClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_client = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant client associé
$from_date = new \Qwenta\Fulleapps\Model\Datetime(); // Datetime | Date de début
$to_date = new \Qwenta\Fulleapps\Model\Datetime(); // Datetime | Date de fin

try {
    $result = $apiInstance->98cb6eb870668c4239b5e237bc74e75e($id_client, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CagnottesClientsApi->98cb6eb870668c4239b5e237bc74e75e: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_client** | [**Int**](../Model/.md)| Identifiant client associé |
 **from_date** | [**Datetime**](../Model/.md)| Date de début |
 **to_date** | [**Datetime**](../Model/.md)| Date de fin |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvancePayments**
> \Qwenta\Fulleapps\Model\InlineResponse2003 getAdvancePayments($id_client, $from_date, $to_date)

Historique recharges

Récupération de l'historique des recharges cagnotte d'un client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CagnottesClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_client = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant client associé
$from_date = new \Qwenta\Fulleapps\Model\Datetime(); // Datetime | Date de début
$to_date = new \Qwenta\Fulleapps\Model\Datetime(); // Datetime | Date de fin

try {
    $result = $apiInstance->getAdvancePayments($id_client, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CagnottesClientsApi->getAdvancePayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_client** | [**Int**](../Model/.md)| Identifiant client associé |
 **from_date** | [**Datetime**](../Model/.md)| Date de début |
 **to_date** | [**Datetime**](../Model/.md)| Date de fin |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

