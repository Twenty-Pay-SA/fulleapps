# Qwenta\Fulleapps\RservationsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBookings**](RservationsApi.md#getbookings) | **GET** /bookings | Récupération
[**postCreateBooking**](RservationsApi.md#postcreatebooking) | **POST** /bookings | Création
[**postUpdateBooking**](RservationsApi.md#postupdatebooking) | **POST** /bookings/{id} | Modification
[**postUpdateLevelBooking**](RservationsApi.md#postupdatelevelbooking) | **POST** /bookings/level/{id} | Changement d&#x27;état

# **getBookings**
> \Qwenta\Fulleapps\Model\Booking[] getBookings($from_date, $to_date, $id_client, $id_point_of_sale, $id_booking_service)

Récupération

Récupération des réservations [OPTION RESERVE REQUISE]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtre par période : date de début
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtre par période : date de fin
$id_client = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du client associé à la reservation
$id_point_of_sale = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du point de vente associé à la reservation
$id_booking_service = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant du service associé à la reservation

try {
    $result = $apiInstance->getBookings($from_date, $to_date, $id_client, $id_point_of_sale, $id_booking_service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RservationsApi->getBookings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | [**\DateTime**](../Model/.md)| Filtre par période : date de début |
 **to_date** | [**\DateTime**](../Model/.md)| Filtre par période : date de fin |
 **id_client** | [**Int**](../Model/.md)| Identifiant du client associé à la reservation |
 **id_point_of_sale** | [**Int**](../Model/.md)| Identifiant du point de vente associé à la reservation |
 **id_booking_service** | [**Int**](../Model/.md)| Identifiant du service associé à la reservation |

### Return type

[**\Qwenta\Fulleapps\Model\Booking[]**](../Model/Booking.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCreateBooking**
> postCreateBooking($body)

Création

Création d'une réservation [OPTION RESERVE REQUISE]<br/>booking_level.id : 0 = En attente d'acceptation, 1 = Acceptée

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\BookingC(); // \Qwenta\Fulleapps\Model\BookingC | 

try {
    $apiInstance->postCreateBooking($body);
} catch (Exception $e) {
    echo 'Exception when calling RservationsApi->postCreateBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\BookingC**](../Model/BookingC.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUpdateBooking**
> postUpdateBooking($body, $id)

Modification

Modification d'une réservation [OPTION RESERVE REQUISE]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Qwenta\Fulleapps\Model\BookingU(); // \Qwenta\Fulleapps\Model\BookingU | 
$id = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant de la reservation

try {
    $apiInstance->postUpdateBooking($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling RservationsApi->postUpdateBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Qwenta\Fulleapps\Model\BookingU**](../Model/BookingU.md)|  |
 **id** | [**Int**](../Model/.md)| Identifiant de la reservation |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUpdateLevelBooking**
> postUpdateLevelBooking($id, $body)

Changement d'état

Modification d'un état de réservation [OPTION RESERVE REQUISE]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Qwenta\Fulleapps\Api\RservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Qwenta\Fulleapps\Model\Int(); // Int | Identifiant de la reservation
$body = new \Qwenta\Fulleapps\Model\LevelIdBody(); // \Qwenta\Fulleapps\Model\LevelIdBody | 

try {
    $apiInstance->postUpdateLevelBooking($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling RservationsApi->postUpdateLevelBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**Int**](../Model/.md)| Identifiant de la reservation |
 **body** | [**\Qwenta\Fulleapps\Model\LevelIdBody**](../Model/LevelIdBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

