<?php

namespace Laundrapp\Laundrone\Drones;

class PrototypeDrone
{
    /**
     * Speed of drone in miles per hour.
     *
     * @var int
     */
    private $speed = 60;



    /**
     * Units of fuel that the drone has.
     *
     * @var int
     */
    private $fuelUnits = 10;



    /**
     * Number of miles the drone can cover for
     * every unit of fuel.
     *
     * @var int
     */
    private $milesPerUnit = 10;
}