<?php

namespace App\Services\Client\DataProviders\Realizations\SubDataProviders\TagsParser;

use App\Services\Client\DataProviders\SubDataProviderInterface;
use App\Services\TagsParser\TagsParserFacade;
use App\Services\TagsParser\TagsParserFacadeInterface;


class TagsSubDataProvider implements SubDataProviderInterface
{
    public const NAME = 'tags';

    private TagsParserFacade $tagsParserFacade;

    public function __construct()
    {
        $this->tagsParserFacade = \App::make(TagsParserFacadeInterface::class);
    }

    public function provideData(): array
    {
        return [self::NAME => $this->tagsParserFacade->run()];
    }
}
