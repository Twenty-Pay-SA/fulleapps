# Qwenta\Fulleapps\GroupesClientApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**146098cc811544f2d480f8886b2f9b39**](GroupesClientApi.md#146098cc811544f2d480f8886b2f9b39) | **GET** /client_groups | Récupération
[**32491814c5a085d9cb86a2ac9aee3df0**](GroupesClientApi.md#32491814c5a085d9cb86a2ac9aee3df0) | **POST** /client_groups/delete/{id} | Suppression
[**createClientGroup**](GroupesClientApi.md#createclientgroup) | **POST** /client_groups | Création
[**updateClientGroup**](GroupesClientApi.md#updateclientgroup) | **POST** /client_groups/{id} | Modification

# **146098cc811544f2d480f8886b2f9b39**
> \Qwenta\Fulleapps\Model\InlineResponse20010 146098cc811544f2d480f8886b2f9b39()

Récupération

Get client groups list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\GroupesClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->146098cc811544f2d480f8886b2f9b39();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupesClientApi->146098cc811544f2d480f8886b2f9b39: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **32491814c5a085d9cb86a2ac9aee3df0**
> 32491814c5a085d9cb86a2ac9aee3df0($id)

Suppression

Suppression d'un groupe client<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\GroupesClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant du mode de réglement

try {
    $apiInstance->32491814c5a085d9cb86a2ac9aee3df0($id);
} catch (Exception $e) {
    echo 'Exception when calling GroupesClientApi->32491814c5a085d9cb86a2ac9aee3df0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant du mode de réglement | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createClientGroup**
> createClientGroup($body)

Création

Création d'un groupe client<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\GroupesClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientGroup(); // \Qwenta\Fulleapps\Model\ClientGroup | 

try {
    $apiInstance->createClientGroup($body);
} catch (Exception $e) {
    echo 'Exception when calling GroupesClientApi->createClientGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientGroup**](../Model/ClientGroup.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClientGroup**
> updateClientGroup($body, $id)

Modification

Modification d'un groupe client<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\GroupesClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientGroup(); // \Qwenta\Fulleapps\Model\ClientGroup | 
$id = 56; // int | Identifiant du groupe client

try {
    $apiInstance->updateClientGroup($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling GroupesClientApi->updateClientGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientGroup**](../Model/ClientGroup.md)|  |
 **id** | **int**| Identifiant du groupe client | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

