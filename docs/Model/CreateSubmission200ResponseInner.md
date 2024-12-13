# # CreateSubmission200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Submitter unique ID number. | [optional]
**submission_id** | **int** | Submission UUID. | [optional]
**uuid** | **string** | Submitter UUID. | [optional]
**email** | **string** | The email address of the submitter. | [optional]
**slug** | **string** | Unique key to be used in the signing form URL. | [optional]
**values** | [**\Docuseal\Model\CreateSubmission200ResponseInnerValuesInner[]**](CreateSubmission200ResponseInnerValuesInner.md) | An array of pre-filled values for the submission. | [optional]
**metadata** | **object** |  | [optional]
**ua** | **string** | User agent string of the submitter. | [optional]
**ip** | **string** | IP address of the submitter. | [optional]
**sent_at** | **string** | The date and time when the signing request was sent to the submitter. | [optional]
**opened_at** | **string** | The date and time when the submitter opened the signing form. | [optional]
**completed_at** | **string** | The date and time when the submitter completed the signing form. | [optional]
**declined_at** | **string** | The date and time when the submitter declined the signing form. | [optional]
**created_at** | **string** | The date and time when the submitter was created. | [optional]
**updated_at** | **string** | The date and time when the submitter was last updated. | [optional]
**name** | **string** | The name of the submitter. | [optional]
**phone** | **string** | The phone number of the submitter. | [optional]
**external_id** | **string** | Your application-specific unique string key to identify this submitter within your app. | [optional]
**preferences** | [**\Docuseal\Model\CreateSubmission200ResponseInnerPreferences**](CreateSubmission200ResponseInnerPreferences.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
