<?php

namespace AlexanderZabornyi\BuilderTest\Parts;

abstract class Vehicle
{
    private $data = [];

    /**
     * Установить часть объекта
     *
     * @param $key
     * @param $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}