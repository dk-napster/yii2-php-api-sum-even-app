<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/vendor/yiisoft/yii2/Yii.php';

// Если используешь alias
Yii::setAlias('@root', dirname(__DIR__));
Yii::setAlias('@api', dirname(__DIR__) . '/api');
Yii::setAlias('@common', dirname(__DIR__) . '/common');