<?php

namespace App\Traits;

use App\Traits\Exceptions\PropertyContainerException;


trait PropertyContainerTrait
{
    private array $propertyContainer = [];


    public function setProperty(string $key, mixed $value): void
    {
        if(!in_array($key, static::ALLOWED_PROPERTIES, true)){
            throw new PropertyContainerException('The property not allowed.');
        }
        if(isset($this->propertyContainer[$key])){
            throw new PropertyContainerException('The property already exists.');
        }
        $this->propertyContainer[$key] = $value;
    }


    public function getProperty(string $key): mixed
    {
        try {
            return $this->propertyContainer[$key];
        }catch (\ErrorException $e){
            throw new PropertyContainerException('Property does not exist.');
        }
    }
}
