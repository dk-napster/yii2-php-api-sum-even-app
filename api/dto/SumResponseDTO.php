<?php

namespace api\dto;

final class SumResponseDTO
{
    public function __construct(
        public readonly int $sum
    ) {}

    public function toArray(): array
    {
        return ['sum' => $this->sum];
    }
}