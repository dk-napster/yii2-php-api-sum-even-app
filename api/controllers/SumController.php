<?php

namespace api\controllers;

use api\components\HeaderAuth;
use Yii;
use yii\rest\Controller;
use yii\web\BadRequestHttpException;
use api\models\NumbersRequestModel;
use api\dto\NumbersRequestDTO;
use api\services\SumServiceInterface;
use yii\web\Response;

class SumController extends Controller
{
    private SumServiceInterface $service;

    public function __construct($id, $module, SumServiceInterface $service, $config = [])
    {
        $this->service = $service;
        parent::__construct($id, $module, $config);
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['contentNegotiator']['formats'] = ['application/json' => Response::FORMAT_JSON];

        $behaviors['authenticator'] = [
            'class' => HeaderAuth::class,
        ];

        return $behaviors;
    }
    public function actionGetSumEven()
    {
        $body = Yii::$app->request->bodyParams;

        $model = new NumbersRequestModel();
        $model->load($body, '');

        if (!$model->validate()) {
            throw new BadRequestHttpException(json_encode($model->errors));
        }

        $dto = new NumbersRequestDTO($model->numbers);

        $response = $this->service->getSumEven($dto);

        return $response->toArray();
    }
}