<?php

namespace Docuseal;

class DocusealHelper
{
    /** Default allowed time difference, in seconds. */
    const SIGNATURE_TOLERANCE = 300;

    /**
     * Verifies a webhook signature in the "timestamp.signature" format.
     *
     * @param string $secret          Webhook secret from your configuration
     * @param string $signatureHeader Value of the X-Docuseal-Signature header
     * @param string $payload         Raw request body (must not be modified or re-encoded)
     * @param int    $tolerance       Allowed time difference, in seconds
     *
     * @return bool True if the signature is valid, false otherwise
     */
    public static function verifyWebhookSignature(
        $secret,
        $signatureHeader,
        $payload,
        $tolerance = self::SIGNATURE_TOLERANCE
    ) {
        // Reject missing or invalid input. An empty secret must never pass the check.
        if (!is_string($secret) || $secret === ''
            || !is_string($signatureHeader) || $signatureHeader === ''
            || !is_string($payload)
        ) {
            return false;
        }

        // The header has the format "<timestamp>.<signature>".
        $parts = explode('.', $signatureHeader, 2);

        if (count($parts) !== 2) {
            return false;
        }

        list($timestamp, $signature) = $parts;

        // ctype_digit() is stricter than is_numeric(): it rejects values like "1e5" or "0x1A".
        if (!ctype_digit($timestamp) || $signature === '') {
            return false;
        }

        // Protect against replay attacks: the timestamp must be close to the current time.
        if (abs(time() - (int) $timestamp) > $tolerance) {
            return false;
        }

        // The signature is an HMAC-SHA256 of "<timestamp>.<raw body>".
        $expected = hash_hmac('sha256', $timestamp . '.' . $payload, $secret);

        // Constant-time comparison to prevent timing attacks.
        return hash_equals($expected, $signature);
    }
}