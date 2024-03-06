# Qwenta\Fulleapps\BanquesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBank**](BanquesApi.md#addbank) | **POST** /accountant/banks | Création
[**getBanks**](BanquesApi.md#getbanks) | **GET** /accountant/banks | Récupération
[**updateBank**](BanquesApi.md#updatebank) | **POST** /accountant/banks/{id} | Modification

# **addBank**
> addBank($body)

Création

Création d'une banque<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\BanquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\AccountantBanksBody(); // \Qwenta\Fulleapps\Model\AccountantBanksBody | 

try {
    $apiInstance->addBank($body);
} catch (Exception $e) {
    echo 'Exception when calling BanquesApi->addBank: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\AccountantBanksBody**](../Model/AccountantBanksBody.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBanks**
> \Qwenta\Fulleapps\Model\InlineResponse2001 getBanks($id_point_of_sale)

Récupération

Récupération des banques

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\BanquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_point_of_sale = new \Qwenta\Fulleapps\Model\Int(); // Int | Récupération des banques associées au point de vente

try {
    $result = $apiInstance->getBanks($id_point_of_sale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanquesApi->getBanks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_point_of_sale** | [**Int**](../Model/.md)| Récupération des banques associées au point de vente |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBank**
> updateBank($body, $id)

Modification

Modification d'une banque<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\BanquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\BanksIdBody(); // \Qwenta\Fulleapps\Model\BanksIdBody | 
$id = 56; // int | Identifiant de la banque

try {
    $apiInstance->updateBank($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling BanquesApi->updateBank: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\BanksIdBody**](../Model/BanksIdBody.md)|  |
 **id** | **int**| Identifiant de la banque |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

