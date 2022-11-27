<?php

namespace App\Services\TagsParser\Parsers;

class FakeTagsParser implements TagsParserInterface
{
    private $tags = [
        'div',
        'div',
        'a',
        'a',
        'p',
        'p',
        'p',
        'p',
        'div',
        'div',
    ];

    public function parse(string $url): array
    {
        return $this->tags;
    }
}
