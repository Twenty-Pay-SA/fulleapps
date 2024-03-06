# Qwenta\Fulleapps\CashlessApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**0d4947138b3704065a961d5d0b25e105**](CashlessApi.md#0d4947138b3704065a961d5d0b25e105) | **POST** /client_cards/phone/{id} | UPDATE PHONE - CLIENT CARD
[**2a67b19e32ab09fe0443cf64a1dd512c**](CashlessApi.md#2a67b19e32ab09fe0443cf64a1dd512c) | **POST** /client_cards/transfer | TRANSFER - CLIENT CARD
[**a63b0c31970b2db556adb5a171d7f64d**](CashlessApi.md#a63b0c31970b2db556adb5a171d7f64d) | **POST** /client_cards | CREATE - CLIENT CARD
[**c4b6936fb29d5d66a92df77013933a88**](CashlessApi.md#c4b6936fb29d5d66a92df77013933a88) | **POST** /client_cards/block | BLOCK CARD - STEP 2/2
[**clientCardsBlockPost**](CashlessApi.md#clientcardsblockpost) | **POST** /client_cards/block  | BLOCK CARD - STEP 1/2

# **0d4947138b3704065a961d5d0b25e105**
> \Qwenta\Fulleapps\Model\InlineResponse2007 0d4947138b3704065a961d5d0b25e105($body, $id)

UPDATE PHONE - CLIENT CARD

Update a client phone (Cashless only)<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CashlessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\PhoneIdBody(); // \Qwenta\Fulleapps\Model\PhoneIdBody | 
$id = 789; // int | ID of client card to update

try {
    $result = $apiInstance->0d4947138b3704065a961d5d0b25e105($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashlessApi->0d4947138b3704065a961d5d0b25e105: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\PhoneIdBody**](../Model/PhoneIdBody.md)|  |
 **id** | **int**| ID of client card to update |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **2a67b19e32ab09fe0443cf64a1dd512c**
> \Qwenta\Fulleapps\Model\InlineResponse2007 2a67b19e32ab09fe0443cf64a1dd512c($body)

TRANSFER - CLIENT CARD

Transfer amount of a archived card into a new one (Cashless only)<br/>Old client must be archived before being able to transfer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CashlessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientCardsTransferBody(); // \Qwenta\Fulleapps\Model\ClientCardsTransferBody | 

try {
    $result = $apiInstance->2a67b19e32ab09fe0443cf64a1dd512c($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashlessApi->2a67b19e32ab09fe0443cf64a1dd512c: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientCardsTransferBody**](../Model/ClientCardsTransferBody.md)|  |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **a63b0c31970b2db556adb5a171d7f64d**
> a63b0c31970b2db556adb5a171d7f64d($body)

CREATE - CLIENT CARD

Create a client card (CASHLESS ONLY / BILLING APP ONLY)<br/><strong>WEBHOOK OK</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CashlessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientCard(); // \Qwenta\Fulleapps\Model\ClientCard | 

try {
    $apiInstance->a63b0c31970b2db556adb5a171d7f64d($body);
} catch (Exception $e) {
    echo 'Exception when calling CashlessApi->a63b0c31970b2db556adb5a171d7f64d: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientCard**](../Model/ClientCard.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **c4b6936fb29d5d66a92df77013933a88**
> \Qwenta\Fulleapps\Model\InlineResponse2009 c4b6936fb29d5d66a92df77013933a88($body)

BLOCK CARD - STEP 2/2

Block a client card (CASHLESS ONLY / BILLING APP ONLY)<br/>This step will block a card associated to the ID SMS and the security code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CashlessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientCardsBlockBody(); // \Qwenta\Fulleapps\Model\ClientCardsBlockBody | 

try {
    $result = $apiInstance->c4b6936fb29d5d66a92df77013933a88($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashlessApi->c4b6936fb29d5d66a92df77013933a88: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientCardsBlockBody**](../Model/ClientCardsBlockBody.md)|  |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientCardsBlockPost**
> \Qwenta\Fulleapps\Model\InlineResponse2008 clientCardsBlockPost($body)

BLOCK CARD - STEP 1/2

Block a client card (CASHLESS ONLY / BILLING APP ONLY)<br/>This step will send a SMS (identified by ID SMS) to the client phone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\CashlessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\ClientCardsBlockBody(); // \Qwenta\Fulleapps\Model\ClientCardsBlockBody | 

try {
    $result = $apiInstance->clientCardsBlockPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashlessApi->clientCardsBlockPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\ClientCardsBlockBody**](../Model/ClientCardsBlockBody.md)|  |

### Return type

[**\Qwenta\Fulleapps\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

