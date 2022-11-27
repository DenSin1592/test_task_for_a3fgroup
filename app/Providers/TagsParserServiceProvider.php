<?php

namespace App\Providers;

use App\Services\TagsParser\Counters\TagsCounter;
use App\Services\TagsParser\Counters\TagsCounterInterface;
use App\Services\TagsParser\Parsers\TagsParserInterface;
use App\Services\TagsParser\Parsers\UrlTagsParser;
use App\Services\TagsParser\TagsParserFacade;
use App\Services\TagsParser\TagsParserFacadeInterface;
use Illuminate\Support\ServiceProvider;

class TagsParserServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TagsParserFacadeInterface::class, TagsParserFacade::class);
        $this->app->bind(TagsParserInterface::class, UrlTagsParser::class);
        $this->app->bind(TagsCounterInterface::class, TagsCounter::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
