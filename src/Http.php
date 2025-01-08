<?php

namespace Docuseal;

use Exception;

class Http {
    private $config;
    private static $BODY_METHODS = ['POST', 'PUT'];

    public function __construct($config) {
        $this->config = $config;
    }

    public function get($path, $params = []) {
        return $this->sendRequest('GET', $path, $params);
    }

    public function post($path, $body = []) {
        return $this->sendRequest('POST', $path, [], $body);
    }

    public function put($path, $body = []) {
        return $this->sendRequest('PUT', $path, [], $body);
    }

    public function delete($path, $params = []) {
        return $this->sendRequest('DELETE', $path, $params);
    }

    private function sendRequest($method, $path, $params = [], $body = []) {
        $url = $this->config['url'] . $path . $this->toQuery($params);
        $curl = curl_init($url);

        $headers = $this->headers();

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_TIMEOUT, $this->config['read_timeout']);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $this->config['open_timeout']);

        if (in_array($method, self::$BODY_METHODS)) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));
        } elseif ($method !== 'GET') {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        }

        $response = curl_exec($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        return $this->handleResponse($response, $http_code);
    }

    private function headers() {
        return [
            'X-Auth-Token: ' . $this->config['key'],
            'Content-Type: application/json',
            "User-Agent: DocuSeal PHP v" . Docuseal::VERSION
        ];
    }

    private function toQuery($params) {
        if (empty($params)) {
            return '';
        }
        return '?' . http_build_query($params);
    }

    private function handleResponse($response, $http_code) {
        if ($http_code >= 200 && $http_code < 300) {
            return json_decode($response, true);
        } else {
            throw new Exception("API Error $http_code: $response");
        }
    }
}
