# Qwenta\Fulleapps\AbonnementsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStripeInvoice**](AbonnementsApi.md#getstripeinvoice) | **GET** /stripe_customer/invoice/{id} | Récupération d&#x27;une facture d&#x27;abonnement
[**getStripeInvoices**](AbonnementsApi.md#getstripeinvoices) | **GET** /stripe_customer/invoices | Récupération des factures d&#x27;abonnement

# **getStripeInvoice**
> \Qwenta\Fulleapps\Model\InlineResponse20024 getStripeInvoice($)

Récupération d'une facture d'abonnement

Récupération d'une facture d'abonnement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AbonnementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ = new \Qwenta\Fulleapps\Model\null(); //  | Identifiant de la facture d'abonnement

try {
    $result = $apiInstance->getStripeInvoice($);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbonnementsApi->getStripeInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **** | [****](../Model/.md)| Identifiant de la facture d&#x27;abonnement | [optional]

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStripeInvoices**
> \Qwenta\Fulleapps\Model\InlineResponse20024 getStripeInvoices()

Récupération des factures d'abonnement

Récupération des factures d'abonnement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AbonnementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getStripeInvoices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbonnementsApi->getStripeInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

