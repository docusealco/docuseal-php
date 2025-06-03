<?php

namespace Docuseal;

class Api
{
    private $http;
    private static $defaultConfig = [
        'open_timeout' => 60,
        'read_timeout' => 60
    ];

    public function __construct($key, $url = 'https://api.docuseal.com', $config = [])
    {
        $mergedConfig = array_merge(self::$defaultConfig, $config, ['key' => $key, 'url' => $url]);
        $this->http = new Http($mergedConfig);
    }

    public function listTemplates($params = [])
    {
        return $this->http->get('/templates', $params);
    }

    public function getTemplate($id, $params = [])
    {
        return $this->http->get("/templates/{$id}", $params);
    }

    public function createTemplateFromDocx($data)
    {
        return $this->http->post('/templates/docx', $data);
    }

    public function createTemplateFromHtml($data)
    {
        return $this->http->post('/templates/html', $data);
    }

    public function createTemplateFromPdf($data)
    {
        return $this->http->post('/templates/pdf', $data);
    }

    public function mergeTemplates($data)
    {
        return $this->http->post('/templates/merge', $data);
    }

    public function cloneTemplate($id, $data)
    {
        return $this->http->post("/templates/{$id}/clone", $data);
    }

    public function updateTemplate($id, $data)
    {
        return $this->http->put("/templates/{$id}", $data);
    }

    public function updateTemplateDocuments($id, $data)
    {
        return $this->http->put("/templates/{$id}/documents", $data);
    }

    public function archiveTemplate($id)
    {
        return $this->http->delete("/templates/{$id}");
    }

    public function permanentlyDeleteTemplate($id)
    {
        return $this->http->delete("/templates/{$id}", ['permanently' => true]);
    }

    public function listSubmissions($params = [])
    {
        return $this->http->get('/submissions', $params);
    }

    public function getSubmission($id, $params = [])
    {
        return $this->http->get("/submissions/{$id}", $params);
    }

    public function getSubmissionDocuments($id, $params = [])
    {
        return $this->http->get("/submissions/{$id}/documents", $params);
    }

    public function createSubmission($data)
    {
        return $this->http->post('/submissions/init', $data);
    }

    public function createSubmissionFromEmails($data)
    {
        return $this->http->post('/submissions/emails', $data);
    }

    public function createSubmissionFromPdf($data)
    {
        return $this->http->post('/submissions/pdf', $data);
    }

    public function createSubmissionFromHtml($data)
    {
        return $this->http->post('/submissions/html', $data);
    }

    public function archiveSubmission($id)
    {
        return $this->http->delete("/submissions/{$id}");
    }

    public function permanentlyDeleteSubmission($id)
    {
        return $this->http->delete("/submissions/{$id}", ['permanently' => true]);
    }

    public function listSubmitters($params = [])
    {
        return $this->http->get('/submitters', $params);
    }

    public function getSubmitter($id, $params = [])
    {
        return $this->http->get("/submitters/{$id}", $params);
    }

    public function updateSubmitter($id, $data)
    {
        return $this->http->put("/submitters/{$id}", $data);
    }
}
