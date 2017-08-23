<?php

namespace front\controllers;

use yii\console\Controller;

class ExchangeController extends Controller
{
    /*
    public function actionTest()
    {
        echo \Yii::$app->exchange->getRate('USD', 'EUR','2014-04-10') . PHP_EOL;
    }
    */
    
    public function actionTest()
    {
        //echo \Yii::$app->exchange->getRate('USD','EUR','2017-08-21');
        return $this->render('test');
    }
}
