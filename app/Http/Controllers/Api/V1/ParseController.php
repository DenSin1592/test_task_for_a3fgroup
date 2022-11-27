<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\Api\ParseRequest;
use App\Services\Client\DataProviders\DataProviderInterface;
use App\Services\Client\DataProviders\BaseDataProvider;
use App\Services\Client\DataProviders\Realizations\SubDataProviders\TagsParser\TagsSubDataProvider;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;


class ParseController
{
    private DataProviderInterface $dataProvider;

    public function __construct()
    {
        $this->dataProvider = new BaseDataProvider([
            new TagsSubDataProvider(),
        ]);
    }

    public function parse(ParseRequest $request): JsonResponse
    {
        $viewData = $this->dataProvider->provideData($request->validated());

        return \Response::json($viewData, ResponseAlias::HTTP_OK);
    }
}
