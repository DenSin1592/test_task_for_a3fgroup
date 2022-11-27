<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;


class ParseRequest extends FormRequest
{
    public const URL_FIELD_NAME = 'url';

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $rules = [];

        $rules[self::URL_FIELD_NAME] = 'required|url';

        return $rules;
    }
}
