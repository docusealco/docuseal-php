# # CreateTemplateFromPdfRequestDocumentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the document. |
**file** | **string** | Base64-encoded content of the PDF file or downloadable file URL. |
**fields** | [**\Docuseal\Model\CreateTemplateFromPdfRequestDocumentsInnerFieldsInner[]**](CreateTemplateFromPdfRequestDocumentsInnerFieldsInner.md) | Fields are optional if you use {{...}} text tags to define fields in the document. | [optional]
**flatten** | **bool** | Remove PDF form fields from the document. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
