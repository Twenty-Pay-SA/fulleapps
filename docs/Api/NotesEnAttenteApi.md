# Qwenta\Fulleapps\NotesEnAttenteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWaitingNotes**](NotesEnAttenteApi.md#deletewaitingnotes) | **DELETE** /notes/{id} | Suppression
[**getWaitingNotes**](NotesEnAttenteApi.md#getwaitingnotes) | **GET** /notes | Récupération

# **deleteWaitingNotes**
> deleteWaitingNotes($id)

Suppression

Suppression d'une note en attente

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\NotesEnAttenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant de la note

try {
    $apiInstance->deleteWaitingNotes($id);
} catch (Exception $e) {
    echo 'Exception when calling NotesEnAttenteApi->deleteWaitingNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**Int**](../Model/.md)| Identifiant de la note |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWaitingNotes**
> \Qwenta\Fulleapps\Model\InlineResponse20027 getWaitingNotes($id_point_of_sale, $n_table)

Récupération

Récupération des notes en attente

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\NotesEnAttenteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_point_of_sale = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du point de vente associé à la note
$n_table = new \Qwenta\Fulleapps\Model\Int(); // Int | Recherche par numéro de table

try {
    $result = $apiInstance->getWaitingNotes($id_point_of_sale, $n_table);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesEnAttenteApi->getWaitingNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_point_of_sale** | [**Int**](../Model/.md)| Identifiant du point de vente associé à la note |
 **n_table** | [**Int**](../Model/.md)| Recherche par numéro de table |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

