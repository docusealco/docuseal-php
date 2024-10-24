# Docuseal\SubmissionsApi

All URIs are relative to https://api.docuseal.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveSubmission()**](SubmissionsApi.md#archiveSubmission) | **DELETE** /submissions/{id} | Archive a submission |
| [**createSubmission()**](SubmissionsApi.md#createSubmission) | **POST** /submissions | Create a submission |
| [**createSubmissionsFromEmails()**](SubmissionsApi.md#createSubmissionsFromEmails) | **POST** /submissions/emails | Create submissions from emails |
| [**getSubmission()**](SubmissionsApi.md#getSubmission) | **GET** /submissions/{id} | Get a submission |
| [**getSubmissions()**](SubmissionsApi.md#getSubmissions) | **GET** /submissions | List all submissions |


## `archiveSubmission()`

```php
archiveSubmission($id): \Docuseal\Model\ArchiveSubmission200Response
```

Archive a submission

The API endpoint allows you to archive a submission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1001; // int | The unique identifier of the submission.

try {
    $result = $apiInstance->archiveSubmission($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->archiveSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the submission. | |

### Return type

[**\Docuseal\Model\ArchiveSubmission200Response**](../Model/ArchiveSubmission200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubmission()`

```php
createSubmission($create_submission_request): \Docuseal\Model\CreateSubmission200ResponseInner[]
```

Create a submission

This API endpoint allows you to create signature requests (submissions) for a document template and send them to the specified submitters (signers).<br><b>Related Guides</b><br><a href=\"https://www.docuseal.co/guides/send-documents-for-signature-via-api\" class=\"link\">Send documents for signature via API</a><br><a href=\"https://www.docuseal.co/guides/pre-fill-pdf-document-form-fields-with-api\" class=\"link\">Pre-fill PDF document form fields with API</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_submission_request = new \Docuseal\Model\CreateSubmissionRequest(); // \Docuseal\Model\CreateSubmissionRequest

try {
    $result = $apiInstance->createSubmission($create_submission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->createSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_submission_request** | [**\Docuseal\Model\CreateSubmissionRequest**](../Model/CreateSubmissionRequest.md)|  | |

### Return type

[**\Docuseal\Model\CreateSubmission200ResponseInner[]**](../Model/CreateSubmission200ResponseInner.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubmissionsFromEmails()`

```php
createSubmissionsFromEmails($create_submissions_from_emails_request): \Docuseal\Model\CreateSubmission200ResponseInner[]
```

Create submissions from emails

This API endpoint allows you to create submissions for a document template and send them to the specified email addresses. This is a simplified version of the POST /submissions API to be used with Zapier or other automation tools.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_submissions_from_emails_request = new \Docuseal\Model\CreateSubmissionsFromEmailsRequest(); // \Docuseal\Model\CreateSubmissionsFromEmailsRequest

try {
    $result = $apiInstance->createSubmissionsFromEmails($create_submissions_from_emails_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->createSubmissionsFromEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_submissions_from_emails_request** | [**\Docuseal\Model\CreateSubmissionsFromEmailsRequest**](../Model/CreateSubmissionsFromEmailsRequest.md)|  | |

### Return type

[**\Docuseal\Model\CreateSubmission200ResponseInner[]**](../Model/CreateSubmission200ResponseInner.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmission()`

```php
getSubmission($id): \Docuseal\Model\GetSubmission200Response
```

Get a submission

The API endpoint provides the functionality to retrieve information about a submission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1001; // int | The unique identifier of the submission.

try {
    $result = $apiInstance->getSubmission($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->getSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the submission. | |

### Return type

[**\Docuseal\Model\GetSubmission200Response**](../Model/GetSubmission200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmissions()`

```php
getSubmissions($template_id, $q, $template_folder, $limit, $after, $before): \Docuseal\Model\GetSubmissions200Response
```

List all submissions

The API endpoint provides the ability to retrieve a list of available submissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 56; // int | The template ID allows you to receive only the submissions created from that specific template.
$q = 'q_example'; // string | Filter submissions based on submitters name, email or phone partial match.
$template_folder = 'template_folder_example'; // string | Filter submissions by template folder name.
$limit = 56; // int | The number of submissions to return. Default value is 10. Maximum value is 100.
$after = 56; // int | The unique identifier of the submission to start the list from. It allows you to receive only submissions with an ID greater than the specified value. Pass ID value from the `pagination.next` response to load the next batch of submissions.
$before = 56; // int | The unique identifier of the submission that marks the end of the list. It allows you to receive only submissions with an ID less than the specified value.

try {
    $result = $apiInstance->getSubmissions($template_id, $q, $template_folder, $limit, $after, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->getSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| The template ID allows you to receive only the submissions created from that specific template. | [optional] |
| **q** | **string**| Filter submissions based on submitters name, email or phone partial match. | [optional] |
| **template_folder** | **string**| Filter submissions by template folder name. | [optional] |
| **limit** | **int**| The number of submissions to return. Default value is 10. Maximum value is 100. | [optional] |
| **after** | **int**| The unique identifier of the submission to start the list from. It allows you to receive only submissions with an ID greater than the specified value. Pass ID value from the &#x60;pagination.next&#x60; response to load the next batch of submissions. | [optional] |
| **before** | **int**| The unique identifier of the submission that marks the end of the list. It allows you to receive only submissions with an ID less than the specified value. | [optional] |

### Return type

[**\Docuseal\Model\GetSubmissions200Response**](../Model/GetSubmissions200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
