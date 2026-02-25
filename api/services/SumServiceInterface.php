<?php

namespace api\services;

use api\dto\NumbersRequestDTO;
use api\dto\SumResponseDTO;

interface SumServiceInterface
{
    public function getSumEven(NumbersRequestDTO $dto): SumResponseDTO;
}