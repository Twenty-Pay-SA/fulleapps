# Qwenta\Fulleapps\RubriquesDeVenteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**29e899394792e28252fce25cffc2c17f**](RubriquesDeVenteApi.md#29e899394792e28252fce25cffc2c17f) | **POST** /rubrics/delete/id | Suppression
[**3a53d1d2bfc74004e7a102fc56edf88b**](RubriquesDeVenteApi.md#3a53d1d2bfc74004e7a102fc56edf88b) | **GET** /rubrics | Récupération
[**createRubric**](RubriquesDeVenteApi.md#createrubric) | **POST** /rubrics | Création
[**updateRubric**](RubriquesDeVenteApi.md#updaterubric) | **POST** /rubrics/{id} | Modification

# **29e899394792e28252fce25cffc2c17f**
> 29e899394792e28252fce25cffc2c17f()

Suppression

Suppression d'une rubrique de vente<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RubriquesDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->29e899394792e28252fce25cffc2c17f();
} catch (Exception $e) {
    echo 'Exception when calling RubriquesDeVenteApi->29e899394792e28252fce25cffc2c17f: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **3a53d1d2bfc74004e7a102fc56edf88b**
> \Qwenta\Fulleapps\Model\Rubric[] 3a53d1d2bfc74004e7a102fc56edf88b()

Récupération

Récupération des rubriques de vente

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RubriquesDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->3a53d1d2bfc74004e7a102fc56edf88b();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RubriquesDeVenteApi->3a53d1d2bfc74004e7a102fc56edf88b: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\Rubric[]**](../Model/Rubric.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRubric**
> createRubric($body)

Création

Création d'une rubrique de vente<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RubriquesDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\RubricC(); // \Qwenta\Fulleapps\Model\RubricC | 

try {
    $apiInstance->createRubric($body);
} catch (Exception $e) {
    echo 'Exception when calling RubriquesDeVenteApi->createRubric: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\RubricC**](../Model/RubricC.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRubric**
> updateRubric($body, $id)

Modification

Modification d'une rubrique de vente<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RubriquesDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\RubricC(); // \Qwenta\Fulleapps\Model\RubricC | 
$id = 56; // int | Identifiant de la rubrique de vente

try {
    $apiInstance->updateRubric($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling RubriquesDeVenteApi->updateRubric: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\RubricC**](../Model/RubricC.md)|  |
 **id** | **int**| Identifiant de la rubrique de vente | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

