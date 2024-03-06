# Qwenta\Fulleapps\AttributsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**3a064b6398673c6995dc0aefceee688c**](AttributsApi.md#3a064b6398673c6995dc0aefceee688c) | **GET** /attributes | Liste des attributs
[**7191fe18b65b91c285d163fae7dde21d**](AttributsApi.md#7191fe18b65b91c285d163fae7dde21d) | **POST** /attributes/delete/id | Suppression d&#x27;un attribut
[**8964ae04f1148c9fec667ca8a726de4d**](AttributsApi.md#8964ae04f1148c9fec667ca8a726de4d) | **POST** /attributes/id | Modification
[**attributesIdGet**](AttributsApi.md#attributesidget) | **GET** /attributes/id | Attribut
[**d5ea16a916f50732b8255ee1f85fc68e**](AttributsApi.md#d5ea16a916f50732b8255ee1f85fc68e) | **POST** /attributes | Création

# **3a064b6398673c6995dc0aefceee688c**
> \Qwenta\Fulleapps\Model\Attribute[] 3a064b6398673c6995dc0aefceee688c()

Liste des attributs

Récupération des attributs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AttributsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->3a064b6398673c6995dc0aefceee688c();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributsApi->3a064b6398673c6995dc0aefceee688c: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\Attribute[]**](../Model/Attribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **7191fe18b65b91c285d163fae7dde21d**
> 7191fe18b65b91c285d163fae7dde21d()

Suppression d'un attribut

Suppression d'un attribut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AttributsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->7191fe18b65b91c285d163fae7dde21d();
} catch (Exception $e) {
    echo 'Exception when calling AttributsApi->7191fe18b65b91c285d163fae7dde21d: ', $e->getMessage(), PHP_EOL;
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

# **8964ae04f1148c9fec667ca8a726de4d**
> 8964ae04f1148c9fec667ca8a726de4d($body)

Modification

Modification d'un attribut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AttributsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Attribute(); // \Qwenta\Fulleapps\Model\Attribute | 

try {
    $apiInstance->8964ae04f1148c9fec667ca8a726de4d($body);
} catch (Exception $e) {
    echo 'Exception when calling AttributsApi->8964ae04f1148c9fec667ca8a726de4d: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Attribute**](../Model/Attribute.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributesIdGet**
> \Qwenta\Fulleapps\Model\Attribute[] attributesIdGet()

Attribut

Récupération d'un attribut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AttributsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->attributesIdGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributsApi->attributesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\Attribute[]**](../Model/Attribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **d5ea16a916f50732b8255ee1f85fc68e**
> d5ea16a916f50732b8255ee1f85fc68e($body)

Création

Création d'un attribut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\AttributsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Attribute(); // \Qwenta\Fulleapps\Model\Attribute | 

try {
    $apiInstance->d5ea16a916f50732b8255ee1f85fc68e($body);
} catch (Exception $e) {
    echo 'Exception when calling AttributsApi->d5ea16a916f50732b8255ee1f85fc68e: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Attribute**](../Model/Attribute.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

