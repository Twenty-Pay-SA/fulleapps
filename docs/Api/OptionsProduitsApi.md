# Qwenta\Fulleapps\OptionsProduitsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCategory**](OptionsProduitsApi.md#createcategory) | **POST** /product_categories | Création
[**deleteCategory**](OptionsProduitsApi.md#deletecategory) | **POST** /product_categories/delete/{id} | Suppression
[**getCategories**](OptionsProduitsApi.md#getcategories) | **GET** /product_categories?type&#x3D;1 | Récupération
[**updateCategory**](OptionsProduitsApi.md#updatecategory) | **POST** /product_categories/{id} | Modification

# **createCategory**
> \Qwenta\Fulleapps\Model\InlineResponse20021 createCategory($body)

Création

Création d'une option<br/><br/>Une option va permettre de créer des déclinaisons pour vos articles, telles que Taille, Couleur, Cuisson, Sauces ...<br/><br/>         Renseignez pour chaque option les valeurs associées (Large/Small, Bleu/Rouge, Saignant/A point, Ketchup/Moutarde), et le supplément prix / regroupement de taxe spécifique si nécessaire.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\OptionsProduitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ProductCategoryC(); // \Qwenta\Fulleapps\Model\ProductCategoryC | 

try {
    $result = $apiInstance->createCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsProduitsApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ProductCategoryC**](../Model/ProductCategoryC.md)|  |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCategory**
> deleteCategory($id)

Suppression

Suppression d'une option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\OptionsProduitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant de l'option

try {
    $apiInstance->deleteCategory($id);
} catch (Exception $e) {
    echo 'Exception when calling OptionsProduitsApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant de l&#x27;option | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategories**
> \Qwenta\Fulleapps\Model\ProductCategory[] getCategories($type)

Récupération

Récupération des options

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\OptionsProduitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 56; // int | Type de catégorie (1 = Options produit)

try {
    $result = $apiInstance->getCategories($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsProduitsApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**| Type de catégorie (1 &#x3D; Options produit) |

### Return type

[**\Qwenta\Fulleapps\Model\ProductCategory[]**](../Model/ProductCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCategory**
> \Qwenta\Fulleapps\Model\InlineResponse20021 updateCategory($body, $id)

Modification

Modification d'une option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\OptionsProduitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ProductCategoryC(); // \Qwenta\Fulleapps\Model\ProductCategoryC | 
$id = 56; // int | Identifiant de l'options

try {
    $result = $apiInstance->updateCategory($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsProduitsApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ProductCategoryC**](../Model/ProductCategoryC.md)|  |
 **id** | **int**| Identifiant de l&#x27;options | [optional]

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

