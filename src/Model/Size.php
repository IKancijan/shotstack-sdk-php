<?php
/**
 * Size
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shotstack
 *
 * <p>Shotstack is a video editing service that allows for the automated creation of videos using JSON. You can configure an edit and POST it to the API which will render your video and provide a file location when complete. For more details visit [shotstack.io](https://shotstack.io) or checkout our [getting started](https://shotstack.gitbook.io/docs/guides/getting-started) documentation. </p> <p> There are two main API's, one for editing videos and images (Edit API) and one for managing hosted assets (Serve API). </p> <p> The Edit API base URL is: <b>https://api.shotstack.io/{version}</b> </p> <p> The Serve API base URL is: <b>https://api.shotstack.io/serve/{version}</b> </p>
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Shotstack\Client\Model;

use \ArrayAccess;
use \Shotstack\Client\ObjectSerializer;

/**
 * Size Class Doc Comment
 *
 * @category Class
 * @description Set a custom size for a video or image. When using a custom size omit the &#x60;resolution&#x60; and &#x60;aspectRatio&#x60;. Custom sizes must be divisible by 2 based on the encoder specifications.
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Size implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Size';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'width' => 'int',
        'height' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'width' => null,
        'height' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'width' => 'width',
        'height' => 'height'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'width' => 'setWidth',
        'height' => 'setHeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'width' => 'getWidth',
        'height' => 'getHeight'
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
        $this->container['width'] = $data['width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['width']) && ($this->container['width'] > 4096)) {
            $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
            $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['height']) && ($this->container['height'] > 4096)) {
            $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
            $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
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
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width Set a custom width for the video or image file. Value must be divisible by 2. Maximum video width is 1920px, maximum image width is 4096px.
     *
     * @return self
     */
    public function setWidth($width)
    {

        if (!is_null($width) && ($width > 4096)) {
            throw new \InvalidArgumentException('invalid value for $width when calling Size., must be smaller than or equal to 4096.');
        }
        if (!is_null($width) && ($width < 0)) {
            throw new \InvalidArgumentException('invalid value for $width when calling Size., must be bigger than or equal to 0.');
        }

        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height Set a custom height for the video or image file. Value must be divisible by 2. Maximum video height is 1920px, maximum image height is 4096px.
     *
     * @return self
     */
    public function setHeight($height)
    {

        if (!is_null($height) && ($height > 4096)) {
            throw new \InvalidArgumentException('invalid value for $height when calling Size., must be smaller than or equal to 4096.');
        }
        if (!is_null($height) && ($height < 0)) {
            throw new \InvalidArgumentException('invalid value for $height when calling Size., must be bigger than or equal to 0.');
        }

        $this->container['height'] = $height;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


