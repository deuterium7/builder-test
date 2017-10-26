<?php

namespace AlexanderZabornyi\BuilderTest\Tests;

use PHPUnit\Framework\TestCase;
use AlexanderZabornyi\BuilderTest\Director;
use AlexanderZabornyi\BuilderTest\Parts\Car;
use AlexanderZabornyi\BuilderTest\CarBuilder;
use AlexanderZabornyi\BuilderTest\Parts\Truck;
use AlexanderZabornyi\BuilderTest\TruckBuilder;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}