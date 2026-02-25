<?php

namespace api\services;

use api\dto\NumbersRequestDTO;
use api\dto\SumResponseDTO;

final class SumService implements SumServiceInterface
{
    public function getSumEven(NumbersRequestDTO $dto): SumResponseDTO
    {
        $sum = array_sum(
            array_filter(
                $dto->numbers,
                fn(int $number) => $number % 2 === 0
            )
        );

        return new SumResponseDTO($sum);
    }
}