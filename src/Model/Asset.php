<?php
/**
 * Asset
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shotstack
 *
 * Shotstack is a video, image and audio editing service that allows for the automated generation of videos, images and audio using JSON and a RESTful API.  You arrange and configure an edit and POST it to the API which will render your media and provide a file  location when complete.  For more details visit [shotstack.io](https://shotstack.io) or checkout our [getting started](https://shotstack.io/docs/guide/) documentation. There are two main API's, one for editing and generating assets (Edit API) and one for managing hosted assets (Serve API).  The Edit API base URL is: <b>https://api.shotstack.io/{version}</b>  The Serve API base URL is: <b>https://api.shotstack.io/serve/{version}</b>
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * Asset Class Doc Comment
 *
 * @category Class
 * @description The type of asset to display for the duration of this Clip. Value     must be one of:       &lt;ul&gt;         &lt;li&gt;&lt;a href&#x3D;\&quot;#tocs_videoasset\&quot;&gt;VideoAsset&lt;/a&gt;&lt;/li&gt;         &lt;li&gt;&lt;a href&#x3D;\&quot;#tocs_imageasset\&quot;&gt;ImageAsset&lt;/a&gt;&lt;/li&gt;         &lt;li&gt;&lt;a href&#x3D;\&quot;#tocs_titleasset\&quot;&gt;TitleAsset&lt;/a&gt;&lt;/li&gt;         &lt;li&gt;&lt;a href&#x3D;\&quot;#tocs_htmlasset\&quot;&gt;HtmlAsset&lt;/a&gt;&lt;/li&gt;         &lt;li&gt;&lt;a href&#x3D;\&quot;#tocs_audioasset\&quot;&gt;AudioAsset&lt;/a&gt;&lt;/li&gt;         &lt;li&gt;&lt;a href&#x3D;\&quot;#tocs_lumaasset\&quot;&gt;LumaAsset&lt;/a&gt;&lt;/li&gt;       &lt;/ul&gt;
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Asset implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'asset';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Asset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'src' => 'string',
        'trim' => 'float',
        'volume' => 'float',
        'crop' => '\Shotstack\Client\Model\Crop',
        'text' => 'string',
        'style' => 'string',
        'color' => 'string',
        'size' => 'string',
        'background' => 'string',
        'position' => 'string',
        'offset' => '\Shotstack\Client\Model\Offset',
        'html' => 'string',
        'css' => 'string',
        'width' => 'int',
        'height' => 'int',
        'effect' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'src' => null,
        'trim' => null,
        'volume' => null,
        'crop' => null,
        'text' => null,
        'style' => null,
        'color' => null,
        'size' => null,
        'background' => null,
        'position' => null,
        'offset' => null,
        'html' => null,
        'css' => null,
        'width' => null,
        'height' => null,
        'effect' => null
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
        'type' => 'type',
        'src' => 'src',
        'trim' => 'trim',
        'volume' => 'volume',
        'crop' => 'crop',
        'text' => 'text',
        'style' => 'style',
        'color' => 'color',
        'size' => 'size',
        'background' => 'background',
        'position' => 'position',
        'offset' => 'offset',
        'html' => 'html',
        'css' => 'css',
        'width' => 'width',
        'height' => 'height',
        'effect' => 'effect'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'src' => 'setSrc',
        'trim' => 'setTrim',
        'volume' => 'setVolume',
        'crop' => 'setCrop',
        'text' => 'setText',
        'style' => 'setStyle',
        'color' => 'setColor',
        'size' => 'setSize',
        'background' => 'setBackground',
        'position' => 'setPosition',
        'offset' => 'setOffset',
        'html' => 'setHtml',
        'css' => 'setCss',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'effect' => 'setEffect'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'src' => 'getSrc',
        'trim' => 'getTrim',
        'volume' => 'getVolume',
        'crop' => 'getCrop',
        'text' => 'getText',
        'style' => 'getStyle',
        'color' => 'getColor',
        'size' => 'getSize',
        'background' => 'getBackground',
        'position' => 'getPosition',
        'offset' => 'getOffset',
        'html' => 'getHtml',
        'css' => 'getCss',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'effect' => 'getEffect'
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

    const STYLE_MINIMAL = 'minimal';
    const STYLE_BLOCKBUSTER = 'blockbuster';
    const STYLE_VOGUE = 'vogue';
    const STYLE_SKETCHY = 'sketchy';
    const STYLE_SKINNY = 'skinny';
    const STYLE_CHUNK = 'chunk';
    const STYLE_CHUNK_LIGHT = 'chunkLight';
    const STYLE_MARKER = 'marker';
    const STYLE_FUTURE = 'future';
    const STYLE_SUBTITLE = 'subtitle';
    const SIZE_XX_SMALL = 'xx-small';
    const SIZE_X_SMALL = 'x-small';
    const SIZE_SMALL = 'small';
    const SIZE_MEDIUM = 'medium';
    const SIZE_LARGE = 'large';
    const SIZE_X_LARGE = 'x-large';
    const SIZE_XX_LARGE = 'xx-large';
    const POSITION_TOP = 'top';
    const POSITION_TOP_RIGHT = 'topRight';
    const POSITION_RIGHT = 'right';
    const POSITION_BOTTOM_RIGHT = 'bottomRight';
    const POSITION_BOTTOM = 'bottom';
    const POSITION_BOTTOM_LEFT = 'bottomLeft';
    const POSITION_LEFT = 'left';
    const POSITION_TOP_LEFT = 'topLeft';
    const POSITION_CENTER = 'center';
    const EFFECT_FADE_IN = 'fadeIn';
    const EFFECT_FADE_OUT = 'fadeOut';
    const EFFECT_FADE_IN_FADE_OUT = 'fadeInFadeOut';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStyleAllowableValues()
    {
        return [
            self::STYLE_MINIMAL,
            self::STYLE_BLOCKBUSTER,
            self::STYLE_VOGUE,
            self::STYLE_SKETCHY,
            self::STYLE_SKINNY,
            self::STYLE_CHUNK,
            self::STYLE_CHUNK_LIGHT,
            self::STYLE_MARKER,
            self::STYLE_FUTURE,
            self::STYLE_SUBTITLE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSizeAllowableValues()
    {
        return [
            self::SIZE_XX_SMALL,
            self::SIZE_X_SMALL,
            self::SIZE_SMALL,
            self::SIZE_MEDIUM,
            self::SIZE_LARGE,
            self::SIZE_X_LARGE,
            self::SIZE_XX_LARGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_TOP,
            self::POSITION_TOP_RIGHT,
            self::POSITION_RIGHT,
            self::POSITION_BOTTOM_RIGHT,
            self::POSITION_BOTTOM,
            self::POSITION_BOTTOM_LEFT,
            self::POSITION_LEFT,
            self::POSITION_TOP_LEFT,
            self::POSITION_CENTER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEffectAllowableValues()
    {
        return [
            self::EFFECT_FADE_IN,
            self::EFFECT_FADE_OUT,
            self::EFFECT_FADE_IN_FADE_OUT,
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
        $this->container['type'] = $data['type'] ?? 'luma';
        $this->container['src'] = $data['src'] ?? null;
        $this->container['trim'] = $data['trim'] ?? null;
        $this->container['volume'] = $data['volume'] ?? 1;
        $this->container['crop'] = $data['crop'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
        $this->container['style'] = $data['style'] ?? null;
        $this->container['color'] = $data['color'] ?? '#ffffff';
        $this->container['size'] = $data['size'] ?? 'medium';
        $this->container['background'] = $data['background'] ?? 'transparent';
        $this->container['position'] = $data['position'] ?? 'center';
        $this->container['offset'] = $data['offset'] ?? null;
        $this->container['html'] = $data['html'] ?? null;
        $this->container['css'] = $data['css'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['effect'] = $data['effect'] ?? null;

        // Initialize discriminator property with the model name.
        $this->container['asset'] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['src'] === null) {
            $invalidProperties[] = "'src' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        $allowedValues = $this->getStyleAllowableValues();
        if (!is_null($this->container['style']) && !in_array($this->container['style'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'style', must be one of '%s'",
                $this->container['style'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSizeAllowableValues();
        if (!is_null($this->container['size']) && !in_array($this->container['size'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'size', must be one of '%s'",
                $this->container['size'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPositionAllowableValues();
        if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'position', must be one of '%s'",
                $this->container['position'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['html'] === null) {
            $invalidProperties[] = "'html' can't be null";
        }
        $allowedValues = $this->getEffectAllowableValues();
        if (!is_null($this->container['effect']) && !in_array($this->container['effect'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'effect', must be one of '%s'",
                $this->container['effect'],
                implode("', '", $allowedValues)
            );
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of asset - set to `luma` for luma mattes.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->container['src'];
    }

    /**
     * Sets src
     *
     * @param string $src The luma matte source URL. The URL must be publicly accessible or include credentials.
     *
     * @return self
     */
    public function setSrc($src)
    {
        $this->container['src'] = $src;

        return $this;
    }

    /**
     * Gets trim
     *
     * @return float|null
     */
    public function getTrim()
    {
        return $this->container['trim'];
    }

    /**
     * Sets trim
     *
     * @param float|null $trim The start trim point of the luma matte clip, in seconds (defaults to 0). Videos will start from the in trim point. A luma matte video will play until the file ends or the Clip length is reached.
     *
     * @return self
     */
    public function setTrim($trim)
    {
        $this->container['trim'] = $trim;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return float|null
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param float|null $volume Set the volume for the audio clip between 0 and 1 where 0 is muted and 1 is full volume (defaults to 1).
     *
     * @return self
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets crop
     *
     * @return \Shotstack\Client\Model\Crop|null
     */
    public function getCrop()
    {
        return $this->container['crop'];
    }

    /**
     * Sets crop
     *
     * @param \Shotstack\Client\Model\Crop|null $crop crop
     *
     * @return self
     */
    public function setCrop($crop)
    {
        $this->container['crop'] = $crop;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text The title text string - i.e. \"My Title\".
     *
     * @return self
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string|null
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string|null $style Uses a preset to apply font properties and styling to the title. <ul>   <li>`minimal`</li>   <li>`blockbuster`</li>   <li>`vogue`</li>   <li>`sketchy`</li>   <li>`skinny`</li>   <li>`chunk`</li>   <li>`chunkLight`</li>   <li>`marker`</li>   <li>`future`</li>   <li>`subtitle`</li> </ul>
     *
     * @return self
     */
    public function setStyle($style)
    {
        $allowedValues = $this->getStyleAllowableValues();
        if (!is_null($style) && !in_array($style, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'style', must be one of '%s'",
                    $style,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color Set the text color using hexadecimal color notation. Transparency is supported by setting the first two characters of the hex string (opposite to HTML),  i.e. #80ffffff will be white with  50% transparency.
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size Set the relative size of the text using predefined sizes from xx-small to xx-large. <ul>   <li>`xx-small`</li>   <li>`x-small`</li>   <li>`small`</li>   <li>`medium`</li>   <li>`large`</li>   <li>`x-large`</li>   <li>`xx-large`</li> </ul>
     *
     * @return self
     */
    public function setSize($size)
    {
        $allowedValues = $this->getSizeAllowableValues();
        if (!is_null($size) && !in_array($size, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'size', must be one of '%s'",
                    $size,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets background
     *
     * @return string|null
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param string|null $background Apply a background color behind the HTML bounding box using. Set the text color using hexadecimal  color notation. Transparency is supported by setting the first two characters of the hex string  (opposite to HTML), i.e. #80ffffff will be white with 50% transparency.
     *
     * @return self
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string|null $position Place the HTML in one of nine predefined positions within the HTML area. <ul>   <li>`top` - top (center)</li>   <li>`topRight` - top right</li>   <li>`right` - right (center)</li>   <li>`bottomRight` - bottom right</li>   <li>`bottom` - bottom (center)</li>   <li>`bottomLeft` - bottom left</li>   <li>`left` - left (center)</li>   <li>`topLeft` - top left</li>   <li>`center` - center</li> </ul>
     *
     * @return self
     */
    public function setPosition($position)
    {
        $allowedValues = $this->getPositionAllowableValues();
        if (!is_null($position) && !in_array($position, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'position', must be one of '%s'",
                    $position,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return \Shotstack\Client\Model\Offset|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param \Shotstack\Client\Model\Offset|null $offset offset
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html The HTML text string. See list of [supported HTML tags](https://shotstack.io/docs/guide/architecting-an-application/html-support#supported-html-tags).
     *
     * @return self
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets css
     *
     * @return string|null
     */
    public function getCss()
    {
        return $this->container['css'];
    }

    /**
     * Sets css
     *
     * @param string|null $css The CSS text string to apply styling to the HTML. See list of  [support CSS properties](https://shotstack.io/docs/guide/architecting-an-application/html-support#supported-css-properties).
     *
     * @return self
     */
    public function setCss($css)
    {
        $this->container['css'] = $css;

        return $this;
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
     * @param int|null $width Set the width of the HTML asset bounding box in pixels. Text will wrap to fill the bounding box.
     *
     * @return self
     */
    public function setWidth($width)
    {
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
     * @param int|null $height Set the width of the HTML asset bounding box in pixels. Text and elements will be masked if they exceed the  height of the bounding box.
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets effect
     *
     * @return string|null
     */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
     * Sets effect
     *
     * @param string|null $effect The effect to apply to the audio asset <ul>   <li>`fadeIn` - fade volume in only</li>   <li>`fadeOut` - fade volume out only</li>   <li>`fadeInFadeOut` - fade volume in and out</li> </ul>
     *
     * @return self
     */
    public function setEffect($effect)
    {
        $allowedValues = $this->getEffectAllowableValues();
        if (!is_null($effect) && !in_array($effect, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'effect', must be one of '%s'",
                    $effect,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['effect'] = $effect;

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


