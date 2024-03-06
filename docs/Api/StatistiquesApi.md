# Qwenta\Fulleapps\StatistiquesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**03415b7dd9593feac9f44a4e42a80d84**](StatistiquesApi.md#03415b7dd9593feac9f44a4e42a80d84) | **GET** /top_products/statistics | Palmares des ventes
[**48e669b491d19b210a7970e158cda705**](StatistiquesApi.md#48e669b491d19b210a7970e158cda705) | **GET** /archives | Récupération des archives fiscales
[**4ce5804f9e16cad6e31e42d2ca580f57**](StatistiquesApi.md#4ce5804f9e16cad6e31e42d2ca580f57) | **GET** /taxes/statistics | Répartition des taxes
[**getRubricStatistics**](StatistiquesApi.md#getrubricstatistics) | **GET** /rubrics/statistics | Rubriques de vente

# **03415b7dd9593feac9f44a4e42a80d84**
> \Qwenta\Fulleapps\Model\InlineResponse2004 03415b7dd9593feac9f44a4e42a80d84($from_date, $to_date, $id_point_of_sale, $id_device, $service_number, $id_operator, $id_sale_method, $id_client)

Palmares des ventes

Récupération du palmares des ventes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\StatistiquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de début de période (YYYY-MM-DD)
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de fin de période (YYYY-MM-DD)
$id_point_of_sale = 56; // int | Identifiant du point de vente associé à la vente
$id_device = 56; // int | Identifiant de l'appareil associé à la vente
$service_number = 56; // int | Numéro de service associé à la vente
$id_operator = 56; // int | Identifiant de l'opérateur associé à la vente
$id_sale_method = 56; // int | Identifiant du mode de vente associé à la vente
$id_client = 56; // int | Identifiant du client associé à la vente

try {
    $result = $apiInstance->03415b7dd9593feac9f44a4e42a80d84($from_date, $to_date, $id_point_of_sale, $id_device, $service_number, $id_operator, $id_sale_method, $id_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatistiquesApi->03415b7dd9593feac9f44a4e42a80d84: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | [**\DateTime**](../Model/.md)| Date de début de période (YYYY-MM-DD) |
 **to_date** | [**\DateTime**](../Model/.md)| Date de fin de période (YYYY-MM-DD) |
 **id_point_of_sale** | **int**| Identifiant du point de vente associé à la vente |
 **id_device** | **int**| Identifiant de l&#x27;appareil associé à la vente |
 **service_number** | **int**| Numéro de service associé à la vente |
 **id_operator** | **int**| Identifiant de l&#x27;opérateur associé à la vente |
 **id_sale_method** | **int**| Identifiant du mode de vente associé à la vente |
 **id_client** | **int**| Identifiant du client associé à la vente |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **48e669b491d19b210a7970e158cda705**
> 48e669b491d19b210a7970e158cda705($id_device, $id, $filter)

Récupération des archives fiscales

Récupération des archives fiscales

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\StatistiquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_device = 56; // int | Identifiant de l'appareil
$id = 56; // int | Identifiant de la ligne archive (Récupération unique)
$filter = 56; // int | Type d'archive (0 = Journalière, 1 = Mensuelle, 2 = Annuelle (Exercice))

try {
    $apiInstance->48e669b491d19b210a7970e158cda705($id_device, $id, $filter);
} catch (Exception $e) {
    echo 'Exception when calling StatistiquesApi->48e669b491d19b210a7970e158cda705: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_device** | **int**| Identifiant de l&#x27;appareil |
 **id** | **int**| Identifiant de la ligne archive (Récupération unique) |
 **filter** | **int**| Type d&#x27;archive (0 &#x3D; Journalière, 1 &#x3D; Mensuelle, 2 &#x3D; Annuelle (Exercice)) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **4ce5804f9e16cad6e31e42d2ca580f57**
> 4ce5804f9e16cad6e31e42d2ca580f57($from_date, $to_date, $id_point_of_sale, $id_device, $id_sale_method)

Répartition des taxes

Récupération de la répartition des taxes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\StatistiquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de début de période (YYYY-MM-DD)
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de fin de période (YYYY-MM-DD)
$id_point_of_sale = 56; // int | Identifiant du point de vente associé à la vente
$id_device = 56; // int | Identifiant de l'appareil associé à la vente
$id_sale_method = 56; // int | Identifiant du mode de vente associé à la vente

try {
    $apiInstance->4ce5804f9e16cad6e31e42d2ca580f57($from_date, $to_date, $id_point_of_sale, $id_device, $id_sale_method);
} catch (Exception $e) {
    echo 'Exception when calling StatistiquesApi->4ce5804f9e16cad6e31e42d2ca580f57: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | [**\DateTime**](../Model/.md)| Date de début de période (YYYY-MM-DD) |
 **to_date** | [**\DateTime**](../Model/.md)| Date de fin de période (YYYY-MM-DD) |
 **id_point_of_sale** | **int**| Identifiant du point de vente associé à la vente |
 **id_device** | **int**| Identifiant de l&#x27;appareil associé à la vente |
 **id_sale_method** | **int**| Identifiant du mode de vente associé à la vente |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRubricStatistics**
> \Qwenta\Fulleapps\Model\InlineResponse2005 getRubricStatistics($body)

Rubriques de vente

Récupération des répartitions par rubriques

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\StatistiquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\RubricsStatisticsBody(); // \Qwenta\Fulleapps\Model\RubricsStatisticsBody | 

try {
    $result = $apiInstance->getRubricStatistics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatistiquesApi->getRubricStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\RubricsStatisticsBody**](../Model/RubricsStatisticsBody.md)|  | [optional]

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

