<?php
/**
 * GetTemplates200ResponseDataInner
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
 * GetTemplates200ResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  Docuseal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetTemplates200ResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getTemplates_200_response_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'slug' => 'string',
        'schema' => '\Docuseal\Model\GetTemplates200ResponseDataInnerSchemaInner[]',
        'fields' => '\Docuseal\Model\GetTemplates200ResponseDataInnerFieldsInner[]',
        'submitters' => '\Docuseal\Model\GetTemplates200ResponseDataInnerSubmittersInner[]',
        'author_id' => 'int',
        'account_id' => 'int',
        'archived_at' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'source' => 'string',
        'external_id' => 'string',
        'folder_id' => 'int',
        'author' => '\Docuseal\Model\GetTemplates200ResponseDataInnerAuthor',
        'documents' => '\Docuseal\Model\GetTemplates200ResponseDataInnerDocumentsInner[]'
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
        'slug' => null,
        'schema' => null,
        'fields' => null,
        'submitters' => null,
        'author_id' => null,
        'account_id' => null,
        'archived_at' => null,
        'created_at' => null,
        'updated_at' => null,
        'source' => null,
        'external_id' => null,
        'folder_id' => null,
        'author' => null,
        'documents' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'slug' => false,
        'schema' => false,
        'fields' => false,
        'submitters' => false,
        'author_id' => false,
        'account_id' => false,
        'archived_at' => false,
        'created_at' => false,
        'updated_at' => false,
        'source' => false,
        'external_id' => false,
        'folder_id' => false,
        'author' => false,
        'documents' => false
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
        'slug' => 'slug',
        'schema' => 'schema',
        'fields' => 'fields',
        'submitters' => 'submitters',
        'author_id' => 'author_id',
        'account_id' => 'account_id',
        'archived_at' => 'archived_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'source' => 'source',
        'external_id' => 'external_id',
        'folder_id' => 'folder_id',
        'author' => 'author',
        'documents' => 'documents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'slug' => 'setSlug',
        'schema' => 'setSchema',
        'fields' => 'setFields',
        'submitters' => 'setSubmitters',
        'author_id' => 'setAuthorId',
        'account_id' => 'setAccountId',
        'archived_at' => 'setArchivedAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'source' => 'setSource',
        'external_id' => 'setExternalId',
        'folder_id' => 'setFolderId',
        'author' => 'setAuthor',
        'documents' => 'setDocuments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'slug' => 'getSlug',
        'schema' => 'getSchema',
        'fields' => 'getFields',
        'submitters' => 'getSubmitters',
        'author_id' => 'getAuthorId',
        'account_id' => 'getAccountId',
        'archived_at' => 'getArchivedAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'source' => 'getSource',
        'external_id' => 'getExternalId',
        'folder_id' => 'getFolderId',
        'author' => 'getAuthor',
        'documents' => 'getDocuments'
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
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('schema', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('submitters', $data ?? [], null);
        $this->setIfExists('author_id', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('archived_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('folder_id', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
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
     * @param int|null $id Unique identifier of the document template.
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
     * @param string|null $slug Unique slug of the document template.
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
     * Gets schema
     *
     * @return \Docuseal\Model\GetTemplates200ResponseDataInnerSchemaInner[]|null
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     *
     * @param \Docuseal\Model\GetTemplates200ResponseDataInnerSchemaInner[]|null $schema List of documents attached to the template.
     *
     * @return self
     */
    public function setSchema($schema)
    {
        if (is_null($schema)) {
            throw new \InvalidArgumentException('non-nullable schema cannot be null');
        }
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Docuseal\Model\GetTemplates200ResponseDataInnerFieldsInner[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Docuseal\Model\GetTemplates200ResponseDataInnerFieldsInner[]|null $fields List of fields to be filled in the template.
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets submitters
     *
     * @return \Docuseal\Model\GetTemplates200ResponseDataInnerSubmittersInner[]|null
     */
    public function getSubmitters()
    {
        return $this->container['submitters'];
    }

    /**
     * Sets submitters
     *
     * @param \Docuseal\Model\GetTemplates200ResponseDataInnerSubmittersInner[]|null $submitters submitters
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
     * Gets author_id
     *
     * @return int|null
     */
    public function getAuthorId()
    {
        return $this->container['author_id'];
    }

    /**
     * Sets author_id
     *
     * @param int|null $author_id Unique identifier of the author of the template.
     *
     * @return self
     */
    public function setAuthorId($author_id)
    {
        if (is_null($author_id)) {
            throw new \InvalidArgumentException('non-nullable author_id cannot be null');
        }
        $this->container['author_id'] = $author_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int|null $account_id Unique identifier of the account of the template.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets archived_at
     *
     * @return string|null
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     *
     * @param string|null $archived_at Date and time when the template was archived.
     *
     * @return self
     */
    public function setArchivedAt($archived_at)
    {
        if (is_null($archived_at)) {
            throw new \InvalidArgumentException('non-nullable archived_at cannot be null');
        }
        $this->container['archived_at'] = $archived_at;

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
     * @param string|null $created_at Date and time when the template was created.
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
     * @param string|null $updated_at Date and time when the template was updated.
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
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source Source of the template.
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id Identifier of the template in the external system.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return int|null
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param int|null $folder_id Unique identifier of the folder where the template is placed.
     *
     * @return self
     */
    public function setFolderId($folder_id)
    {
        if (is_null($folder_id)) {
            throw new \InvalidArgumentException('non-nullable folder_id cannot be null');
        }
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \Docuseal\Model\GetTemplates200ResponseDataInnerAuthor|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \Docuseal\Model\GetTemplates200ResponseDataInnerAuthor|null $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Docuseal\Model\GetTemplates200ResponseDataInnerDocumentsInner[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Docuseal\Model\GetTemplates200ResponseDataInnerDocumentsInner[]|null $documents List of documents attached to the template.
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

