# Docuseal\TemplatesApi

All URIs are relative to https://api.docuseal.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDocumentToTemplate()**](TemplatesApi.md#addDocumentToTemplate) | **PUT** /templates/{id}/documents | Add new document to template |
| [**archiveTemplate()**](TemplatesApi.md#archiveTemplate) | **DELETE** /templates/{id} | Archive a template |
| [**cloneTemplate()**](TemplatesApi.md#cloneTemplate) | **POST** /templates/{id}/clone | Clone a template |
| [**createTemplateFromDocx()**](TemplatesApi.md#createTemplateFromDocx) | **POST** /templates/docx | Create a template from Word DOCX |
| [**createTemplateFromHtml()**](TemplatesApi.md#createTemplateFromHtml) | **POST** /templates/html | Create a template from HTML |
| [**createTemplateFromPdf()**](TemplatesApi.md#createTemplateFromPdf) | **POST** /templates/pdf | Create a template from existing PDF |
| [**getTemplate()**](TemplatesApi.md#getTemplate) | **GET** /templates/{id} | Get a template |
| [**getTemplates()**](TemplatesApi.md#getTemplates) | **GET** /templates | List all templates |
| [**updateTemplate()**](TemplatesApi.md#updateTemplate) | **PUT** /templates/{id} | Update a template |


## `addDocumentToTemplate()`

```php
addDocumentToTemplate($id, $add_document_to_template_request): \Docuseal\Model\AddDocumentToTemplate200Response
```

Add new document to template

The API endpoint allows to add a new document to the template with provided HTML content or PDF/DOCX file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1000001; // int | The unique identifier of the documents template.
$add_document_to_template_request = new \Docuseal\Model\AddDocumentToTemplateRequest(); // \Docuseal\Model\AddDocumentToTemplateRequest

try {
    $result = $apiInstance->addDocumentToTemplate($id, $add_document_to_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->addDocumentToTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the documents template. | |
| **add_document_to_template_request** | [**\Docuseal\Model\AddDocumentToTemplateRequest**](../Model/AddDocumentToTemplateRequest.md)|  | |

### Return type

[**\Docuseal\Model\AddDocumentToTemplate200Response**](../Model/AddDocumentToTemplate200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveTemplate()`

```php
archiveTemplate($id): \Docuseal\Model\ArchiveTemplate200Response
```

Archive a template

The API endpoint allows to archive a document template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1000001; // int | The unique identifier of the document template.

try {
    $result = $apiInstance->archiveTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->archiveTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the document template. | |

### Return type

[**\Docuseal\Model\ArchiveTemplate200Response**](../Model/ArchiveTemplate200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneTemplate()`

```php
cloneTemplate($id, $clone_template_request): \Docuseal\Model\CloneTemplate200Response
```

Clone a template

The API endpoint allows to clone existing template into a new template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1000001; // int | The unique identifier of the documents template.
$clone_template_request = new \Docuseal\Model\CloneTemplateRequest(); // \Docuseal\Model\CloneTemplateRequest

try {
    $result = $apiInstance->cloneTemplate($id, $clone_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->cloneTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the documents template. | |
| **clone_template_request** | [**\Docuseal\Model\CloneTemplateRequest**](../Model/CloneTemplateRequest.md)|  | |

### Return type

[**\Docuseal\Model\CloneTemplate200Response**](../Model/CloneTemplate200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTemplateFromDocx()`

```php
createTemplateFromDocx($create_template_from_docx_request): \Docuseal\Model\CloneTemplate200Response
```

Create a template from Word DOCX

The API endpoint provides the functionality to create a fillable document template for existing Microsoft Word document. Use <code>{{Field Name;role=Signer1;type=date}}</code> text tags to define fillable fields in the document. See <a href=\"https://www.docuseal.co/examples/fieldtags.docx\" target=\"_blank\" class=\"link font-bold\" >https://www.docuseal.co/examples/fieldtags.docx</a> for more text tag formats. Or specify the exact pixel coordinates of the document fields using `fields` param.<br><b>Related Guides</b><br><a href=\"https://www.docuseal.co/guides/use-embedded-text-field-tags-in-the-pdf-to-create-a-fillable-form\" class=\"link\">Use embedded text field tags to create a fillable form</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_template_from_docx_request = new \Docuseal\Model\CreateTemplateFromDocxRequest(); // \Docuseal\Model\CreateTemplateFromDocxRequest

try {
    $result = $apiInstance->createTemplateFromDocx($create_template_from_docx_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createTemplateFromDocx: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_template_from_docx_request** | [**\Docuseal\Model\CreateTemplateFromDocxRequest**](../Model/CreateTemplateFromDocxRequest.md)|  | |

### Return type

[**\Docuseal\Model\CloneTemplate200Response**](../Model/CloneTemplate200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTemplateFromHtml()`

```php
createTemplateFromHtml($create_template_from_html_request): \Docuseal\Model\CloneTemplate200Response
```

Create a template from HTML

The API endpoint provides the functionality to seamlessly generate a PDF document template by utilizing the provided HTML content while incorporating pre-defined fields.<br><b>Related Guides</b><br><a href=\"https://www.docuseal.co/guides/create-pdf-document-fillable-form-with-html-api\" class=\"link\">Create PDF document fillable form with HTML</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_template_from_html_request = new \Docuseal\Model\CreateTemplateFromHtmlRequest(); // \Docuseal\Model\CreateTemplateFromHtmlRequest

try {
    $result = $apiInstance->createTemplateFromHtml($create_template_from_html_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createTemplateFromHtml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_template_from_html_request** | [**\Docuseal\Model\CreateTemplateFromHtmlRequest**](../Model/CreateTemplateFromHtmlRequest.md)|  | |

### Return type

[**\Docuseal\Model\CloneTemplate200Response**](../Model/CloneTemplate200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTemplateFromPdf()`

```php
createTemplateFromPdf($create_template_from_pdf_request): \Docuseal\Model\CloneTemplate200Response
```

Create a template from existing PDF

The API endpoint provides the functionality to create a fillable document template for existing PDF file. Use <code>{{Field Name;role=Signer1;type=date}}</code> text tags to define fillable fields in the document. See <a href=\"https://www.docuseal.co/examples/fieldtags.pdf\" target=\"_blank\" class=\"link font-bold\">https://www.docuseal.co/examples/fieldtags.pdf</a> for more text tag formats. Or specify the exact pixel coordinates of the document fields using `fields` param.<br><b>Related Guides</b><br><a href=\"https://www.docuseal.co/guides/use-embedded-text-field-tags-in-the-pdf-to-create-a-fillable-form\" class=\"link\">Use embedded text field tags to create a fillable form</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_template_from_pdf_request = new \Docuseal\Model\CreateTemplateFromPdfRequest(); // \Docuseal\Model\CreateTemplateFromPdfRequest

try {
    $result = $apiInstance->createTemplateFromPdf($create_template_from_pdf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createTemplateFromPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_template_from_pdf_request** | [**\Docuseal\Model\CreateTemplateFromPdfRequest**](../Model/CreateTemplateFromPdfRequest.md)|  | |

### Return type

[**\Docuseal\Model\CloneTemplate200Response**](../Model/CloneTemplate200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplate()`

```php
getTemplate($id): \Docuseal\Model\GetTemplates200ResponseDataInner
```

Get a template

The API endpoint provides the functionality to retrieve information about a document template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1000001; // int | The unique identifier of the document template.

try {
    $result = $apiInstance->getTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the document template. | |

### Return type

[**\Docuseal\Model\GetTemplates200ResponseDataInner**](../Model/GetTemplates200ResponseDataInner.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplates()`

```php
getTemplates($q, $external_id, $folder, $archived, $limit, $before, $after): \Docuseal\Model\GetTemplates200Response
```

List all templates

The API endpoint provides the ability to retrieve a list of available document templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Filter templates based on the name partial match.
$external_id = 'external_id_example'; // string | The unique applications-specific identifier provided for the template via API or Embedded template form builder. Allows to receive only templates with your specified external id.
$folder = 'folder_example'; // string | Filter templates by folder name.
$archived = True; // bool | Get only archived templates instead of active ones.
$limit = 56; // int | The number of templates to return. Default value is 10. Maximum value is 100.
$before = 56; // int | The unique identifier of the template to end the list with. Allows to receive only templates with id less than the specified value.
$after = 56; // int | The unique identifier of the template to start the list from. Allows to receive only templates with id greater than the specified value.

try {
    $result = $apiInstance->getTemplates($q, $external_id, $folder, $archived, $limit, $before, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Filter templates based on the name partial match. | [optional] |
| **external_id** | **string**| The unique applications-specific identifier provided for the template via API or Embedded template form builder. Allows to receive only templates with your specified external id. | [optional] |
| **folder** | **string**| Filter templates by folder name. | [optional] |
| **archived** | **bool**| Get only archived templates instead of active ones. | [optional] |
| **limit** | **int**| The number of templates to return. Default value is 10. Maximum value is 100. | [optional] |
| **before** | **int**| The unique identifier of the template to end the list with. Allows to receive only templates with id less than the specified value. | [optional] |
| **after** | **int**| The unique identifier of the template to start the list from. Allows to receive only templates with id greater than the specified value. | [optional] |

### Return type

[**\Docuseal\Model\GetTemplates200Response**](../Model/GetTemplates200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplate()`

```php
updateTemplate($id, $update_template_request): \Docuseal\Model\UpdateTemplate200Response
```

Update a template

The API endpoint provides the functionality to move a document template to a different folder and update the name of the template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Docuseal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new Docuseal\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1000001; // int | The unique identifier of the document template.
$update_template_request = new \Docuseal\Model\UpdateTemplateRequest(); // \Docuseal\Model\UpdateTemplateRequest

try {
    $result = $apiInstance->updateTemplate($id, $update_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the document template. | |
| **update_template_request** | [**\Docuseal\Model\UpdateTemplateRequest**](../Model/UpdateTemplateRequest.md)|  | |

### Return type

[**\Docuseal\Model\UpdateTemplate200Response**](../Model/UpdateTemplate200Response.md)

### Authorization

[AuthToken](../../README.md#AuthToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
