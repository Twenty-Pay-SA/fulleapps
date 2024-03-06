# Qwenta\Fulleapps\ModesDeRglementApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**1bdc237e2c731798a2889a8e44355b70**](ModesDeRglementApi.md#1bdc237e2c731798a2889a8e44355b70) | **POST** /payment_means | Création
[**3ec533d07ca9a2ec69daeac171a83502**](ModesDeRglementApi.md#3ec533d07ca9a2ec69daeac171a83502) | **GET** /payment_means | Récupération
[**80f2b4a022b7de1bf7e9fe27b708985e**](ModesDeRglementApi.md#80f2b4a022b7de1bf7e9fe27b708985e) | **POST** /payment_means/id | Modification
[**a3d0703141a0123879ab481cd193887d**](ModesDeRglementApi.md#a3d0703141a0123879ab481cd193887d) | **POST** /payment_means/delete/{id} | Suppression

# **1bdc237e2c731798a2889a8e44355b70**
> 1bdc237e2c731798a2889a8e44355b70($body)

Création

Création d'un mode de réglement<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ModesDeRglementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\PaymentMean(); // \Qwenta\Fulleapps\Model\PaymentMean | 

try {
    $apiInstance->1bdc237e2c731798a2889a8e44355b70($body);
} catch (Exception $e) {
    echo 'Exception when calling ModesDeRglementApi->1bdc237e2c731798a2889a8e44355b70: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\PaymentMean**](../Model/PaymentMean.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **3ec533d07ca9a2ec69daeac171a83502**
> \Qwenta\Fulleapps\Model\InlineResponse20017 3ec533d07ca9a2ec69daeac171a83502()

Récupération

Récupération des modes de règlement<br/>Le tableau 'list' regroupe les modes de règlement créés par le commerçant<br/>Liste des modes de règlement système :<br/>                     <ul>                 <li>-9 / ESPECES</li>                 <li>-10 / RENDU MONNAIE</li>                 <li>-11 / TICKET RESTAURANT</li>                 <li>-13 / PAIEMENT EN LIGNE</li>                 <li>-15 / CAGNOTTE CLIENT</li>                 <li>-18 / CARTE BANCAIRE</li>                 <li>-19 / CHEQUE</li>                 <li>-20 / AVOIR SUR TITRE</li>                 <li>-21 / TROP PERÇU</li>                 <li>-22 / CHÈQUE DEJEUNER</li>                 <li>-23 / CHÈQUE VACANCES</li>                 <li>-24 / CHÈQUE TABLE</li>                 <li>-25 / PASS RESTAURANT</li>                 <li>-26 / DINERS CLUB</li>                 <li>-27 / VIREMENT</li>                 <li>-28 / AMERICAN EXPRESS</li>                 <li>-30 / CREDIT CLIENT</li>                 <li>-31 / APETIZ</li>                 <li>-32 / SMONEY_CME [APETIZ]</li>                 <li>-33 / APETIZ_TRD [APETIZ]</li>                 <li>-35 / CHEQUE INTERFLORA</li>                 <li>-39 / SUMUP</li>                 <li>-43 / PAYPAL</li>                 <li>-45 / CARTE DEJEUNER CALEDONIEN</li>                 <li>-46 / CASHBACK</li>                 <li>-48 / PAYZEN</li>                 <li>-49 / THAIS</li>                 <li>-50 / CARTE TITRE RESTAURANT</li>                 <li>-51 / CHEQUE CADEAU</li>                     </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ModesDeRglementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->3ec533d07ca9a2ec69daeac171a83502();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModesDeRglementApi->3ec533d07ca9a2ec69daeac171a83502: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **80f2b4a022b7de1bf7e9fe27b708985e**
> 80f2b4a022b7de1bf7e9fe27b708985e($body)

Modification

Modification d'un mode de réglement<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ModesDeRglementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\PaymentMean(); // \Qwenta\Fulleapps\Model\PaymentMean | 

try {
    $apiInstance->80f2b4a022b7de1bf7e9fe27b708985e($body);
} catch (Exception $e) {
    echo 'Exception when calling ModesDeRglementApi->80f2b4a022b7de1bf7e9fe27b708985e: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\PaymentMean**](../Model/PaymentMean.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **a3d0703141a0123879ab481cd193887d**
> a3d0703141a0123879ab481cd193887d($id)

Suppression

Suppression d'un mode de réglement<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ModesDeRglementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant du mode de réglement

try {
    $apiInstance->a3d0703141a0123879ab481cd193887d($id);
} catch (Exception $e) {
    echo 'Exception when calling ModesDeRglementApi->a3d0703141a0123879ab481cd193887d: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant du mode de réglement | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

