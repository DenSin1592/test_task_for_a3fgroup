<?php

namespace App\Services\TagsParser;


use App\DTO\Api\ParseDTO;
use App\Http\Requests\Api\ParseRequest;
use App\Services\TagsParser\Counters\TagsCounterInterface;
use App\Services\TagsParser\Parsers\TagsParserInterface;

class TagsParserFacade implements TagsParserFacadeInterface
{
    private TagsParserInterface $tagsParser;
    private TagsCounterInterface $tagsCounter;

    public function __construct()
    {
        $this->tagsParser = \App::make(TagsParserInterface::class);
        $this->tagsCounter = \App::make(TagsCounterInterface::class);
    }

    public function run(): array
    {
        $url = ParseDTO::getInstance()->getProperty(ParseRequest::URL_FIELD_NAME);
        $dirtyTags =  $this->tagsParser->parse($url);
        $cleanTags = $this->tagsCounter->count($dirtyTags);
        return $cleanTags;
    }
}
