# Qwenta\Fulleapps\CommandesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**69c3b6ea53c35dc400174e6dd00999c2**](CommandesApi.md#69c3b6ea53c35dc400174e6dd00999c2) | **GET** /orders/level/{id} | Historique
[**78bd5c6f7d06b9bafd09970611714b0a**](CommandesApi.md#78bd5c6f7d06b9bafd09970611714b0a) | **POST** /orders/level/{id} | Changement d&#x27;état
[**ae29415f124c9834617fb033e8a47823**](CommandesApi.md#ae29415f124c9834617fb033e8a47823) | **GET** /orders | Récupération
[**postCreateOrder**](CommandesApi.md#postcreateorder) | **POST** /orders | Création
[**postOrderMail**](CommandesApi.md#postordermail) | **POST** /orders/mail/{id} | Envoyer un mail
[**postUpdateOrder**](CommandesApi.md#postupdateorder) | **POST** /orders/{id} | Modification

# **69c3b6ea53c35dc400174e6dd00999c2**
> \Qwenta\Fulleapps\Model\InlineResponse20016 69c3b6ea53c35dc400174e6dd00999c2($id)

Historique

Récupération de l'historique des états d'une commande

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant de la commande

try {
    $result = $apiInstance->69c3b6ea53c35dc400174e6dd00999c2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->69c3b6ea53c35dc400174e6dd00999c2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant de la commande |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **78bd5c6f7d06b9bafd09970611714b0a**
> \Qwenta\Fulleapps\Model\Order[] 78bd5c6f7d06b9bafd09970611714b0a($, $id_order_level, $comment)

Changement d'état

Changement de l'état d'une commande<br/>     <strong>Si les alertes SMS sont paramétrées sur l'état de commande, l'envoi et la facturation d'un SMS seront effectués.</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ = new \Qwenta\Fulleapps\Model\null(); //  | Identifiant de la commande
$id_order_level = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant de l'état de commande
$comment = "comment_example"; // string | Commentaire libre

try {
    $result = $apiInstance->78bd5c6f7d06b9bafd09970611714b0a($, $id_order_level, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->78bd5c6f7d06b9bafd09970611714b0a: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **** | [****](../Model/.md)| Identifiant de la commande |
 **id_order_level** | [**Int**](../Model/.md)| Identifiant de l&#x27;état de commande |
 **comment** | **string**| Commentaire libre |

### Return type

[**\Qwenta\Fulleapps\Model\Order[]**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ae29415f124c9834617fb033e8a47823**
> \Qwenta\Fulleapps\Model\Order[] ae29415f124c9834617fb033e8a47823($from_date, $to_date, $id_point_of_sale, $id_order_level, $id_sale_method)

Récupération

Récupération des commandes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de début de période (Recherche par date d'éxécution de la commande)
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de fin de période (Recherche par date d'éxécution de la commande)
$id_point_of_sale = 56; // int | Récupération par point de vente
$id_order_level = 56; // int | Récupération par état de commande
$id_sale_method = 56; // int | Récupération par mode de vente

try {
    $result = $apiInstance->ae29415f124c9834617fb033e8a47823($from_date, $to_date, $id_point_of_sale, $id_order_level, $id_sale_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->ae29415f124c9834617fb033e8a47823: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | [**\DateTime**](../Model/.md)| Date de début de période (Recherche par date d&#x27;éxécution de la commande) |
 **to_date** | [**\DateTime**](../Model/.md)| Date de fin de période (Recherche par date d&#x27;éxécution de la commande) |
 **id_point_of_sale** | **int**| Récupération par point de vente |
 **id_order_level** | **int**| Récupération par état de commande |
 **id_sale_method** | **int**| Récupération par mode de vente |

### Return type

[**\Qwenta\Fulleapps\Model\Order[]**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCreateOrder**
> postCreateOrder($body)

Création

Création d'une commande [OPTION COMMANDES REQUISE]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\OrderC(); // \Qwenta\Fulleapps\Model\OrderC | 

try {
    $apiInstance->postCreateOrder($body);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->postCreateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\OrderC**](../Model/OrderC.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrderMail**
> postOrderMail($body, $id)

Envoyer un mail

Envoi de la commande par mail. Selon l'état de la commande, un mail de confirmation, d'évolution ou de cloture sera envoyé.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\MailIdBody(); // \Qwenta\Fulleapps\Model\MailIdBody | 
$id = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant de la commande

try {
    $apiInstance->postOrderMail($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->postOrderMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\MailIdBody**](../Model/MailIdBody.md)|  |
 **id** | [**Int**](../Model/.md)| Identifiant de la commande |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUpdateOrder**
> postUpdateOrder($body, $id)

Modification

Modification d'une commande [OPTION COMMANDES REQUISE]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\OrderC(); // \Qwenta\Fulleapps\Model\OrderC | 
$id = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant de la commande

try {
    $apiInstance->postUpdateOrder($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->postUpdateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\OrderC**](../Model/OrderC.md)|  |
 **id** | [**Int**](../Model/.md)| Identifiant de la commande |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

