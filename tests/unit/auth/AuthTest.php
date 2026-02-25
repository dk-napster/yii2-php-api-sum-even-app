<?php

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use yii\web\Application;

class AuthTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        new Application(require __DIR__ . '/../../../api/config/main.php');
    }

    public function testUnauthorizedRequestReturns401(): void
    {
        $request = \Yii::$app->request;

        // Подменяем заголовки
        $request->headers->set('X-Login', 'wrong');
        $request->headers->set('X-Password', 'wrong');

        $request->setBodyParams([
            'numbers' => [1, 2, 3]
        ]);

        try {
            \Yii::$app->runAction('sum/get-sum-even');
            $this->fail('Expected UnauthorizedHttpException not thrown');
        } catch (\yii\web\UnauthorizedHttpException $e) {

            $this->assertEquals(401, $e->statusCode);
            $this->assertEquals('Invalid credentials.', $e->getMessage());
        }
    }
}