<?php

namespace AlexanderZabornyi\BuilderTest;

use AlexanderZabornyi\BuilderTest\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}