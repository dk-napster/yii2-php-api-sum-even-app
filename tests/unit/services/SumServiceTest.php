<?php

namespace tests\unit\services;

use PHPUnit\Framework\TestCase;
use api\services\SumService;
use api\dto\NumbersRequestDTO;

class SumServiceTest extends TestCase
{
    public function testSumEven()
    {
        $service = new SumService();

        $dto = new NumbersRequestDTO([1,2,3,4,5,6]);

        $result = $service->getSumEven($dto);

        $this->assertEquals(12, $result->sum);
    }
}