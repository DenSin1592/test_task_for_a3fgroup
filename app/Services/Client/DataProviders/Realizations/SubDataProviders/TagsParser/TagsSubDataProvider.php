<?php

namespace App\Services\Client\DataProviders\Realizations\SubDataProviders\TagsParser;

use App\DTO\Api\ParseDTO;
use App\Http\Requests\Api\ParseRequest;
use App\Services\Client\DataProviders\SubDataProviderInterface;
use App\Services\TagsParser\TagsParserInterface;


class TagsSubDataProvider implements SubDataProviderInterface
{
    public const NAME = 'tags';

    private TagsParserInterface $tagsParser;

    public function __construct()
    {
        $this->tagsParser = \App::make(TagsParserInterface::class);
    }

    public function provideData(): array
    {
        $url = ParseDTO::getInstance()->getProperty(ParseRequest::URL_FIELD_NAME);
        return [self::NAME => $this->tagsParser->parse($url)];
    }
}
