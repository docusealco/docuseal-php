# Docuseal\SubmittersApi

All URIs are relative to https://api.docuseal.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSubmitter()**](SubmittersApi.md#getSubmitter) | **GET** /submitters/{id} | Get a submitter |
| [**getSubmitters()**](SubmittersApi.md#getSubmitters) | **GET** /submitters | List all submitters |
| [**updateSubmitter()**](SubmittersApi.md#updateSubmitter) | **PUT** /submitters/{id} | Update a submitter |


## `getSubmitter()`

```php
getSubmitter($id): \Docuseal\Model\GetSubmitter200Response
```

Get a submitter

The API endpoint provides the functionality to retrieve information about a submitter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\SubmittersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 500001; // int | The unique identifier of the submitter.

try {
    $result = $apiInstance->getSubmitter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmittersApi->getSubmitter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the submitter. | |

### Return type

[**\Docuseal\Model\GetSubmitter200Response**](../Model/GetSubmitter200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmitters()`

```php
getSubmitters($submission_id, $q, $external_id, $limit, $before, $after): \Docuseal\Model\GetSubmitters200Response
```

List all submitters

The API endpoint provides the ability to retrieve a list of submitters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\SubmittersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_id = 56; // int | The unique identifier of the submission. Allows to receive only submitters for a submission.
$q = 'q_example'; // string | Filter submitters on name, email or phone partial match.
$external_id = 'external_id_example'; // string | The unique applications-specific identifier provided for a submitter when initializing a signature request. Allows to receive only submitters with a specified external id.
$limit = 56; // int | The number of submitters to return. Default value is 10. Maximum value is 100.
$before = 56; // int | The unique identifier of the submitter to end the list with. Allows to receive only submitters with id less than the specified value.
$after = 56; // int | The unique identifier of the submitter to start the list from. Allows to receive only submitters with id greater than the specified value.

try {
    $result = $apiInstance->getSubmitters($submission_id, $q, $external_id, $limit, $before, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmittersApi->getSubmitters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **int**| The unique identifier of the submission. Allows to receive only submitters for a submission. | [optional] |
| **q** | **string**| Filter submitters on name, email or phone partial match. | [optional] |
| **external_id** | **string**| The unique applications-specific identifier provided for a submitter when initializing a signature request. Allows to receive only submitters with a specified external id. | [optional] |
| **limit** | **int**| The number of submitters to return. Default value is 10. Maximum value is 100. | [optional] |
| **before** | **int**| The unique identifier of the submitter to end the list with. Allows to receive only submitters with id less than the specified value. | [optional] |
| **after** | **int**| The unique identifier of the submitter to start the list from. Allows to receive only submitters with id greater than the specified value. | [optional] |

### Return type

[**\Docuseal\Model\GetSubmitters200Response**](../Model/GetSubmitters200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubmitter()`

```php
updateSubmitter($id, $update_submitter_request): \Docuseal\Model\UpdateSubmitter200Response
```

Update a submitter

The API endpoint provides allows to update submitter details, field values and re-send emails.<br><b>Related Guides</b><br><a href=\"https://www.docuseal.co/guides/pre-fill-pdf-document-form-fields-with-api#automatically_sign_documents_via_api\" class=\"link\">Automatically sign documents via API</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\SubmittersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 500001; // int | The unique identifier of the submitter.
$update_submitter_request = new \Docuseal\Model\UpdateSubmitterRequest(); // \Docuseal\Model\UpdateSubmitterRequest

try {
    $result = $apiInstance->updateSubmitter($id, $update_submitter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmittersApi->updateSubmitter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the submitter. | |
| **update_submitter_request** | [**\Docuseal\Model\UpdateSubmitterRequest**](../Model/UpdateSubmitterRequest.md)|  | |

### Return type

[**\Docuseal\Model\UpdateSubmitter200Response**](../Model/UpdateSubmitter200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
