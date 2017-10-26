<?php

namespace AlexanderZabornyi\BuilderTest;

use AlexanderZabornyi\BuilderTest\Parts\Vehicle;

class Director
{
    /**
     * Построить
     *
     * @param BuilderInterface $builder
     *
     * @return Vehicle
     */
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}