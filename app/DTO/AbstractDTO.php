<?php

namespace App\DTO;

use App\Traits\PropertyContainerTrait;
use App\Traits\SingletonTrait;

abstract class AbstractDTO
{
    use SingletonTrait, PropertyContainerTrait;
}
