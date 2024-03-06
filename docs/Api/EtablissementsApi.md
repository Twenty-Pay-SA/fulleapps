# Qwenta\Fulleapps\EtablissementsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEstablishment**](EtablissementsApi.md#createestablishment) | **POST** /establishments | Création
[**deleteEstablishment**](EtablissementsApi.md#deleteestablishment) | **POST** /establishments/delete/{id} | Suppression
[**getEstablishments**](EtablissementsApi.md#getestablishments) | **GET** /establishments | Récupération
[**updateEstablishment**](EtablissementsApi.md#updateestablishment) | **POST** /establishments/{id} | Modification

# **createEstablishment**
> createEstablishment($body)

Création

Création d'un établissement<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\EtablissementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Establishment(); // \Qwenta\Fulleapps\Model\Establishment | 

try {
    $apiInstance->createEstablishment($body);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementsApi->createEstablishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Establishment**](../Model/Establishment.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEstablishment**
> deleteEstablishment($id)

Suppression

Suppression d'un établissement<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\EtablissementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant de l'établissement

try {
    $apiInstance->deleteEstablishment($id);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementsApi->deleteEstablishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant de l&#x27;établissement | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEstablishments**
> \Qwenta\Fulleapps\Model\InlineResponse20013 getEstablishments()

Récupération

Récupération des établissements d'un compte commerçant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\EtablissementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getEstablishments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementsApi->getEstablishments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEstablishment**
> updateEstablishment($body, $id)

Modification

Modification d'un établissement<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\EtablissementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Establishment(); // \Qwenta\Fulleapps\Model\Establishment | 
$id = 56; // int | Identifiant de l'établissement

try {
    $apiInstance->updateEstablishment($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementsApi->updateEstablishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Establishment**](../Model/Establishment.md)|  |
 **id** | **int**| Identifiant de l&#x27;établissement | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

