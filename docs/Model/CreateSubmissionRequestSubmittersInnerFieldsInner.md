# # CreateSubmissionRequestSubmittersInnerFieldsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Document template field name. |
**description** | **string** | Description of the field to be displayed on the signing form. Can accept markdown. | [optional]
**default_value** | **string** | Default value of the field. Use base64 encoded file or a public URL to the image file to set default signature or image fields. | [optional]
**validation_pattern** | **string** | HTML field validation pattern string based on https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/pattern specification. | [optional]
**invalid_message** | **string** | A custom message to display on pattern validation failure. | [optional]
**readonly** | **bool** | Set &#x60;true&#x60; to make it impossible for the submitter to edit predefined field value. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
