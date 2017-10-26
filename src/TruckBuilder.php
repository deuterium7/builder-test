<?php

namespace AlexanderZabornyi\BuilderTest;

use AlexanderZabornyi\BuilderTest\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    /**
     * Добавить двери
     */
    public function addDoors()
    {
        $this->truck->setPart('leftDoor', new Parts\Door());
        $this->truck->setPart('rightDoor', new Parts\Door());
    }

    /**
     * Добавить двигатель
     */
    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Parts\Engine());
    }

    /**
     * Добавить дороги
     */
    public function addWheel()
    {
        $this->truck->setPart('truckWheel1', new Parts\Wheel());
        $this->truck->setPart('truckWheel2', new Parts\Wheel());
        $this->truck->setPart('truckWheel3', new Parts\Wheel());
    }

    /**
     * Создать экземпляр класса
     */
    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }

    /**
     * Получить экземпляр класса
     *
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}