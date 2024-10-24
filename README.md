# Docuseal

DocuSeal API specs

For more information, please visit [https://www.docuseal.co](https://www.docuseal.co).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/docusealco/docuseal-php.git"
    }
  ],
  "require": {
    "docusealco/docuseal-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Docuseal/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: AuthToken
$config = Docuseal\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to change the default host
// $config->setHost('https://api.docuseal.com')

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

## API Endpoints

All URIs are relative to *https://api.docuseal.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SubmissionsApi* | [**archiveSubmission**](docs/Api/SubmissionsApi.md#archivesubmission) | **DELETE** /submissions/{id} | Archive a submission
*SubmissionsApi* | [**createSubmission**](docs/Api/SubmissionsApi.md#createsubmission) | **POST** /submissions | Create a submission
*SubmissionsApi* | [**createSubmissionsFromEmails**](docs/Api/SubmissionsApi.md#createsubmissionsfromemails) | **POST** /submissions/emails | Create submissions from emails
*SubmissionsApi* | [**getSubmission**](docs/Api/SubmissionsApi.md#getsubmission) | **GET** /submissions/{id} | Get a submission
*SubmissionsApi* | [**getSubmissions**](docs/Api/SubmissionsApi.md#getsubmissions) | **GET** /submissions | List all submissions
*SubmittersApi* | [**getSubmitter**](docs/Api/SubmittersApi.md#getsubmitter) | **GET** /submitters/{id} | Get a submitter
*SubmittersApi* | [**getSubmitters**](docs/Api/SubmittersApi.md#getsubmitters) | **GET** /submitters | List all submitters
*SubmittersApi* | [**updateSubmitter**](docs/Api/SubmittersApi.md#updatesubmitter) | **PUT** /submitters/{id} | Update a submitter
*TemplatesApi* | [**addDocumentToTemplate**](docs/Api/TemplatesApi.md#adddocumenttotemplate) | **PUT** /templates/{id}/documents | Update template documents
*TemplatesApi* | [**archiveTemplate**](docs/Api/TemplatesApi.md#archivetemplate) | **DELETE** /templates/{id} | Archive a template
*TemplatesApi* | [**cloneTemplate**](docs/Api/TemplatesApi.md#clonetemplate) | **POST** /templates/{id}/clone | Clone a template
*TemplatesApi* | [**createTemplateFromDocx**](docs/Api/TemplatesApi.md#createtemplatefromdocx) | **POST** /templates/docx | Create a template from Word DOCX
*TemplatesApi* | [**createTemplateFromHtml**](docs/Api/TemplatesApi.md#createtemplatefromhtml) | **POST** /templates/html | Create a template from HTML
*TemplatesApi* | [**createTemplateFromPdf**](docs/Api/TemplatesApi.md#createtemplatefrompdf) | **POST** /templates/pdf | Create a template from existing PDF
*TemplatesApi* | [**getTemplate**](docs/Api/TemplatesApi.md#gettemplate) | **GET** /templates/{id} | Get a template
*TemplatesApi* | [**getTemplates**](docs/Api/TemplatesApi.md#gettemplates) | **GET** /templates | List all templates
*TemplatesApi* | [**mergeTemplate**](docs/Api/TemplatesApi.md#mergetemplate) | **POST** /templates/merge | Merge templates
*TemplatesApi* | [**updateTemplate**](docs/Api/TemplatesApi.md#updatetemplate) | **PUT** /templates/{id} | Update a template

## Models

- [AddDocumentToTemplateRequest](docs/Model/AddDocumentToTemplateRequest.md)
- [AddDocumentToTemplateRequestDocumentsInner](docs/Model/AddDocumentToTemplateRequestDocumentsInner.md)
- [ArchiveSubmission200Response](docs/Model/ArchiveSubmission200Response.md)
- [ArchiveTemplate200Response](docs/Model/ArchiveTemplate200Response.md)
- [CloneTemplateRequest](docs/Model/CloneTemplateRequest.md)
- [CreateSubmission200ResponseInner](docs/Model/CreateSubmission200ResponseInner.md)
- [CreateSubmission200ResponseInnerPreferences](docs/Model/CreateSubmission200ResponseInnerPreferences.md)
- [CreateSubmissionRequest](docs/Model/CreateSubmissionRequest.md)
- [CreateSubmissionRequestMessage](docs/Model/CreateSubmissionRequestMessage.md)
- [CreateSubmissionRequestSubmittersInner](docs/Model/CreateSubmissionRequestSubmittersInner.md)
- [CreateSubmissionRequestSubmittersInnerFieldsInner](docs/Model/CreateSubmissionRequestSubmittersInnerFieldsInner.md)
- [CreateSubmissionsFromEmailsRequest](docs/Model/CreateSubmissionsFromEmailsRequest.md)
- [CreateTemplateFromDocxRequest](docs/Model/CreateTemplateFromDocxRequest.md)
- [CreateTemplateFromDocxRequestDocumentsInner](docs/Model/CreateTemplateFromDocxRequestDocumentsInner.md)
- [CreateTemplateFromDocxRequestDocumentsInnerFieldsInner](docs/Model/CreateTemplateFromDocxRequestDocumentsInnerFieldsInner.md)
- [CreateTemplateFromDocxRequestDocumentsInnerFieldsInnerAreasInner](docs/Model/CreateTemplateFromDocxRequestDocumentsInnerFieldsInnerAreasInner.md)
- [CreateTemplateFromHtmlRequest](docs/Model/CreateTemplateFromHtmlRequest.md)
- [CreateTemplateFromHtmlRequestDocumentsInner](docs/Model/CreateTemplateFromHtmlRequestDocumentsInner.md)
- [CreateTemplateFromPdfRequest](docs/Model/CreateTemplateFromPdfRequest.md)
- [CreateTemplateFromPdfRequestDocumentsInner](docs/Model/CreateTemplateFromPdfRequestDocumentsInner.md)
- [CreateTemplateFromPdfRequestDocumentsInnerFieldsInner](docs/Model/CreateTemplateFromPdfRequestDocumentsInnerFieldsInner.md)
- [CreateTemplateFromPdfRequestDocumentsInnerFieldsInnerAreasInner](docs/Model/CreateTemplateFromPdfRequestDocumentsInnerFieldsInnerAreasInner.md)
- [GetSubmission200Response](docs/Model/GetSubmission200Response.md)
- [GetSubmission200ResponseSubmissionEventsInner](docs/Model/GetSubmission200ResponseSubmissionEventsInner.md)
- [GetSubmission200ResponseSubmittersInner](docs/Model/GetSubmission200ResponseSubmittersInner.md)
- [GetSubmission200ResponseSubmittersInnerDocumentsInner](docs/Model/GetSubmission200ResponseSubmittersInnerDocumentsInner.md)
- [GetSubmission200ResponseSubmittersInnerValuesInner](docs/Model/GetSubmission200ResponseSubmittersInnerValuesInner.md)
- [GetSubmissions200Response](docs/Model/GetSubmissions200Response.md)
- [GetSubmissions200ResponseDataInner](docs/Model/GetSubmissions200ResponseDataInner.md)
- [GetSubmissions200ResponseDataInnerCreatedByUser](docs/Model/GetSubmissions200ResponseDataInnerCreatedByUser.md)
- [GetSubmissions200ResponseDataInnerSubmittersInner](docs/Model/GetSubmissions200ResponseDataInnerSubmittersInner.md)
- [GetSubmissions200ResponseDataInnerTemplate](docs/Model/GetSubmissions200ResponseDataInnerTemplate.md)
- [GetSubmissions200ResponsePagination](docs/Model/GetSubmissions200ResponsePagination.md)
- [GetSubmitter200Response](docs/Model/GetSubmitter200Response.md)
- [GetSubmitter200ResponseTemplate](docs/Model/GetSubmitter200ResponseTemplate.md)
- [GetSubmitters200Response](docs/Model/GetSubmitters200Response.md)
- [GetSubmitters200ResponseDataInner](docs/Model/GetSubmitters200ResponseDataInner.md)
- [GetSubmitters200ResponseDataInnerSubmissionEventsInner](docs/Model/GetSubmitters200ResponseDataInnerSubmissionEventsInner.md)
- [GetSubmitters200ResponsePagination](docs/Model/GetSubmitters200ResponsePagination.md)
- [GetTemplates200Response](docs/Model/GetTemplates200Response.md)
- [GetTemplates200ResponseDataInner](docs/Model/GetTemplates200ResponseDataInner.md)
- [GetTemplates200ResponseDataInnerAuthor](docs/Model/GetTemplates200ResponseDataInnerAuthor.md)
- [GetTemplates200ResponseDataInnerDocumentsInner](docs/Model/GetTemplates200ResponseDataInnerDocumentsInner.md)
- [GetTemplates200ResponseDataInnerFieldsInner](docs/Model/GetTemplates200ResponseDataInnerFieldsInner.md)
- [GetTemplates200ResponseDataInnerFieldsInnerAreasInner](docs/Model/GetTemplates200ResponseDataInnerFieldsInnerAreasInner.md)
- [GetTemplates200ResponseDataInnerSchemaInner](docs/Model/GetTemplates200ResponseDataInnerSchemaInner.md)
- [GetTemplates200ResponseDataInnerSubmittersInner](docs/Model/GetTemplates200ResponseDataInnerSubmittersInner.md)
- [GetTemplates200ResponsePagination](docs/Model/GetTemplates200ResponsePagination.md)
- [MergeTemplateRequest](docs/Model/MergeTemplateRequest.md)
- [UpdateSubmitter200Response](docs/Model/UpdateSubmitter200Response.md)
- [UpdateSubmitterRequest](docs/Model/UpdateSubmitterRequest.md)
- [UpdateSubmitterRequestFieldsInner](docs/Model/UpdateSubmitterRequestFieldsInner.md)
- [UpdateTemplate200Response](docs/Model/UpdateTemplate200Response.md)
- [UpdateTemplateRequest](docs/Model/UpdateTemplateRequest.md)

## Authorization

Authentication schemes defined for the API:
### AuthToken

- **Type**: API key
- **API key parameter name**: X-Auth-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

admin@docuseal.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
