# InlineResponse2009

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request** | **object** | Origin request | [optional] 
**code** | [**Int**](Int.md) | Response code&lt;br/&gt;                                 - CODE_OK (1) &#x3D; Success&lt;br/&gt;                                 - CODE_ERR_UNAUTHORIZED (-10) &#x3D; Unauthorized&lt;br/&gt;                                 - CODE_ERR_NOT_FOUND (-21) &#x3D; Client not found&lt;br/&gt;                                 - CODE_ERR_PHONE_NOT_VALID (-15) &#x3D; Phone not valid&lt;br/&gt;                                 - CODE_ERR_INSERT (-1) &#x3D; Intern error | [optional] 
**message** | **string** | Response message | [optional] 
**object** | [**\Qwenta\Fulleapps\Model\Client**](Client.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

