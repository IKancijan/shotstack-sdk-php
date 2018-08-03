<?php
/**
 * Timeline
 *
 * PHP version 5
 *
 * @category Class
 * @package  Shotstack
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Shotstack\Model;

use \ArrayAccess;
/**
 * Timeline Class Doc Comment
 *
 * @category    Class
 * @description Model for Timeline
 * @package     Shotstack
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Timeline implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'background' => 'string',
        'soundtrack' => '\Shotstack\Model\Soundtrack',
        'tracks' => '\Shotstack\Model\Track[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'background' => 'background',
        'soundtrack' => 'soundtrack',
        'tracks' => 'tracks'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'background' => 'setBackground',
        'soundtrack' => 'setSoundtrack',
        'tracks' => 'setTracks'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'background' => 'getBackground',
        'soundtrack' => 'getSoundtrack',
        'tracks' => 'getTracks'
    );
  
    
    /**
      * $background 
      * @var string
      */
    protected $background;
    
    /**
      * $soundtrack 
      * @var \Shotstack\Model\Soundtrack
      */
    protected $soundtrack;
    
    /**
      * $tracks 
      * @var \Shotstack\Model\Track[]
      */
    protected $tracks;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->background = $data["background"];
            $this->soundtrack = $data["soundtrack"];
            $this->tracks = $data["tracks"];
        }
    }
    
    /**
     * Gets background
     * @return string
     */
    public function getBackground()
    {
        return $this->background;
    }
  
    /**
     * Sets background
     * @param string $background 
     * @return $this
     */
    public function setBackground($background)
    {
        
        $this->background = $background;
        return $this;
    }
    
    /**
     * Gets soundtrack
     * @return \Shotstack\Model\Soundtrack
     */
    public function getSoundtrack()
    {
        return $this->soundtrack;
    }
  
    /**
     * Sets soundtrack
     * @param \Shotstack\Model\Soundtrack $soundtrack 
     * @return $this
     */
    public function setSoundtrack($soundtrack)
    {
        
        $this->soundtrack = $soundtrack;
        return $this;
    }
    
    /**
     * Gets tracks
     * @return \Shotstack\Model\Track[]
     */
    public function getTracks()
    {
        return $this->tracks;
    }
  
    /**
     * Sets tracks
     * @param \Shotstack\Model\Track[] $tracks 
     * @return $this
     */
    public function setTracks($tracks)
    {
        
        $this->tracks = $tracks;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Shotstack\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Shotstack\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}