<?php
/**
 * GetSubmitter200Response
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
 * Contact: admin@docuseal.co
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
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
 * GetSubmitter200Response Class Doc Comment
 *
 * @category Class
 * @package  Docuseal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetSubmitter200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getSubmitter_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'uuid' => 'string',
        'email' => 'string',
        'slug' => 'string',
        'sent_at' => 'string',
        'opened_at' => 'string',
        'completed_at' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'submission_events' => '\Docuseal\Model\GetSubmission200ResponseSubmissionEventsInner[]',
        'values' => '\Docuseal\Model\GetSubmission200ResponseSubmittersInnerValuesInner[]',
        'documents' => '\Docuseal\Model\GetSubmission200ResponseSubmittersInnerDocumentsInner[]',
        'role' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'uuid' => null,
        'email' => null,
        'slug' => null,
        'sent_at' => null,
        'opened_at' => null,
        'completed_at' => null,
        'created_at' => null,
        'updated_at' => null,
        'name' => null,
        'phone' => null,
        'submission_events' => null,
        'values' => null,
        'documents' => null,
        'role' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'uuid' => false,
        'email' => false,
        'slug' => false,
        'sent_at' => false,
        'opened_at' => false,
        'completed_at' => false,
        'created_at' => false,
        'updated_at' => false,
        'name' => false,
        'phone' => false,
        'submission_events' => false,
        'values' => false,
        'documents' => false,
        'role' => false
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
        'id' => 'id',
        'uuid' => 'uuid',
        'email' => 'email',
        'slug' => 'slug',
        'sent_at' => 'sent_at',
        'opened_at' => 'opened_at',
        'completed_at' => 'completed_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'name' => 'name',
        'phone' => 'phone',
        'submission_events' => 'submission_events',
        'values' => 'values',
        'documents' => 'documents',
        'role' => 'role'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'email' => 'setEmail',
        'slug' => 'setSlug',
        'sent_at' => 'setSentAt',
        'opened_at' => 'setOpenedAt',
        'completed_at' => 'setCompletedAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'name' => 'setName',
        'phone' => 'setPhone',
        'submission_events' => 'setSubmissionEvents',
        'values' => 'setValues',
        'documents' => 'setDocuments',
        'role' => 'setRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'email' => 'getEmail',
        'slug' => 'getSlug',
        'sent_at' => 'getSentAt',
        'opened_at' => 'getOpenedAt',
        'completed_at' => 'getCompletedAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'name' => 'getName',
        'phone' => 'getPhone',
        'submission_events' => 'getSubmissionEvents',
        'values' => 'getValues',
        'documents' => 'getDocuments',
        'role' => 'getRole'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('sent_at', $data ?? [], null);
        $this->setIfExists('opened_at', $data ?? [], null);
        $this->setIfExists('completed_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('submission_events', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Submitter unique ID number.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid Submitter UUID.
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email address of the submitter.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug Unique key to be used in the form signing link and embedded form.
     *
     * @return self
     */
    public function setSlug($slug)
    {
        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets sent_at
     *
     * @return string|null
     */
    public function getSentAt()
    {
        return $this->container['sent_at'];
    }

    /**
     * Sets sent_at
     *
     * @param string|null $sent_at The date and time when the signing request was sent to the submitter.
     *
     * @return self
     */
    public function setSentAt($sent_at)
    {
        if (is_null($sent_at)) {
            throw new \InvalidArgumentException('non-nullable sent_at cannot be null');
        }
        $this->container['sent_at'] = $sent_at;

        return $this;
    }

    /**
     * Gets opened_at
     *
     * @return string|null
     */
    public function getOpenedAt()
    {
        return $this->container['opened_at'];
    }

    /**
     * Sets opened_at
     *
     * @param string|null $opened_at The date and time when the submitter opened the signing form.
     *
     * @return self
     */
    public function setOpenedAt($opened_at)
    {
        if (is_null($opened_at)) {
            throw new \InvalidArgumentException('non-nullable opened_at cannot be null');
        }
        $this->container['opened_at'] = $opened_at;

        return $this;
    }

    /**
     * Gets completed_at
     *
     * @return string|null
     */
    public function getCompletedAt()
    {
        return $this->container['completed_at'];
    }

    /**
     * Sets completed_at
     *
     * @param string|null $completed_at The date and time when the submitter completed the signing form.
     *
     * @return self
     */
    public function setCompletedAt($completed_at)
    {
        if (is_null($completed_at)) {
            throw new \InvalidArgumentException('non-nullable completed_at cannot be null');
        }
        $this->container['completed_at'] = $completed_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at The date and time when the submitter was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at The date and time when the submitter was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Submitter name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Submitter phone number.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets submission_events
     *
     * @return \Docuseal\Model\GetSubmission200ResponseSubmissionEventsInner[]|null
     */
    public function getSubmissionEvents()
    {
        return $this->container['submission_events'];
    }

    /**
     * Sets submission_events
     *
     * @param \Docuseal\Model\GetSubmission200ResponseSubmissionEventsInner[]|null $submission_events submission_events
     *
     * @return self
     */
    public function setSubmissionEvents($submission_events)
    {
        if (is_null($submission_events)) {
            throw new \InvalidArgumentException('non-nullable submission_events cannot be null');
        }
        $this->container['submission_events'] = $submission_events;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \Docuseal\Model\GetSubmission200ResponseSubmittersInnerValuesInner[]|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \Docuseal\Model\GetSubmission200ResponseSubmittersInnerValuesInner[]|null $values An array of pre-filled values for the submission.
     *
     * @return self
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Docuseal\Model\GetSubmission200ResponseSubmittersInnerDocumentsInner[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Docuseal\Model\GetSubmission200ResponseSubmittersInnerDocumentsInner[]|null $documents An array of documents that the submitter has to sign.
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        if (is_null($documents)) {
            throw new \InvalidArgumentException('non-nullable documents cannot be null');
        }
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role The role of the submitter in the signing process.
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }
        $this->container['role'] = $role;

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


