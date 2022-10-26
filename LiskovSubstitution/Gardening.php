<?php

namespace Vishalsuri\SolidPrincipal\LiskovSubstitution;
use Vishalsuri\SolidPrincipal\LiskovSubstitution\EmptyGarden;
use Vishalsuri\SolidPrincipal\LiskovSubstitution\RectangleGarden;
/**
 * Liskov Substitution
 * Gardening
 */

 $garden = new EmptyGarden(new RectangleGarden(10, 20));
 $garden->items();