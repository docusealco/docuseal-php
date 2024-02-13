# # UpdateSubmitterRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the submitter. | [optional]
**email** | **string** | The email address of the submitter. | [optional]
**phone** | **string** | The phone number of the submitter, formatted according to the E.164 standard. | [optional]
**values** | **object** | An object with pre-filled values for the submission. Use field names for keys of the object. For more configurations see &#x60;fields&#x60; param. | [optional]
**external_id** | **string** | Your application-specific unique string key to identify this submitter within your app. | [optional]
**send_email** | **bool** | Set &#x60;true&#x60; to re-send signature request emails. | [optional]
**send_sms** | **bool** | Set &#x60;true&#x60; to re-send signature request via phone number SMS. | [optional] [default to false]
**completed** | **bool** | Pass &#x60;true&#x60; to mark submitter as completed and auto-signed via API. | [optional]
**message** | [**\Docuseal\Model\CreateSubmissionRequestMessage**](CreateSubmissionRequestMessage.md) |  | [optional]
**fields** | [**\Docuseal\Model\CreateSubmissionRequestSubmittersInnerFieldsInner[]**](CreateSubmissionRequestSubmittersInnerFieldsInner.md) | A list of configurations for template document form fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
