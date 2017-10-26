<?php

namespace AlexanderZabornyi\BuilderTest;

use AlexanderZabornyi\BuilderTest\Parts\Vehicle;

class CarBuilder implements BuilderInterface
{
    private $car;

    /**
     * Добавить двери
     */
    public function addDoors()
    {
        $this->car->setPart('leftDoor', new Parts\Door());
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    /**
     * Добавить двигатель
     */
    public function addEngine()
    {
        $this->car->setPart('carEngine', new Parts\Engine());
    }

    /**
     * Добавить дороги
     */
    public function addWheel()
    {
        $this->car->setPart('carWheel1', new Parts\Wheel());
        $this->car->setPart('carWheel2', new Parts\Wheel());
        $this->car->setPart('carWheel3', new Parts\Wheel());
    }

    /**
     * Создать экземпляр класса
     */
    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    /**
     * Получить экземляр класса
     *
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}