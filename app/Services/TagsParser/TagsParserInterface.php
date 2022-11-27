<?php

namespace App\Services\TagsParser;

interface TagsParserInterface
{
    public function parse(string $url): array;
}
