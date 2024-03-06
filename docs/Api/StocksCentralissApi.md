# Qwenta\Fulleapps\StocksCentralissApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editProductStock**](StocksCentralissApi.md#editproductstock) | **POST** /stocks/0 | Modification / Désactivation / Suppression
[**getStocks**](StocksCentralissApi.md#getstocks) | **GET** /stocks/{id_point_of_sale} | Récupération
[**getStocksHistory**](StocksCentralissApi.md#getstockshistory) | **GET** /stocks/history/{id_point_of_sale}/{id_product} | Historique de stock

# **editProductStock**
> editProductStock($body, $archive, $quantity_decimal, $stock_type, $id_point_of_sale, $id_product, $id_supplier, $stock_date, $comment)

Modification / Désactivation / Suppression

Désactivation / Réactivation d'un produit en stock [Le produit doit déja avoir une valorisation sur le point de stock]<br/>           * Désactivation : L'historique des mouvements de stock sera désactivé lors des prochaines transactions.     Vous devrez saisir une nouvelle entrée pour réactiver le stock sur le produit et relancer l'historisation.<br/>           * Réactivation : L'historique des mouvements de stock sera réactivé lors des prochaines transactions.<br/>           * Suppression : Vous devrez saisir une nouvelle entrée pour gérer à nouveau le stock sur le produit et relancer l'historisation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\StocksCentralissApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\null(); //  | 
$archive = new \Qwenta\Fulleapps\Model\Int(); // Int | 0 pour réactiver, 1 pour désactiver, 2 pour supprimer (quantity_decimal ne doit pas être renseigné pour passer en mode archivage)
$quantity_decimal = new \Qwenta\Fulleapps\Model\Int(); // Int | Quantité à entrer / sortir du stock de l'article
$stock_type = new \Qwenta\Fulleapps\Model\Int(); // Int | Type de mouvement de stock. 1 = Livraison, 2 = Facture, 3 = Stock initial (Le stock de l'article sera réinitialisé avec la valeur envoyée)
$id_point_of_sale = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du point de vente (associé au point de stock)
$id_product = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du produit
$id_supplier = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du fournisseur associé au mouvement de stock
$stock_date = new \Qwenta\Fulleapps\Model\Datetime(); // Datetime | Date du mouvement de stock
$comment = "comment_example"; // string | Commentaire

try {
    $apiInstance->editProductStock($body, $archive, $quantity_decimal, $stock_type, $id_point_of_sale, $id_product, $id_supplier, $stock_date, $comment);
} catch (Exception $e) {
    echo 'Exception when calling StocksCentralissApi->editProductStock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  |
 **archive** | [**Int**](../Model/.md)| 0 pour réactiver, 1 pour désactiver, 2 pour supprimer (quantity_decimal ne doit pas être renseigné pour passer en mode archivage) |
 **quantity_decimal** | [**Int**](../Model/.md)| Quantité à entrer / sortir du stock de l&#x27;article |
 **stock_type** | [**Int**](../Model/.md)| Type de mouvement de stock. 1 &#x3D; Livraison, 2 &#x3D; Facture, 3 &#x3D; Stock initial (Le stock de l&#x27;article sera réinitialisé avec la valeur envoyée) |
 **id_point_of_sale** | [**Int**](../Model/.md)| Identifiant du point de vente (associé au point de stock) |
 **id_product** | [**Int**](../Model/.md)| Identifiant du produit |
 **id_supplier** | [**Int**](../Model/.md)| Identifiant du fournisseur associé au mouvement de stock |
 **stock_date** | [**Datetime**](../Model/.md)| Date du mouvement de stock |
 **comment** | **string**| Commentaire |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStocks**
> getStocks($id_product, $ids_product, $minimum, $all, $csv_file, $id_point_of_sale)

Récupération

Récupération des stocks produit d'un point de vente

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\StocksCentralissApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_product = 56; // int | Identifiant produit
$ids_product = 56; // int | Identifiants produits
$minimum = 56; // int | 1 pour récupérer les articles en alerte stock
$all = 56; // int | 1 pour récupérer également les articles avec stocks désactivés
$csv_file = 56; // int | 1 pour récupérer le fichier csv associé
$id_point_of_sale = 56; // int | Identifiant du point de vente

try {
    $apiInstance->getStocks($id_product, $ids_product, $minimum, $all, $csv_file, $id_point_of_sale);
} catch (Exception $e) {
    echo 'Exception when calling StocksCentralissApi->getStocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_product** | **int**| Identifiant produit |
 **ids_product** | **int**| Identifiants produits |
 **minimum** | **int**| 1 pour récupérer les articles en alerte stock |
 **all** | **int**| 1 pour récupérer également les articles avec stocks désactivés |
 **csv_file** | **int**| 1 pour récupérer le fichier csv associé |
 **id_point_of_sale** | **int**| Identifiant du point de vente | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStocksHistory**
> \Qwenta\Fulleapps\Model\InlineResponse2005 getStocksHistory($, $, $, $)

Historique de stock

Récupération de l'historique de stock (Option requise : Stocks Centralisés)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\StocksCentralissApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ = new \Qwenta\Fulleapps\Model\null(); //  | Identifiant du point de vente
$ = new \Qwenta\Fulleapps\Model\null(); //  | Identifiant du produit
$ = new \Qwenta\Fulleapps\Model\null(); //  | Offset
$ = new \Qwenta\Fulleapps\Model\null(); //  | Nombre d'élements à récupérer (par défaut 50)

try {
    $result = $apiInstance->getStocksHistory($, $, $, $);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksCentralissApi->getStocksHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **** | [****](../Model/.md)| Identifiant du point de vente |
 **** | [****](../Model/.md)| Identifiant du produit |
 **** | [****](../Model/.md)| Offset | [optional]
 **** | [****](../Model/.md)| Nombre d&#x27;élements à récupérer (par défaut 50) | [optional]

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

