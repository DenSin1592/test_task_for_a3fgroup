<?php

namespace App\Services\TagsParser\Parsers;

class UrlTagsParser implements TagsParserInterface
{
    private array $tags = [];

    public function parse(string $url): array
    {
        $requestBody = \Http::get($url)->body();
        $this->parseInput($requestBody);
        return $this->tags;
    }

    private function parseInput(string $requestBody): void
    {
        $matches = [];

        preg_match_all("/<(.*?)>/", $requestBody, $matches);

        foreach ($matches[1] as $tag){
            $this->parseTag($tag);
        }
    }


    private function parseTag(string $tag): void
    {
        if(in_array($tag[0], ['/'], true)){
            return;
        }

        $tagDirty = explode(' ', $tag);
        $this->tags[] = $tagDirty[0];
    }
}
