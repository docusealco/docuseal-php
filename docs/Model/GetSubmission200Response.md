# # GetSubmission200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Submission unique ID number. | [optional]
**source** | **string** | The source of the submission. | [optional]
**submitters_order** | **string** | The order of submitters. | [optional]
**audit_log_url** | **string** | Audit log file URL. | [optional]
**created_at** | **string** | The date and time when the submission was created. | [optional]
**updated_at** | **string** | The date and time when the submission was last updated. | [optional]
**archived_at** | **string** | The date and time when the submission was archived. | [optional]
**submitters** | [**\Docuseal\Model\GetSubmission200ResponseSubmittersInner[]**](GetSubmission200ResponseSubmittersInner.md) | The list of submitters. | [optional]
**template** | [**\Docuseal\Model\GetSubmissions200ResponseDataInnerTemplate**](GetSubmissions200ResponseDataInnerTemplate.md) |  | [optional]
**created_by_user** | [**\Docuseal\Model\GetSubmissions200ResponseDataInnerCreatedByUser**](GetSubmissions200ResponseDataInnerCreatedByUser.md) |  | [optional]
**submission_events** | [**\Docuseal\Model\GetSubmission200ResponseSubmissionEventsInner[]**](GetSubmission200ResponseSubmissionEventsInner.md) |  | [optional]
**documents** | [**\Docuseal\Model\GetSubmission200ResponseSubmittersInnerDocumentsInner[]**](GetSubmission200ResponseSubmittersInnerDocumentsInner.md) |  | [optional]
**status** | **string** | The status of the submission. | [optional]
**completed_at** | **string** | The date and time when the submission was fully completed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
