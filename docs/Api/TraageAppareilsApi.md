# Qwenta\Fulleapps\TraageAppareilsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fa443c8341a0be83a75acf9f3bb3107b**](TraageAppareilsApi.md#fa443c8341a0be83a75acf9f3bb3107b) | **GET** /device_tracing/id | Récupération du traçage par appareil

# **fa443c8341a0be83a75acf9f3bb3107b**
> \Qwenta\Fulleapps\Model\InlineResponse20011 fa443c8341a0be83a75acf9f3bb3107b($date)

Récupération du traçage par appareil

Récupération du traçage par appareil.<br/><a href='https://storage.googleapis.com/nf_docs/SM04%20-%20Notice%20JET-%2002_2019-2.pdf' target='_blank'>Voir la liste des evenements de traçage</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TraageAppareilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de traçage

try {
    $result = $apiInstance->fa443c8341a0be83a75acf9f3bb3107b($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TraageAppareilsApi->fa443c8341a0be83a75acf9f3bb3107b: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | [**\DateTime**](../Model/.md)| Date de traçage |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

