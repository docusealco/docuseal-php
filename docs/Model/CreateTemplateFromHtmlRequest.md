# # CreateTemplateFromHtmlRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**html** | **string** | HTML template with field tags. |
**html_header** | **string** | HTML template of the header to be displayed on every page. | [optional]
**html_footer** | **string** | HTML template of the footer to be displayed on every page. | [optional]
**name** | **string** | Template name. Random uuid will be assigned when not specified. | [optional]
**size** | **string** | Page size. Letter 8.5 x 11 will be assigned when not specified. | [optional] [default to 'Letter']
**external_id** | **string** | Your application-specific unique string key to identify this template within your app. Existing template with specified &#x60;external_id&#x60; will be updated with a new HTML. | [optional]
**folder_name** | **string** | The folder&#39;s name to which the template should be created. | [optional]
**documents** | [**\Docuseal\Model\CreateTemplateFromHtmlRequestDocumentsInner[]**](CreateTemplateFromHtmlRequestDocumentsInner.md) | The list of documents built from HTML. Can be used to create a template with multiple documents. Leave &#x60;documents&#x60; param empty when using a top-level &#x60;html&#x60; param for a template with a single document. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
