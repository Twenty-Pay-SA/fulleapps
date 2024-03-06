# Qwenta\Fulleapps\ModesDeVenteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**712eabac3ef5c01fbc5c7bc42bd422c7**](ModesDeVenteApi.md#712eabac3ef5c01fbc5c7bc42bd422c7) | **POST** /sale_methods/id | Modification
[**741e4e8f0649992ea56c42a2f0e49d4a**](ModesDeVenteApi.md#741e4e8f0649992ea56c42a2f0e49d4a) | **POST** /sale_methods | Création
[**e2848f178eca7b8990c232d1e761b859**](ModesDeVenteApi.md#e2848f178eca7b8990c232d1e761b859) | **POST** /sale_methods/delete/id | Suppression
[**getSaleMethods**](ModesDeVenteApi.md#getsalemethods) | **GET** /sale_methods | Récupération

# **712eabac3ef5c01fbc5c7bc42bd422c7**
> 712eabac3ef5c01fbc5c7bc42bd422c7($body)

Modification

Modification d'un mode de vente<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ModesDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\SaleMethod(); // \Qwenta\Fulleapps\Model\SaleMethod | 

try {
    $apiInstance->712eabac3ef5c01fbc5c7bc42bd422c7($body);
} catch (Exception $e) {
    echo 'Exception when calling ModesDeVenteApi->712eabac3ef5c01fbc5c7bc42bd422c7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\SaleMethod**](../Model/SaleMethod.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **741e4e8f0649992ea56c42a2f0e49d4a**
> 741e4e8f0649992ea56c42a2f0e49d4a($body)

Création

Création d'un mode de vente<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ModesDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\SaleMethod(); // \Qwenta\Fulleapps\Model\SaleMethod | 

try {
    $apiInstance->741e4e8f0649992ea56c42a2f0e49d4a($body);
} catch (Exception $e) {
    echo 'Exception when calling ModesDeVenteApi->741e4e8f0649992ea56c42a2f0e49d4a: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\SaleMethod**](../Model/SaleMethod.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **e2848f178eca7b8990c232d1e761b859**
> e2848f178eca7b8990c232d1e761b859($body)

Suppression

Suppression d'un mode de vente<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ModesDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\SaleMethod(); // \Qwenta\Fulleapps\Model\SaleMethod | 

try {
    $apiInstance->e2848f178eca7b8990c232d1e761b859($body);
} catch (Exception $e) {
    echo 'Exception when calling ModesDeVenteApi->e2848f178eca7b8990c232d1e761b859: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\SaleMethod**](../Model/SaleMethod.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSaleMethods**
> \Qwenta\Fulleapps\Model\SaleMethod[] getSaleMethods($id_point_of_sale, $enable_note, $enable_order, $enable_online_order, $archive)

Récupération

Récupération des modes de vente

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ModesDeVenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_point_of_sale = 56; // int | Identifiant du point de vente - Récupération des modes de vente actifs sur le point de vente
$enable_note = 56; // int | Prise de note active sur le mode de vente
$enable_order = 56; // int | Prise de commande active sur le mode de vente
$enable_online_order = 56; // int | Prise de commande en ligne active sur le mode de vente
$archive = 56; // int | Récupération par niveau d'archivage (0 = actifs, 1 = archivés)

try {
    $result = $apiInstance->getSaleMethods($id_point_of_sale, $enable_note, $enable_order, $enable_online_order, $archive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModesDeVenteApi->getSaleMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_point_of_sale** | **int**| Identifiant du point de vente - Récupération des modes de vente actifs sur le point de vente |
 **enable_note** | **int**| Prise de note active sur le mode de vente |
 **enable_order** | **int**| Prise de commande active sur le mode de vente |
 **enable_online_order** | **int**| Prise de commande en ligne active sur le mode de vente |
 **archive** | **int**| Récupération par niveau d&#x27;archivage (0 &#x3D; actifs, 1 &#x3D; archivés) |

### Return type

[**\Qwenta\Fulleapps\Model\SaleMethod[]**](../Model/SaleMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

