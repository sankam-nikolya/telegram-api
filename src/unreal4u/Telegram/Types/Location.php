<?php

declare(strict_types = 1);

namespace unreal4u\Telegram\Types;

use unreal4u\InternalFunctionality\Filler;

/**
 * This object represents a point on the map
 *
 * Objects defined as-is december 2015
 *
 * @see https://core.telegram.org/bots/api#photosize
 */
class Location extends Filler
{
    /**
     * Longitude as defined by sender
     * @var float
     */
    public $longitude = 0.0;

    /**
     * Latitude as defined by sender
     * @var float
     */
    public $latitude = 0.0;

    public function __construct(\stdClass $data = null)
    {
        $this->populateObject($data);
    }
}
