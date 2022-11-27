<?php

namespace App\Services\TagsParser\Counters;

class TagsCounter implements TagsCounterInterface
{
    private array $tags = [];
    private array $cleanTags = [];

    public function count(array $tags): array
    {
        foreach ($tags as $tag){
            if(!isset($this->tags[$tag])){
                $this->tags[$tag] = 0;
            }
            $this->tags[$tag]++;
        }

        foreach ($this->tags as $tag => $count){
            $this->cleanTags[] = ['name' => $tag, 'count' => $count];
        }

        return $this->cleanTags;
    }
}
