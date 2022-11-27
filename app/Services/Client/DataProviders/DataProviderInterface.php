<?php

namespace App\Services\Client\DataProviders;


interface DataProviderInterface
{
    public function provideData(): array;
}
