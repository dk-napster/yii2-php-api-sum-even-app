<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'components' => [
        'user' => [
            'identityClass' => \api\models\ApiUser::class,
            'enableSession' => false,
            'enableAutoLogin' => false,
            'loginUrl' => null,
        ],
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'response' => [
            'class' => yii\web\Response::class,
            'format' => yii\web\Response::FORMAT_JSON,
            'charset' => 'UTF-8',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pattern' => 'api/get-sum-even',
                    'route' => 'sum/get-sum-even',
                    'verb' => 'POST'
                ],
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            \api\services\SumServiceInterface::class =>
            \api\services\SumService::class,
        ],
    ],
    'params' => $params,
];