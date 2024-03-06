# Qwenta\Fulleapps\MouvementsDeCaisseApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMovement**](MouvementsDeCaisseApi.md#addmovement) | **POST** /movements | Création
[**getMovements**](MouvementsDeCaisseApi.md#getmovements) | **GET** /movements | Historique

# **addMovement**
> addMovement($body)

Création

Création d'un mouvement de caisse (Uniquement disponible via l'application de caisse)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\MouvementsDeCaisseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\Movement(); // \Qwenta\Fulleapps\Model\Movement | 

try {
    $apiInstance->addMovement($body);
} catch (Exception $e) {
    echo 'Exception when calling MouvementsDeCaisseApi->addMovement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\Movement**](../Model/Movement.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMovements**
> \Qwenta\Fulleapps\Model\InlineResponse20014 getMovements($id_device, $from_date, $to_date)

Historique

Liste des mouvements de caisse (Entrées / Sorties banque, fournisseurs, remise en banque automatique, regul début de service ...)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\MouvementsDeCaisseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_device = 56; // int | Identifiant de l'appareil
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de début de période
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de fin de période

try {
    $result = $apiInstance->getMovements($id_device, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MouvementsDeCaisseApi->getMovements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_device** | **int**| Identifiant de l&#x27;appareil |
 **from_date** | [**\DateTime**](../Model/.md)| Date de début de période | [optional]
 **to_date** | [**\DateTime**](../Model/.md)| Date de fin de période | [optional]

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

