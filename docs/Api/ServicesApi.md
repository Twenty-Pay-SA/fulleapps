# Qwenta\Fulleapps\ServicesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookingSettingsServicesIdDelete**](ServicesApi.md#bookingsettingsservicesiddelete) | **DELETE** /booking_settings/services/{id} | Suppression
[**getBookingServices**](ServicesApi.md#getbookingservices) | **GET** /booking_settings/services | Récupération
[**postCreateBookingService**](ServicesApi.md#postcreatebookingservice) | **POST** /booking_settings/services | Création
[**postUpdateBookingService**](ServicesApi.md#postupdatebookingservice) | **POST** /booking_settings/services/{id} | Modification

# **bookingSettingsServicesIdDelete**
> bookingSettingsServicesIdDelete($)

Suppression

Suppression d'un service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ = new \Qwenta\Fulleapps\Model\null(); //  | 

try {
    $apiInstance->bookingSettingsServicesIdDelete($);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->bookingSettingsServicesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **** | [****](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBookingServices**
> \Qwenta\Fulleapps\Model\BookingService[] getBookingServices($id_point_of_sale, $day)

Récupération

Récupération des services réservations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_point_of_sale = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du point de vente associé
$day = new \Qwenta\Fulleapps\Model\Int(); // Int | Jour associé au service (0 = Dimanche - 6 = Samedi)

try {
    $result = $apiInstance->getBookingServices($id_point_of_sale, $day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getBookingServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_point_of_sale** | [**Int**](../Model/.md)| Identifiant du point de vente associé |
 **day** | [**Int**](../Model/.md)| Jour associé au service (0 &#x3D; Dimanche - 6 &#x3D; Samedi) | [optional]

### Return type

[**\Qwenta\Fulleapps\Model\BookingService[]**](../Model/BookingService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCreateBookingService**
> postCreateBookingService($body)

Création

Création d'un service de réservation [OPTION RESERVE REQUISE]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\BookingServiceC(); // \Qwenta\Fulleapps\Model\BookingServiceC | 

try {
    $apiInstance->postCreateBookingService($body);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->postCreateBookingService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\BookingServiceC**](../Model/BookingServiceC.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUpdateBookingService**
> postUpdateBookingService($body, $id)

Modification

Modification d'un service de réservation [OPTION RESERVE REQUISE]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\BookingServiceC(); // \Qwenta\Fulleapps\Model\BookingServiceC | 
$id = 56; // int | Identifiant du service

try {
    $apiInstance->postUpdateBookingService($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->postUpdateBookingService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\BookingServiceC**](../Model/BookingServiceC.md)|  |
 **id** | **int**| Identifiant du service | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

