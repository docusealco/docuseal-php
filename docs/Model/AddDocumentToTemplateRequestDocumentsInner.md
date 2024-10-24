# # AddDocumentToTemplateRequestDocumentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Document name. Random uuid will be assigned when not specified. | [optional]
**file** | **string** | Base64-encoded content of the PDF or DOCX file or downloadable file URL. Leave it empty if you create a new document using HTML param. | [optional]
**html** | **string** | HTML template with field tags. Leave it empty if you add a document via PDF or DOCX base64 encoded file param or URL. | [optional]
**position** | **int** | Position of the document. By default will be added as the last document in the template. | [optional]
**replace** | **bool** | Set to &#x60;true&#x60; to replace existing document with a new file at &#x60;position&#x60;. Existing document fields will be transferred to the new document if it doesn&#39;t contain any fields | [optional] [default to false]
**remove** | **bool** | Set to &#x60;true&#x60; to remove existing document at given &#x60;position&#x60; or with given &#x60;name&#x60;. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
