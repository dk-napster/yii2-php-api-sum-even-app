<?php

namespace api\components;

use Yii;
use yii\web\UnauthorizedHttpException;
use yii\filters\auth\AuthMethod;
use api\models\ApiUser;

class HeaderAuth extends AuthMethod
{
    public function authenticate($user, $request, $response)
    {
        $login = $request->headers->get('X-Login');
        $password = $request->headers->get('X-Password');

        if (!$login || !$password) {
            throw new UnauthorizedHttpException('Missing credentials');
        }

        if (!isset(Yii::$app->params['authUsers'][$login]) || Yii::$app->params['authUsers'][$login]['password'] !== $password) {
            throw new UnauthorizedHttpException('Invalid credentials.');
        }

        return new ApiUser(Yii::$app->params['authUsers'][$login]['id'], $login);
    }
}