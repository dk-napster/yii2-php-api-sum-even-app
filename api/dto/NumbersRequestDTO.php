<?php

namespace api\dto;

final class NumbersRequestDTO
{
    public function __construct(
        public readonly array $numbers
    ) {}
}