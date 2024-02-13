# # AddDocumentToTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Template name. Random uuid will be assigned when not specified. | [optional]
**file** | **string** | Base64-encoded content of the PDF or DOCX file. Leave it empty if you create a new document using HTML param. | [optional]
**html** | **string** | HTML template with field tags. Leave it empy if you add a document via PDF or DOCX base64 encoded file param. | [optional]
**position** | **int** | Position of the document. By default will be added as the last document in the template. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
