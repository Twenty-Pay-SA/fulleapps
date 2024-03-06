# Qwenta\Fulleapps\TaxesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**3ed36d90d12f63db8988d84aec903fcf**](TaxesApi.md#3ed36d90d12f63db8988d84aec903fcf) | **GET** /taxes | Récupération des taxes
[**48a71f1070a68bd74aa4885effeb9561**](TaxesApi.md#48a71f1070a68bd74aa4885effeb9561) | **POST** /tax_groupings/id | Modification d&#x27;un regroupement
[**bffc0b3ee9f27de530237329d561c681**](TaxesApi.md#bffc0b3ee9f27de530237329d561c681) | **POST** /tax_groupings/delete/id | Suppression d&#x27;un regroupement
[**c52985f4a901834eb433d534b3470bca**](TaxesApi.md#c52985f4a901834eb433d534b3470bca) | **POST** /tax_groupings | Création d&#x27;un regroupement
[**e884f2af466a720a51a564ba6cb03f39**](TaxesApi.md#e884f2af466a720a51a564ba6cb03f39) | **POST** /taxes/{id} | Modification d&#x27;une taxe
[**getTaxGroupings**](TaxesApi.md#gettaxgroupings) | **GET** /tax_groupings | Récupération des regroupements

# **3ed36d90d12f63db8988d84aec903fcf**
> \Qwenta\Fulleapps\Model\InlineResponse20026 3ed36d90d12f63db8988d84aec903fcf($id)

Récupération des taxes

Récupération des taxes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant du taux (pour récupérer un taux spécifique)

try {
    $result = $apiInstance->3ed36d90d12f63db8988d84aec903fcf($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->3ed36d90d12f63db8988d84aec903fcf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant du taux (pour récupérer un taux spécifique) |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **48a71f1070a68bd74aa4885effeb9561**
> 48a71f1070a68bd74aa4885effeb9561($body)

Modification d'un regroupement

Modification d'un regroupement de taxe<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\TaxGrouping(); // \Qwenta\Fulleapps\Model\TaxGrouping | 

try {
    $apiInstance->48a71f1070a68bd74aa4885effeb9561($body);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->48a71f1070a68bd74aa4885effeb9561: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\TaxGrouping**](../Model/TaxGrouping.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bffc0b3ee9f27de530237329d561c681**
> bffc0b3ee9f27de530237329d561c681()

Suppression d'un regroupement

Suppression d'un regroupement de taxe<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->bffc0b3ee9f27de530237329d561c681();
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->bffc0b3ee9f27de530237329d561c681: ', $e->getMessage(), PHP_EOL;
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

# **c52985f4a901834eb433d534b3470bca**
> c52985f4a901834eb433d534b3470bca($body)

Création d'un regroupement

Création d'un regroupement de taxe<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\TaxGrouping(); // \Qwenta\Fulleapps\Model\TaxGrouping | 

try {
    $apiInstance->c52985f4a901834eb433d534b3470bca($body);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->c52985f4a901834eb433d534b3470bca: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\TaxGrouping**](../Model/TaxGrouping.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **e884f2af466a720a51a564ba6cb03f39**
> e884f2af466a720a51a564ba6cb03f39($body, $id)

Modification d'une taxe

Update tax<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\TaxesIdBody(); // \Qwenta\Fulleapps\Model\TaxesIdBody | 
$id = 56; // int | Identifiant du taux

try {
    $apiInstance->e884f2af466a720a51a564ba6cb03f39($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->e884f2af466a720a51a564ba6cb03f39: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\TaxesIdBody**](../Model/TaxesIdBody.md)|  |
 **id** | **int**| Identifiant du taux |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxGroupings**
> \Qwenta\Fulleapps\Model\InlineResponse20025 getTaxGroupings($id, $with_taxes)

Récupération des regroupements

Récupération des regroupements de taxes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant du regroupement
$with_taxes = 56; // int | = 1 pour récupérer les taux de TVA

try {
    $result = $apiInstance->getTaxGroupings($id, $with_taxes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getTaxGroupings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant du regroupement |
 **with_taxes** | **int**| &#x3D; 1 pour récupérer les taux de TVA |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

