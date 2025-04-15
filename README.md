# DocuSeal PHP

The DocuSeal PHP library provides seamless integration with the DocuSeal API, allowing developers to interact with DocuSeal's electronic signature and document management features directly within PHP applications. This library is designed to simplify API interactions and provide tools for efficient implementation.

## Documentation

Detailed documentation is available at [DocuSeal API Docs](https://www.docuseal.com/docs/api?lang=php).

## Requirements

PHP 5.6.0 and later.

## Installation

To install using [Composer](http://getcomposer.org/):

```sh
composer require docusealco/docuseal-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once 'vendor/autoload.php';
```

## Manual Installation

Download the latest docuseal-php package and then, include the init.php file:

```php
require_once '/path/to/docuseal-php/init.php';
```

## Usage

### Configuration

Set up the library with your DocuSeal API key based on your deployment. Retrieve your API key from the appropriate location:

#### Global Cloud

API keys for the global cloud can be obtained from your [Global DocuSeal Console](https://console.docuseal.com/api).

```ts
$docuseal = new \Docuseal\Api('API_KEY');
```

#### EU Cloud

API keys for the EU cloud can be obtained from your [EU DocuSeal Console](https://console.docuseal.eu/api).

```ts
$docuseal = new \Docuseal\Api('API_KEY', 'https://api.docuseal.eu');
```

#### On-Premises

For on-premises installations, API keys can be retrieved from the API settings page of your deployed application, e.g., https://yourdocusealapp.com/settings/api.

```ts
$docuseal = new \Docuseal\Api('API_KEY', 'https://yourdocusealapp.com/api');
```

## API Methods

### listSubmissions(params)

[Documentation](https://www.docuseal.com/docs/api?lang=php#list-all-submissions)

Provides the ability to retrieve a list of available submissions.


```php
$docuseal->listSubmissions(['limit' => 10]);
```

### getSubmission(id)

[Documentation](https://www.docuseal.com/docs/api?lang=php#get-a-submission)

Provides the functionality to retrieve information about a submission.


```php
$docuseal->getSubmission(1001);
```

### getSubmissionDocuments(id)

[Documentation](https://www.docuseal.com/docs/api?lang=php#get-submission-documents)

This endpoint returns a list of partially filled documents for a submission. If the submission has been completed, the final signed documents are returned.


```php
$docuseal->getSubmissionDocuments(1001);
```

### createSubmission(data)

[Documentation](https://www.docuseal.com/docs/api?lang=php#create-a-submission)

This API endpoint allows you to create signature requests (submissions) for a document template and send them to the specified submitters (signers).

**Related Guides:**<br>
[Send documents for signature via API](https://www.docuseal.com/guides/send-documents-for-signature-via-api)
[Pre-fill PDF document form fields with API](https://www.docuseal.com/guides/pre-fill-pdf-document-form-fields-with-api)


```php
$docuseal->createSubmission([
  'template_id' => 1000001,
  'send_email' => true,
  'submitters' => [
    [
      'role' => 'First Party',
      'email' => 'john.doe@example.com'
    ]
  ]
]);
```

### createSubmissionFromEmails(data)

[Documentation](https://www.docuseal.com/docs/api?lang=php#create-submissions-from-emails)

This API endpoint allows you to create submissions for a document template and send them to the specified email addresses. This is a simplified version of the POST /submissions API to be used with Zapier or other automation tools.


```php
$docuseal->createSubmissionFromEmails([
  'template_id' => 1000001,
  'emails' => 'hi@docuseal.com, example@docuseal.com'
]);
```

### archiveSubmission(id)

[Documentation](https://www.docuseal.com/docs/api?lang=php#archive-a-submission)

Allows you to archive a submission.


```php
$docuseal->archiveSubmission(1001);
```

### listSubmitters(params)

[Documentation](https://www.docuseal.com/docs/api?lang=php#list-all-submitters)

Provides the ability to retrieve a list of submitters.


```php
$docuseal->listSubmitters(['limit' => 10]);
```

### getSubmitter(id)

[Documentation](https://www.docuseal.com/docs/api?lang=php#get-a-submitter)

Provides the functionality to retrieve information about a submitter.


```php
$docuseal->getSubmitter(500001);
```

### updateSubmitter(id, data)

[Documentation](https://www.docuseal.com/docs/api?lang=php#update-a-submitter)

Allows you to update submitter details, pre-fill or update field values and re-send emails.

**Related Guides:**<br>
[Automatically sign documents via API](https://www.docuseal.com/guides/pre-fill-pdf-document-form-fields-with-api#automatically_sign_documents_via_api)


```php
$docuseal->updateSubmitter(500001, [
  'email' => 'john.doe@example.com',
  'fields' => [
    [
      'name' => 'First Name',
      'default_value' => 'Acme'
    ]
  ]
]);
```

### listTemplates(params)

[Documentation](https://www.docuseal.com/docs/api?lang=php#list-all-templates)

Provides the ability to retrieve a list of available document templates.


```php
$docuseal->listTemplates(['limit' => 10]);
```

### getTemplate(id)

[Documentation](https://www.docuseal.com/docs/api?lang=php#get-a-template)

Provides the functionality to retrieve information about a document template.


```php
$docuseal->getTemplate(1000001);
```

### createTemplateFromDocx(data)

[Documentation](https://www.docuseal.com/docs/api?lang=php#create-a-template-from-word-docx)

Provides the functionality to create a fillable document template for existing Microsoft Word document. Use `{{Field Name;role=Signer1;type=date}}` text tags to define fillable fields in the document. See [https://www.docuseal.com/examples/fieldtags.docx](https://www.docuseal.com/examples/fieldtags.docx) for more text tag formats. Or specify the exact pixel coordinates of the document fields using `fields` param.

**Related Guides:**<br>
[Use embedded text field tags to create a fillable form](https://www.docuseal.com/guides/use-embedded-text-field-tags-in-the-pdf-to-create-a-fillable-form)


```php
$docuseal->createTemplateFromDocx([
  'name' => 'Test DOCX',
  'documents' => [
    [
      'name' => 'string',
      'file' => 'base64'
    ]
  ]
]);
```

### createTemplateFromHtml(data)

[Documentation](https://www.docuseal.com/docs/api?lang=php#create-a-template-from-html)

Provides the functionality to seamlessly generate a PDF document template by utilizing the provided HTML content while incorporating pre-defined fields.

**Related Guides:**<br>
[Create PDF document fillable form with HTML](https://www.docuseal.com/guides/create-pdf-document-fillable-form-with-html-api)


```php
$docuseal->createTemplateFromHtml([
  'html' => '<p>Lorem Ipsum is simply dummy text of the
<text-field
  name="Industry"
  role="First Party"
  required="false"
  style="width: 80px; height: 16px; display: inline-block; margin-bottom: -4px">
</text-field>
and typesetting industry</p>
',
  'name' => 'Test Template'
]);
```

### mergeTemplates(data)

[Documentation](https://www.docuseal.com/docs/api?lang=php#merge-templates)

Allows you to merge multiple templates with documents and fields into a new combined template.


```php
$docuseal->mergeTemplates([
  'template_ids' => [
    321,
    432
  ],
  'name' => 'Merged Template'
]);
```

### createTemplateFromPdf(data)

[Documentation](https://www.docuseal.com/docs/api?lang=php#create-a-template-from-existing-pdf)

Provides the functionality to create a fillable document template for existing PDF file. Use `{{Field Name;role=Signer1;type=date}}` text tags to define fillable fields in the document. See [https://www.docuseal.com/examples/fieldtags.pdf](https://www.docuseal.com/examples/fieldtags.pdf) for more text tag formats. Or specify the exact pixel coordinates of the document fields using `fields` param.

**Related Guides:**<br>
[Use embedded text field tags to create a fillable form](https://www.docuseal.com/guides/use-embedded-text-field-tags-in-the-pdf-to-create-a-fillable-form)


```php
$docuseal->createTemplateFromPdf([
  'name' => 'Test PDF',
  'documents' => [
    [
      'name' => 'string',
      'file' => 'base64',
      'fields' => [
        [
          'name' => 'string',
          'areas' => [
            [
              'x' => 0,
              'y' => 0,
              'w' => 0,
              'h' => 0,
              'page' => 1
            ]
          ]
        ]
      ]
    ]
  ]
]);
```

### cloneTemplate(id, data)

[Documentation](https://www.docuseal.com/docs/api?lang=php#clone-a-template)

Allows you to clone existing template into a new template.


```php
$docuseal->cloneTemplate(1000001, [
  'name' => 'Cloned Template'
]);
```

### updateTemplate(id, data)

[Documentation](https://www.docuseal.com/docs/api?lang=php#update-a-template)

Provides the functionality to move a document template to a different folder and update the name of the template.


```php
$docuseal->updateTemplate(1000001, [
  'name' => 'New Document Name',
  'folder_name' => 'New Folder'
]);
```

### updateTemplateDocuments(id, data)

[Documentation](https://www.docuseal.com/docs/api?lang=php#update-template-documents)

Allows you to add, remove or replace documents in the template with provided PDF/DOCX file or HTML content.


```php
$docuseal->updateTemplateDocuments(1000001, [
  'documents' => [
    [
      'file' => 'string'
    ]
  ]
]);
```

### archiveTemplate(id)

[Documentation](https://www.docuseal.com/docs/api?lang=php#archive-a-template)

Allows you to archive a document template.


```php
$docuseal->archiveTemplate(1000001);
```


### Configuring Timeouts

Set timeouts to avoid hanging requests:

```ts
$docuseal = new \Docuseal\Api('API_KEY', 'https://api.docuseal.com', [
  'read_timeout' => 60,
  'open_timeout' => 60,
]);
```

## Support

For feature requests or bug reports, visit our [GitHub Issues page](https://github.com/docusealco/docuseal-php/issues).


## License

The gem is available as open source under the terms of the [MIT License](https://opensource.org/licenses/MIT).
