<?php

namespace App\Services\TagsParser\Parsers;

interface TagsParserInterface
{
    public function parse(string $url): array;
}
