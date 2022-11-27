<?php

namespace App\Console\Commands;

use App\Console\AbstractCommand;
use App\DTO\Api\ParseDTO;
use App\Http\Requests\Api\ParseRequest;
use App\Services\TagsParser\TagsParserFacadeInterface;


class GetCountTagsForUrl extends AbstractCommand
{
    public const SIGNATURE = 'app:get-count-tags-for-url
    {url=https://www.google.com : Url}
    ';

    protected $signature = self::SIGNATURE;
    protected $description = '';


    public function handleCommand(): void
    {
        $url = $this->argument('url');
        $validator = \Validator::make([ParseRequest::URL_FIELD_NAME => $url], ParseRequest::RULES);

        if($validator->fails()){
            $this->error('Url isn`t correct');
        }

        ParseDTO::getInstance()->setProperty(ParseRequest::URL_FIELD_NAME, $url);
        $tags = (\App::make(TagsParserFacadeInterface::class))->run();


        foreach ($tags as $tag) {
            $this->info("Tag <" .$tag['name']. "> - " .$tag['count']. " count.");
        }
    }
}
