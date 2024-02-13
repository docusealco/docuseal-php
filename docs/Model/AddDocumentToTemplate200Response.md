# # AddDocumentToTemplate200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Template unique ID number. | [optional]
**slug** | **string** | Unique slug of the document template. | [optional]
**schema** | [**\Docuseal\Model\GetTemplates200ResponseDataInnerSchemaInner[]**](GetTemplates200ResponseDataInnerSchemaInner.md) | List of documents attached to the template. | [optional]
**fields** | [**\Docuseal\Model\GetTemplates200ResponseDataInnerFieldsInner[]**](GetTemplates200ResponseDataInnerFieldsInner.md) | List of fields to be filled in the template. | [optional]
**submitters** | [**\Docuseal\Model\GetTemplates200ResponseDataInnerSubmittersInner[]**](GetTemplates200ResponseDataInnerSubmittersInner.md) |  | [optional]
**author_id** | **int** | Unique identifier of the author of the template. | [optional]
**account_id** | **int** | Unique identifier of the account of the template. | [optional]
**archived_at** | **string** | Date and time when the template was archived. | [optional]
**created_at** | **string** | Date and time when the template was created. | [optional]
**updated_at** | **string** | Date and time when the template was updated. | [optional]
**source** | **string** | Source of the template. | [optional]
**folder_id** | **int** | Unique identifier of the folder where the template is placed. | [optional]
**author** | [**\Docuseal\Model\AddDocumentToTemplate200ResponseAuthor**](AddDocumentToTemplate200ResponseAuthor.md) |  | [optional]
**documents** | [**\Docuseal\Model\AddDocumentToTemplate200ResponseDocumentsInner[]**](AddDocumentToTemplate200ResponseDocumentsInner.md) | List of documents attached to the template. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
