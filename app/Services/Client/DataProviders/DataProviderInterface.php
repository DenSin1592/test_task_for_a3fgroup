<?php

namespace App\Services\Client\DataProviders;

use Illuminate\Database\Eloquent\Model;


interface DataProviderInterface
{
    public function provideData(array $inputData): array;
}
