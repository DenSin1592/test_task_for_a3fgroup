<?php

namespace App\Services\TagsParser;

class FakeTagsParser implements TagsParserInterface
{
    public function parse(string $url): array
    {
        return [
            [
                'name' => 'div',
                'count' => 6
            ],
            [
                'name' => 'p',
                'count' => 2
            ],
            [
                'name' => 'a',
                'count' => 7
            ],
        ];
    }
}
