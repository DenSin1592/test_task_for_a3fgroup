<?php

namespace App\Providers;

use App\Services\TagsParser\FakeTagsParser;
use App\Services\TagsParser\TagsParserInterface;
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
        $this->app->bind(TagsParserInterface::class, FakeTagsParser::class);
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
