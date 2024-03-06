# Qwenta\Fulleapps\UtilisateursApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**3b153f4a06610658383e686aeb956723**](UtilisateursApi.md#3b153f4a06610658383e686aeb956723) | **GET** /profiles/delete/id | Suppression profil vendeur
[**8862165f5d640f4b8340d2cddcacf1f4**](UtilisateursApi.md#8862165f5d640f4b8340d2cddcacf1f4) | **GET** /permissions | Permissions vendeurs
[**98775cf5821f2b6b61f46aa66b9dee49**](UtilisateursApi.md#98775cf5821f2b6b61f46aa66b9dee49) | **GET** /profiles | Liste des profils vendeurs
[**bdc838423360805f883ec420b50c2f58**](UtilisateursApi.md#bdc838423360805f883ec420b50c2f58) | **POST** /operators | Création
[**d41e47846621f35a6c84aa8cc4824c1b**](UtilisateursApi.md#d41e47846621f35a6c84aa8cc4824c1b) | **POST** /operators/id | Modification
[**e5fe5a36d36d058ddfb51677b226baad**](UtilisateursApi.md#e5fe5a36d36d058ddfb51677b226baad) | **POST** /operators/delete/id | Suppression vendeur
[**getOperator**](UtilisateursApi.md#getoperator) | **GET** /operators/id | Récupération par ID
[**getOperators**](UtilisateursApi.md#getoperators) | **GET** /operators | Récupération de la liste
[**profilesIdGet**](UtilisateursApi.md#profilesidget) | **GET** /profiles/id | Profil vendeur

# **3b153f4a06610658383e686aeb956723**
> \Qwenta\Fulleapps\Model\SaleMethod 3b153f4a06610658383e686aeb956723()

Suppression profil vendeur

Suppression d'un profil vendeur

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->3b153f4a06610658383e686aeb956723();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->3b153f4a06610658383e686aeb956723: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\SaleMethod**](../Model/SaleMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **8862165f5d640f4b8340d2cddcacf1f4**
> \Qwenta\Fulleapps\Model\Permission[] 8862165f5d640f4b8340d2cddcacf1f4()

Permissions vendeurs

Récupération des permissions vendeurs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->8862165f5d640f4b8340d2cddcacf1f4();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->8862165f5d640f4b8340d2cddcacf1f4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\Permission[]**](../Model/Permission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **98775cf5821f2b6b61f46aa66b9dee49**
> \Qwenta\Fulleapps\Model\Profile[] 98775cf5821f2b6b61f46aa66b9dee49()

Liste des profils vendeurs

Récupération des profils vendeurs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->98775cf5821f2b6b61f46aa66b9dee49();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->98775cf5821f2b6b61f46aa66b9dee49: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\Profile[]**](../Model/Profile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bdc838423360805f883ec420b50c2f58**
> bdc838423360805f883ec420b50c2f58($body)

Création

Création d'un utilisateur<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Operator(); // \Qwenta\Fulleapps\Model\Operator | 

try {
    $apiInstance->bdc838423360805f883ec420b50c2f58($body);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->bdc838423360805f883ec420b50c2f58: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Operator**](../Model/Operator.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **d41e47846621f35a6c84aa8cc4824c1b**
> d41e47846621f35a6c84aa8cc4824c1b($body)

Modification

Modification d'un utilisateur<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Operator(); // \Qwenta\Fulleapps\Model\Operator | 

try {
    $apiInstance->d41e47846621f35a6c84aa8cc4824c1b($body);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->d41e47846621f35a6c84aa8cc4824c1b: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Operator**](../Model/Operator.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **e5fe5a36d36d058ddfb51677b226baad**
> e5fe5a36d36d058ddfb51677b226baad()

Suppression vendeur

Suppression d'un vendeur<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->e5fe5a36d36d058ddfb51677b226baad();
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->e5fe5a36d36d058ddfb51677b226baad: ', $e->getMessage(), PHP_EOL;
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

# **getOperator**
> \Qwenta\Fulleapps\Model\Operator[] getOperator()

Récupération par ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOperator();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->getOperator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\Operator[]**](../Model/Operator.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperators**
> \Qwenta\Fulleapps\Model\Operator[] getOperators()

Récupération de la liste

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOperators();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->getOperators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\Operator[]**](../Model/Operator.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesIdGet**
> \Qwenta\Fulleapps\Model\Profile[] profilesIdGet()

Profil vendeur

Récupération d'un profil vendeur

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->profilesIdGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->profilesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\Profile[]**](../Model/Profile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

