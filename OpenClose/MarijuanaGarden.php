<?php

namespace Vishalsuri\SolidPrincipal\OpenClose;

/**
 * Open Close
 * Marijuana garden
 * It extends empty garden and in this way it can be replace class for empty garden
 * and also fullfil open for extension and close for modification
 */
class MarijuanaGarden extends EmptyGarden
{
    public function items()
    {
        $numberOfSpots = ceil(($this->width * $this->height) / 2);
        return array_fill(0, $numberOfSpots, 'Weed');
    }
}