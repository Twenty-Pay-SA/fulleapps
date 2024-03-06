# Qwenta\Fulleapps\ProduitsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**3ba660a9f333d1df8098db483d880d83**](ProduitsApi.md#3ba660a9f333d1df8098db483d880d83) | **GET** /products | Récupération
[**5b961b8e9696b357db255293ca9e8e3b**](ProduitsApi.md#5b961b8e9696b357db255293ca9e8e3b) | **GET** /products_gallery/{id} | Gallery
[**60e0183c88da15bb0daa0557d37c8f07**](ProduitsApi.md#60e0183c88da15bb0daa0557d37c8f07) | **GET** /product_allergens | Get allergens list
[**createProduct**](ProduitsApi.md#createproduct) | **POST** /products | Création
[**updateProduct**](ProduitsApi.md#updateproduct) | **POST** /products/{id} | Modification

# **3ba660a9f333d1df8098db483d880d83**
> \Qwenta\Fulleapps\Model\Product[] 3ba660a9f333d1df8098db483d880d83($id_rubric, $archive, $id_point_of_sale, $id_sale_method, $handle_price_period, $price_period_day, $price_period_hour, $down_fidelity_points, $up_fidelity_points, $base64)

Récupération

Récupération des produits

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ProduitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_rubric = 56; // int | Récupération par rubrique de vente (Identifiant de la rubrique associée)
$archive = 56; // int | Récupération par niveau d'archivage (0 = Produits actifs, 1 = Produits archivés)
$id_point_of_sale = 56; // int | Récupération par point de vente (Produits actif sur le point de vente)
$id_sale_method = 56; // int | Récupération par mode de vente (Produits avec prix défini sur le mode de vente)
$handle_price_period = 56; // int | 1 pour récupérer les prix selon la période en cours
$price_period_day = 56; // int | Jour à utiliser pour récupérer les prix selon une période
$price_period_hour = new \Qwenta\Fulleapps\Model\Hour(); // Hour | Heure (HH:mm:ss) à utiliser pour récupérer les prix selon une période
$down_fidelity_points = 3.4; // float | Retourne les produits que l'on peut obtenir avec les points fidelité spécifiés (limit 30)
$up_fidelity_points = 3.4; // float | Retourne les produits que l'on pourra bientot obtenir avec les points fidelité spécifiés (limit 30)
$base64 = "base64_example"; // string | Récupération de l'image associé au produit en base64 (mini = 72x72, small = 128x128, medium = 256x256, large = 512x512)

try {
    $result = $apiInstance->3ba660a9f333d1df8098db483d880d83($id_rubric, $archive, $id_point_of_sale, $id_sale_method, $handle_price_period, $price_period_day, $price_period_hour, $down_fidelity_points, $up_fidelity_points, $base64);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProduitsApi->3ba660a9f333d1df8098db483d880d83: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_rubric** | **int**| Récupération par rubrique de vente (Identifiant de la rubrique associée) |
 **archive** | **int**| Récupération par niveau d&#x27;archivage (0 &#x3D; Produits actifs, 1 &#x3D; Produits archivés) |
 **id_point_of_sale** | **int**| Récupération par point de vente (Produits actif sur le point de vente) |
 **id_sale_method** | **int**| Récupération par mode de vente (Produits avec prix défini sur le mode de vente) |
 **handle_price_period** | **int**| 1 pour récupérer les prix selon la période en cours |
 **price_period_day** | **int**| Jour à utiliser pour récupérer les prix selon une période |
 **price_period_hour** | [**Hour**](../Model/.md)| Heure (HH:mm:ss) à utiliser pour récupérer les prix selon une période |
 **down_fidelity_points** | [**float**](../Model/.md)| Retourne les produits que l&#x27;on peut obtenir avec les points fidelité spécifiés (limit 30) |
 **up_fidelity_points** | [**float**](../Model/.md)| Retourne les produits que l&#x27;on pourra bientot obtenir avec les points fidelité spécifiés (limit 30) |
 **base64** | **string**| Récupération de l&#x27;image associé au produit en base64 (mini &#x3D; 72x72, small &#x3D; 128x128, medium &#x3D; 256x256, large &#x3D; 512x512) |

### Return type

[**\Qwenta\Fulleapps\Model\Product[]**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **5b961b8e9696b357db255293ca9e8e3b**
> \Qwenta\Fulleapps\Model\InlineResponse20022 5b961b8e9696b357db255293ca9e8e3b($)

Gallery

Get pictures

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ProduitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ = new \Qwenta\Fulleapps\Model\null(); //  | Product ID

try {
    $result = $apiInstance->5b961b8e9696b357db255293ca9e8e3b($);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProduitsApi->5b961b8e9696b357db255293ca9e8e3b: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **** | [****](../Model/.md)| Product ID |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **60e0183c88da15bb0daa0557d37c8f07**
> \Qwenta\Fulleapps\Model\ProductAllergen[] 60e0183c88da15bb0daa0557d37c8f07()

Get allergens list

Get allergens list<br/><a target='_blank' href='https://www.fsai.ie/legislation/food_legislation/food_information/14_allergens.html'>List of 14 Allergens<a/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ProduitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->60e0183c88da15bb0daa0557d37c8f07();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProduitsApi->60e0183c88da15bb0daa0557d37c8f07: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\ProductAllergen[]**](../Model/ProductAllergen.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProduct**
> createProduct($body)

Création

Création d'un produit<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ProduitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ProductC(); // \Qwenta\Fulleapps\Model\ProductC | 

try {
    $apiInstance->createProduct($body);
} catch (Exception $e) {
    echo 'Exception when calling ProduitsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ProductC**](../Model/ProductC.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProduct**
> updateProduct($body, $id)

Modification

Modification d'un produit<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ProduitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ProductC(); // \Qwenta\Fulleapps\Model\ProductC | 
$id = 56; // int | Identifiant du produit

try {
    $apiInstance->updateProduct($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling ProduitsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ProductC**](../Model/ProductC.md)|  |
 **id** | **int**| Identifiant du produit | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

