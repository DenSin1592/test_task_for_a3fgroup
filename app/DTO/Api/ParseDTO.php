<?php

namespace App\DTO\Api;

use App\DTO\AbstractDTO;
use App\Http\Requests\Api\ParseRequest;


class ParseDTO extends AbstractDTO
{
    protected const ALLOWED_PROPERTIES = [
        ParseRequest::URL_FIELD_NAME
    ];
}
