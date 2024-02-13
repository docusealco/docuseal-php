# # CreateSubmissionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **int** | The unique identifier of the template. |
**send_email** | **bool** | Set &#x60;false&#x60; to disable signature request emails sending. | [optional] [default to true]
**send_sms** | **bool** | Set &#x60;true&#x60; to send signature request via phone number and SMS. | [optional] [default to false]
**order** | **string** | Pass &#39;random&#39; to send signature request emails to all parties right away. The order is &#39;preserved&#39; by default so the second party will receive a signature request email only after the document is signed by the first party. | [optional] [default to 'preserved']
**completed_redirect_url** | **string** | Specify URL to redirect to after the submission completion. | [optional]
**bcc_completed** | **string** | Specify BCC address to send signed documents to after the completion. | [optional]
**message** | [**\Docuseal\Model\CreateSubmissionRequestMessage**](CreateSubmissionRequestMessage.md) |  | [optional]
**submitters** | [**\Docuseal\Model\CreateSubmissionRequestSubmittersInner[]**](CreateSubmissionRequestSubmittersInner.md) | The list of submitters for the submission. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
