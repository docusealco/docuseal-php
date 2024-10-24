# # CreateSubmissionRequestSubmittersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the submitter. | [optional]
**role** | **string** | The role name or title of the submitter. | [optional]
**email** | **string** | The email address of the submitter. |
**phone** | **string** | The phone number of the submitter, formatted according to the E.164 standard. | [optional]
**values** | **object** | An object with pre-filled values for the submission. Use field names for keys of the object. For more configurations see &#x60;fields&#x60; param. | [optional]
**external_id** | **string** | Your application-specific unique string key to identify this submitter within your app. | [optional]
**completed** | **bool** | Pass &#x60;true&#x60; to mark submitter as completed and auto-signed via API. | [optional]
**metadata** | **object** | Metadata object with additional submitter information. | [optional]
**send_email** | **bool** | Set &#x60;false&#x60; to disable signature request emails sending. | [optional] [default to true]
**send_sms** | **bool** | Set &#x60;true&#x60; to send signature request via phone number and SMS. | [optional] [default to false]
**completed_redirect_url** | **string** | Submitter specific URL to redirect to after the submission completion. | [optional]
**fields** | [**\Docuseal\Model\CreateSubmissionRequestSubmittersInnerFieldsInner[]**](CreateSubmissionRequestSubmittersInnerFieldsInner.md) | A list of configurations for template document form fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
