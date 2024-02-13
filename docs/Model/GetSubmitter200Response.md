# # GetSubmitter200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Submitter unique ID number. | [optional]
**uuid** | **string** | Submitter UUID. | [optional]
**email** | **string** | The email address of the submitter. | [optional]
**slug** | **string** | Unique key to be used in the form signing link and embedded form. | [optional]
**sent_at** | **string** | The date and time when the signing request was sent to the submitter. | [optional]
**opened_at** | **string** | The date and time when the submitter opened the signing form. | [optional]
**completed_at** | **string** | The date and time when the submitter completed the signing form. | [optional]
**created_at** | **string** | The date and time when the submitter was created. | [optional]
**updated_at** | **string** | The date and time when the submitter was last updated. | [optional]
**name** | **string** | Submitter name. | [optional]
**phone** | **string** | Submitter phone number. | [optional]
**submission_events** | [**\Docuseal\Model\GetSubmission200ResponseSubmissionEventsInner[]**](GetSubmission200ResponseSubmissionEventsInner.md) |  | [optional]
**values** | [**\Docuseal\Model\GetSubmission200ResponseSubmittersInnerValuesInner[]**](GetSubmission200ResponseSubmittersInnerValuesInner.md) | An array of pre-filled values for the submission. | [optional]
**documents** | [**\Docuseal\Model\GetSubmission200ResponseSubmittersInnerDocumentsInner[]**](GetSubmission200ResponseSubmittersInnerDocumentsInner.md) | An array of documents that the submitter has to sign. | [optional]
**role** | **string** | The role of the submitter in the signing process. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
