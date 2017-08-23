<?php

namespace console\controllers;

use yii\console\Controller;

class ExchangeController extends Controller
{
    /*
    public function actionTest()
    {
        echo \Yii::$app->exchange->getRate('USD', 'EUR','2014-04-10') . PHP_EOL;
    }
    */
    public function actionTest($currency, $date = null)
    {
        echo \Yii::$app->exchange->getRate('USD', $currency, $date) . PHP_EOL;
    }
}
