<?php

namespace Vishalsuri\SolidPrincipal\LiskovSubstitution;

/**
 * Liskov Substitution
 * Empty garden
 * It would need to be modified each time we need new type of garden
 */
class EmptyGarden
{
    private $plot;

    public function __construct(PlotArea $plot)
    {
        $this->plotArea = $plot;
    }   

    public function items(): array
    {
        $numberOfSpots = $this->plot->totalNumberOfPlots();
        return array_fill(0, $numberOfSpots, 'handful of dirts');
    }
}

/**
 * 
 * Previous code can break if string passed instead of int; 
 * replace it with interface.
 * 
 */