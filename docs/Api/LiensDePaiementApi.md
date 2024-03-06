# Qwenta\Fulleapps\LiensDePaiementApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentLinkRequest**](LiensDePaiementApi.md#createpaymentlinkrequest) | **POST** /payment_link/payment_request/{id} | Création d&#x27;un lien

# **createPaymentLinkRequest**
> createPaymentLinkRequest($body, $id)

Création d'un lien

Create payment link (Yavin or Mobip configuration must be linked to the point of sale)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\LiensDePaiementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\PaymentRequestIdBody(); // \Qwenta\Fulleapps\Model\PaymentRequestIdBody | 
$id = 56; // int | Point Of Sale ID

try {
    $apiInstance->createPaymentLinkRequest($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling LiensDePaiementApi->createPaymentLinkRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\PaymentRequestIdBody**](../Model/PaymentRequestIdBody.md)|  |
 **id** | **int**| Point Of Sale ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

