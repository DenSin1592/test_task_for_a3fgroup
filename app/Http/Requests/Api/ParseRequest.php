<?php

namespace App\Http\Requests\Api;

use App\DTO\Api\ParseDTO;
use Illuminate\Foundation\Http\FormRequest;


class ParseRequest extends FormRequest
{
    public const URL_FIELD_NAME = 'url';
    public const RULES = [
        self::URL_FIELD_NAME => 'required|url'
    ];

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return self::RULES;
    }

    public function passedValidation()
    {
        $urlField = self::URL_FIELD_NAME;
        ParseDTO::getInstance()->setProperty(self::URL_FIELD_NAME, $this->$urlField);
    }

}
