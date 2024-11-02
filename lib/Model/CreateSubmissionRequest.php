<?php
/**
 * CreateSubmissionRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Docuseal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DocuSeal API
 *
 * DocuSeal API specs
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: admin@docuseal.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Docuseal\Model;

use \ArrayAccess;
use \Docuseal\ObjectSerializer;

/**
 * CreateSubmissionRequest Class Doc Comment
 *
 * @category Class
 * @package  Docuseal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSubmissionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createSubmission_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'template_id' => 'int',
        'send_email' => 'bool',
        'send_sms' => 'bool',
        'order' => 'string',
        'completed_redirect_url' => 'string',
        'bcc_completed' => 'string',
        'reply_to' => 'string',
        'expire_at' => 'string',
        'message' => '\Docuseal\Model\CreateSubmissionRequestMessage',
        'submitters' => '\Docuseal\Model\CreateSubmissionRequestSubmittersInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'template_id' => null,
        'send_email' => null,
        'send_sms' => null,
        'order' => null,
        'completed_redirect_url' => null,
        'bcc_completed' => null,
        'reply_to' => null,
        'expire_at' => null,
        'message' => null,
        'submitters' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'template_id' => false,
        'send_email' => false,
        'send_sms' => false,
        'order' => false,
        'completed_redirect_url' => false,
        'bcc_completed' => false,
        'reply_to' => false,
        'expire_at' => false,
        'message' => false,
        'submitters' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'template_id' => 'template_id',
        'send_email' => 'send_email',
        'send_sms' => 'send_sms',
        'order' => 'order',
        'completed_redirect_url' => 'completed_redirect_url',
        'bcc_completed' => 'bcc_completed',
        'reply_to' => 'reply_to',
        'expire_at' => 'expire_at',
        'message' => 'message',
        'submitters' => 'submitters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'template_id' => 'setTemplateId',
        'send_email' => 'setSendEmail',
        'send_sms' => 'setSendSms',
        'order' => 'setOrder',
        'completed_redirect_url' => 'setCompletedRedirectUrl',
        'bcc_completed' => 'setBccCompleted',
        'reply_to' => 'setReplyTo',
        'expire_at' => 'setExpireAt',
        'message' => 'setMessage',
        'submitters' => 'setSubmitters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'template_id' => 'getTemplateId',
        'send_email' => 'getSendEmail',
        'send_sms' => 'getSendSms',
        'order' => 'getOrder',
        'completed_redirect_url' => 'getCompletedRedirectUrl',
        'bcc_completed' => 'getBccCompleted',
        'reply_to' => 'getReplyTo',
        'expire_at' => 'getExpireAt',
        'message' => 'getMessage',
        'submitters' => 'getSubmitters'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const ORDER_PRESERVED = 'preserved';
    public const ORDER_RANDOM = 'random';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_PRESERVED,
            self::ORDER_RANDOM,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('template_id', $data ?? [], null);
        $this->setIfExists('send_email', $data ?? [], true);
        $this->setIfExists('send_sms', $data ?? [], false);
        $this->setIfExists('order', $data ?? [], 'preserved');
        $this->setIfExists('completed_redirect_url', $data ?? [], null);
        $this->setIfExists('bcc_completed', $data ?? [], null);
        $this->setIfExists('reply_to', $data ?? [], null);
        $this->setIfExists('expire_at', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('submitters', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['template_id'] === null) {
            $invalidProperties[] = "'template_id' can't be null";
        }
        $allowedValues = $this->getOrderAllowableValues();
        if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order', must be one of '%s'",
                $this->container['order'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['submitters'] === null) {
            $invalidProperties[] = "'submitters' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets template_id
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param int $template_id The unique identifier of the template. Document template forms can be created via the Web UI, <a href=\"https://www.docuseal.com/guides/use-embedded-text-field-tags-in-the-pdf-to-create-a-fillable-form\" class=\"link\">PDF and DOCX API</a>, or <a href=\"https://www.docuseal.com/guides/create-pdf-document-fillable-form-with-html-api\" class=\"link\">HTML API</a>.
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        if (is_null($template_id)) {
            throw new \InvalidArgumentException('non-nullable template_id cannot be null');
        }
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets send_email
     *
     * @return bool|null
     */
    public function getSendEmail()
    {
        return $this->container['send_email'];
    }

    /**
     * Sets send_email
     *
     * @param bool|null $send_email Set `false` to disable signature request emails sending.
     *
     * @return self
     */
    public function setSendEmail($send_email)
    {
        if (is_null($send_email)) {
            throw new \InvalidArgumentException('non-nullable send_email cannot be null');
        }
        $this->container['send_email'] = $send_email;

        return $this;
    }

    /**
     * Gets send_sms
     *
     * @return bool|null
     */
    public function getSendSms()
    {
        return $this->container['send_sms'];
    }

    /**
     * Sets send_sms
     *
     * @param bool|null $send_sms Set `true` to send signature request via phone number and SMS.
     *
     * @return self
     */
    public function setSendSms($send_sms)
    {
        if (is_null($send_sms)) {
            throw new \InvalidArgumentException('non-nullable send_sms cannot be null');
        }
        $this->container['send_sms'] = $send_sms;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string|null $order Pass 'random' to send signature request emails to all parties right away. The order is 'preserved' by default so the second party will receive a signature request email only after the document is signed by the first party.
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $allowedValues = $this->getOrderAllowableValues();
        if (!in_array($order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order', must be one of '%s'",
                    $order,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets completed_redirect_url
     *
     * @return string|null
     */
    public function getCompletedRedirectUrl()
    {
        return $this->container['completed_redirect_url'];
    }

    /**
     * Sets completed_redirect_url
     *
     * @param string|null $completed_redirect_url Specify URL to redirect to after the submission completion.
     *
     * @return self
     */
    public function setCompletedRedirectUrl($completed_redirect_url)
    {
        if (is_null($completed_redirect_url)) {
            throw new \InvalidArgumentException('non-nullable completed_redirect_url cannot be null');
        }
        $this->container['completed_redirect_url'] = $completed_redirect_url;

        return $this;
    }

    /**
     * Gets bcc_completed
     *
     * @return string|null
     */
    public function getBccCompleted()
    {
        return $this->container['bcc_completed'];
    }

    /**
     * Sets bcc_completed
     *
     * @param string|null $bcc_completed Specify BCC address to send signed documents to after the completion.
     *
     * @return self
     */
    public function setBccCompleted($bcc_completed)
    {
        if (is_null($bcc_completed)) {
            throw new \InvalidArgumentException('non-nullable bcc_completed cannot be null');
        }
        $this->container['bcc_completed'] = $bcc_completed;

        return $this;
    }

    /**
     * Gets reply_to
     *
     * @return string|null
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     *
     * @param string|null $reply_to Specify Reply-To address to use in the notification emails.
     *
     * @return self
     */
    public function setReplyTo($reply_to)
    {
        if (is_null($reply_to)) {
            throw new \InvalidArgumentException('non-nullable reply_to cannot be null');
        }
        $this->container['reply_to'] = $reply_to;

        return $this;
    }

    /**
     * Gets expire_at
     *
     * @return string|null
     */
    public function getExpireAt()
    {
        return $this->container['expire_at'];
    }

    /**
     * Sets expire_at
     *
     * @param string|null $expire_at Specify the expiration date and time after which the submission becomes unavailable for signature.
     *
     * @return self
     */
    public function setExpireAt($expire_at)
    {
        if (is_null($expire_at)) {
            throw new \InvalidArgumentException('non-nullable expire_at cannot be null');
        }
        $this->container['expire_at'] = $expire_at;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \Docuseal\Model\CreateSubmissionRequestMessage|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \Docuseal\Model\CreateSubmissionRequestMessage|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets submitters
     *
     * @return \Docuseal\Model\CreateSubmissionRequestSubmittersInner[]
     */
    public function getSubmitters()
    {
        return $this->container['submitters'];
    }

    /**
     * Sets submitters
     *
     * @param \Docuseal\Model\CreateSubmissionRequestSubmittersInner[] $submitters The list of submitters for the submission.
     *
     * @return self
     */
    public function setSubmitters($submitters)
    {
        if (is_null($submitters)) {
            throw new \InvalidArgumentException('non-nullable submitters cannot be null');
        }
        $this->container['submitters'] = $submitters;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


