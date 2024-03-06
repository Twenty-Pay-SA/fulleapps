# Qwenta\Fulleapps\ComptesClientsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountStatementGet**](ComptesClientsApi.md#accountstatementget) | **GET** /account_statement | Liste / Relevés de compte
[**accountStatementIdGet**](ComptesClientsApi.md#accountstatementidget) | **GET** /account_statement/id | Client / Relevés de compte
[**getAccountBalance**](ComptesClientsApi.md#getaccountbalance) | **GET** /account_balance | Liste / Balances de compte
[**getAccountBalanceByID**](ComptesClientsApi.md#getaccountbalancebyid) | **GET** /account_balance/{id} | Client / Balances de compte
[**getAccountHistory**](ComptesClientsApi.md#getaccounthistory) | **GET** /account_history/{id} | Historique
[**getLetterings**](ComptesClientsApi.md#getletterings) | **GET** /letterings | Liste / Lettrages

# **accountStatementGet**
> accountStatementGet($type, $from_date, $to_date, $id_point_of_sale)

Liste / Relevés de compte

Récupération des relevés des comptes client (Factures en crédit, Acomptes commande)<br/>Seuls les factures et avoirs de la période concernée, non encaissées et/ou lettrés à ce jour seront édités sur ce document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ComptesClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 56; // int | -1 = Tous les mouvements, 1 = Factures en crédit, 2 = Acomptes commande
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Période - Date de début
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Période - Date de fin
$id_point_of_sale = 56; // int | Identifiant du point de vente

try {
    $apiInstance->accountStatementGet($type, $from_date, $to_date, $id_point_of_sale);
} catch (Exception $e) {
    echo 'Exception when calling ComptesClientsApi->accountStatementGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**| -1 &#x3D; Tous les mouvements, 1 &#x3D; Factures en crédit, 2 &#x3D; Acomptes commande |
 **from_date** | [**\DateTime**](../Model/.md)| Période - Date de début |
 **to_date** | [**\DateTime**](../Model/.md)| Période - Date de fin |
 **id_point_of_sale** | **int**| Identifiant du point de vente |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountStatementIdGet**
> accountStatementIdGet($id, $type, $from_date, $to_date, $id_point_of_sale)

Client / Relevés de compte

Récupération des relevés d'un compte client (Factures en crédit, Acomptes commande)<br/>Seuls les factures et avoirs de la période concernée, non encaissées et/ou lettrés à ce jour seront édités sur ce document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ComptesClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant du client
$type = 56; // int | -1 = Tous les mouvements, 1 = Factures en crédit, 2 = Acomptes commande
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Période - Date de début
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Période - Date de fin
$id_point_of_sale = 56; // int | Identifiant du point de vente

try {
    $apiInstance->accountStatementIdGet($id, $type, $from_date, $to_date, $id_point_of_sale);
} catch (Exception $e) {
    echo 'Exception when calling ComptesClientsApi->accountStatementIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant du client |
 **type** | **int**| -1 &#x3D; Tous les mouvements, 1 &#x3D; Factures en crédit, 2 &#x3D; Acomptes commande |
 **from_date** | [**\DateTime**](../Model/.md)| Période - Date de début |
 **to_date** | [**\DateTime**](../Model/.md)| Période - Date de fin |
 **id_point_of_sale** | **int**| Identifiant du point de vente |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountBalance**
> getAccountBalance($id_point_of_sale, $type, $reference_date)

Liste / Balances de compte

Récupération des balances des comptes client (Factures en crédit, Acomptes commande)<br/>L'antériorité des sommes dues est calculée par rapport à la date de référence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ComptesClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_point_of_sale = 56; // int | Identifiant du point de vente
$type = 56; // int | -1 = Tous les mouvements, 1 = Factures en crédit, 2 = Acomptes commande
$reference_date = "reference_date_example"; // string | Date de référence (L'antériorité des sommes dues est calculée par rapport à la date de référénce)

try {
    $apiInstance->getAccountBalance($id_point_of_sale, $type, $reference_date);
} catch (Exception $e) {
    echo 'Exception when calling ComptesClientsApi->getAccountBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_point_of_sale** | **int**| Identifiant du point de vente |
 **type** | **int**| -1 &#x3D; Tous les mouvements, 1 &#x3D; Factures en crédit, 2 &#x3D; Acomptes commande |
 **reference_date** | **string**| Date de référence (L&#x27;antériorité des sommes dues est calculée par rapport à la date de référénce) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountBalanceByID**
> getAccountBalanceByID($id, $id_point_of_sale, $type, $reference_date)

Client / Balances de compte

Récupération des balances d'un compte client (Factures en crédit, Acomptes commande)<br/>L'antériorité des sommes dues est calculée par rapport à la date de référence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ComptesClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Identifiant du client
$id_point_of_sale = 56; // int | Identifiant du point de vente
$type = 56; // int | -1 = Tous les mouvements, 1 = Factures en crédit, 2 = Acomptes commande
$reference_date = "reference_date_example"; // string | Date de référence (L'antériorité des sommes dues est calculée par rapport à la date de référénce)

try {
    $apiInstance->getAccountBalanceByID($id, $id_point_of_sale, $type, $reference_date);
} catch (Exception $e) {
    echo 'Exception when calling ComptesClientsApi->getAccountBalanceByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifiant du client |
 **id_point_of_sale** | **int**| Identifiant du point de vente |
 **type** | **int**| -1 &#x3D; Tous les mouvements, 1 &#x3D; Factures en crédit, 2 &#x3D; Acomptes commande |
 **reference_date** | **string**| Date de référence (L&#x27;antériorité des sommes dues est calculée par rapport à la date de référénce) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountHistory**
> getAccountHistory($id_client, $from_date, $to_date)

Historique

Historique du compte client (Factures en crédits, Acomptes, Lettrages)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ComptesClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_client = 56; // int | Identifiant du client
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de début de période
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de fin de période

try {
    $apiInstance->getAccountHistory($id_client, $from_date, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling ComptesClientsApi->getAccountHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_client** | **int**| Identifiant du client | [optional]
 **from_date** | [**\DateTime**](../Model/.md)| Date de début de période | [optional]
 **to_date** | [**\DateTime**](../Model/.md)| Date de fin de période | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLetterings**
> \Qwenta\Fulleapps\Model\CreditLettering[] getLetterings($id_client, $from_date, $to_date, $limit, $offset)

Liste / Lettrages

Liste des lettrages (Encaissements des crédits client)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ComptesClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_client = 56; // int | Identifiant du client
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de début de période
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date de fin de période
$limit = 56; // int | Limite
$offset = 56; // int | Offset

try {
    $result = $apiInstance->getLetterings($id_client, $from_date, $to_date, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComptesClientsApi->getLetterings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_client** | **int**| Identifiant du client | [optional]
 **from_date** | [**\DateTime**](../Model/.md)| Date de début de période | [optional]
 **to_date** | [**\DateTime**](../Model/.md)| Date de fin de période | [optional]
 **limit** | **int**| Limite | [optional]
 **offset** | **int**| Offset | [optional]

### Return type

[**\Qwenta\Fulleapps\Model\CreditLettering[]**](../Model/CreditLettering.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

