<?php

namespace App\Services\Client\DataProviders;


class BaseDataProvider implements DataProviderInterface
{

    public function __construct(
        protected array $child = []
    ){
        $this->checkCorrectChild();
    }


    public function provideData(array $inputData): array
    {
        $data = [];

        foreach ($this->child as $subForm) {
            $subFormData = $subForm->provideData($inputData);
            $data = [...$data,...$subFormData];
        }

        return $data;
    }


    private function checkCorrectChild(): void
    {
        foreach ($this->child as $subForm){
            if(!($subForm instanceof SubDataProviderInterface)){
                throw new \RuntimeException('Error type: ' . $subForm::class . ' not implements ' . SubDataProviderInterface::class);
            }
        }
    }
}
