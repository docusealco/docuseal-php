# # GetSubmitter200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Submitter unique ID number. | [optional]
**submission_id** | **int** | Submission unique ID number. | [optional]
**uuid** | **string** | Submitter UUID. | [optional]
**email** | **string** | The email address of the submitter. | [optional]
**slug** | **string** | Unique key to be used in the form signing link and embedded form. | [optional]
**sent_at** | **string** | The date and time when the signing request was sent to the submitter. | [optional]
**opened_at** | **string** | The date and time when the submitter opened the signing form. | [optional]
**completed_at** | **string** | The date and time when the submitter completed the signing form. | [optional]
**declined_at** | **string** | The date and time when the submitter declined the signing form. | [optional]
**created_at** | **string** | The date and time when the submitter was created. | [optional]
**updated_at** | **string** | The date and time when the submitter was last updated. | [optional]
**name** | **string** | Submitter name. | [optional]
**phone** | **string** | Submitter phone number. | [optional]
**status** | **string** | Submitter&#39;s submission status. | [optional]
**external_id** | **string** | The unique applications-specific identifier | [optional]
**metadata** | **object** | Metadata object with additional submitter information. | [optional]
**preferences** | **object** | Submitter preferences. | [optional]
**template** | [**\Docuseal\Model\GetSubmitter200ResponseTemplate**](GetSubmitter200ResponseTemplate.md) |  | [optional]
**submission_events** | [**\Docuseal\Model\GetSubmission200ResponseSubmissionEventsInner[]**](GetSubmission200ResponseSubmissionEventsInner.md) |  | [optional]
**values** | [**\Docuseal\Model\CreateSubmission200ResponseInnerValuesInner[]**](CreateSubmission200ResponseInnerValuesInner.md) | An array of pre-filled values for the submission. | [optional]
**documents** | [**\Docuseal\Model\GetSubmission200ResponseSubmittersInnerDocumentsInner[]**](GetSubmission200ResponseSubmittersInnerDocumentsInner.md) | An array of documents that the submitter has to sign. | [optional]
**role** | **string** | The role of the submitter in the signing process. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
