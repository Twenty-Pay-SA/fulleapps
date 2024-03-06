# Qwenta\Fulleapps\CatgoriesFormulesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**f958a1f10b6687e00cba64d68c4ba006**](CatgoriesFormulesApi.md#f958a1f10b6687e00cba64d68c4ba006) | **GET** /product_categories/{id} | Récupération par ID
[**productCategoriestype2Get**](CatgoriesFormulesApi.md#productcategoriestype2get) | **GET** /product_categories?type&#x3D;2 | Récupération

# **f958a1f10b6687e00cba64d68c4ba006**
> \Qwenta\Fulleapps\Model\ProductCategory[] f958a1f10b6687e00cba64d68c4ba006($id)

Récupération par ID

Récupération d'une catégorie (Liste des options sur les produits, détails formules)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CatgoriesFormulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant de la catégorie

try {
    $result = $apiInstance->f958a1f10b6687e00cba64d68c4ba006($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatgoriesFormulesApi->f958a1f10b6687e00cba64d68c4ba006: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant de la catégorie |

### Return type

[**\Qwenta\Fulleapps\Model\ProductCategory[]**](../Model/ProductCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productCategoriestype2Get**
> \Qwenta\Fulleapps\Model\ProductCategory[] productCategoriestype2Get($type)

Récupération

Récupération des options/détails formules (Liste des options sur les produits, détails formules)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CatgoriesFormulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 56; // int | Type de catégorie (2 = Catégorie formule)

try {
    $result = $apiInstance->productCategoriestype2Get($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatgoriesFormulesApi->productCategoriestype2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**| Type de catégorie (2 &#x3D; Catégorie formule) |

### Return type

[**\Qwenta\Fulleapps\Model\ProductCategory[]**](../Model/ProductCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

