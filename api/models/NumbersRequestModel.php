<?php

namespace api\models;

use yii\base\Model;

class NumbersRequestModel extends Model
{
    public array $numbers = [];

    public function rules(): array
    {
        return [
            ['numbers', 'required'],
            ['numbers', 'each', 'rule' => ['integer']],
        ];
    }
}