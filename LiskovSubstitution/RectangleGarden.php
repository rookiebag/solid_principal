<?php

namespace Vishalsuri\SolidPrincipal\LiskovSubstitution;
use Vishalsuri\SolidPrincipal\LiskovSubstitution\PlotArea as LiskovSubstitutionPlotArea;

/**
 * Open Close
 * Marijuana garden
 * It extends empty garden and in this way it can be replace class for empty garden
 * and also fullfil open for extension and close for modification
 */
class RectangleGarden implements LiskovSubstitutionPlotArea
{

    private $height;
    private $width;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    public function totalNumberOfPlots()
    {
        $numberOfSpots = ceil(($this->width * $this->height) / 2);
        return array_fill(0, $numberOfSpots, 'Weed');
    }
}