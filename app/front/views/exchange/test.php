<?php
/* @var $this yii\web\View */
?>
<h1>exchange/test</h1>

<p>
    <br>
    <p>
        XE Currency Converter: USD to AUD
    </p>
    <?php
    echo \Yii::$app->exchange->getRate('USD','AUD');
    echo \Yii::$app->exchange->getRate('USD','EUR');
    echo \Yii::$app->exchange->getRate('USD','CAD');
    echo \Yii::$app->exchange->getRate('USD','CHF');
    echo \Yii::$app->exchange->getRate('USD','CHF');
    ?>
</p>
