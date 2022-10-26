<?php

namespace Vishalsuri\SolidPrincipal\OpenClose;

/**
 * Open Close
 * Empty garden
 * It would need to be modified each time we need new type of garden
 */
class EmptyGarden
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function items()
    {
        $numberOfSpots = ceil(($this->width * $this->height) / 2);
        return array_fill(0, $numberOfSpots, 'handful of dirts');
    }
}