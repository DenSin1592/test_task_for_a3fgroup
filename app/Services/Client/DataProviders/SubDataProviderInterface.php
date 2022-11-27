<?php

namespace App\Services\Client\DataProviders;

use Illuminate\Database\Eloquent\Model;


interface SubDataProviderInterface
{
    public function provideData(array $inputData): array;
}
