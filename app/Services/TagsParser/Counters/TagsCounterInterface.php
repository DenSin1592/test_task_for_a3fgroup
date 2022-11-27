<?php

namespace App\Services\TagsParser\Counters;

interface TagsCounterInterface
{
    public function count(array $tags): array;
}
