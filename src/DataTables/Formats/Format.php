<?php

namespace Khill\Lavacharts\DataTables\Formats;

/**
 * Format Parent Class
 *
 * The base class for the individual configuration objects, providing common
 * functions to the child objects.
 *
 *
 * @package    Khill\Lavacharts
 * @subpackage Formats
 * @author     Kevin Hill <kevinkhill@gmail.com>
 * @copyright  (c) 2016, KHill Designs
 * @link       http://github.com/kevinkhill/lavacharts GitHub Repository Page
 * @link       http://lavacharts.com                   Official Docs Site
 * @license    http://opensource.org/licenses/MIT MIT
 */

use \Khill\Lavacharts\Configs\Options;
use \Khill\Lavacharts\Configs\JsonConfig; //@TODO look at formats and jsonconfig etc.

class Format implements \JsonSerializable
{
    use \Khill\Lavacharts\Traits\OptionsTrait;

    /**
     * Builds the Options object.
     * Passing an array of key value pairs will set the configuration for each
     * child object created from this parent object.
     *
     * @param \Khill\Lavacharts\Configs\Options $options
     * @param  array                            $config Array of options.
     */
    public function __construct(Options $options, $config)
    {
        //parent::__construct($options, $config);
    }

    /**
     * Returns the format type.
     *
     * @since 3.0.0
     * @return string
     */
    public function getType()
    {
        return static::TYPE;
    }

    /**
     * Custom serialization of the Filter
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->options;
    }
}
