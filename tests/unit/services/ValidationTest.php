<?php

namespace tests\unit\services;

use api\models\NumbersRequestModel;
use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{
    public function testValidation()
    {
        $model = new NumbersRequestModel();
        $model->numbers = [1, 'two', 3];
        $this->assertFalse($model->validate());
        $firstErrors = $model->getFirstErrors();
        $this->assertArrayHasKey('numbers', $firstErrors);
        $this->assertEquals('Numbers must be an integer.', array_shift($firstErrors));

        unset($model);

        $model = new NumbersRequestModel();
        $model->numbers = [];
        $this->assertFalse($model->validate());
        $firstErrors = $model->getFirstErrors();
        $this->assertArrayHasKey('numbers', $firstErrors);
        $this->assertEquals('Numbers cannot be blank.', array_shift($firstErrors));
    }
}