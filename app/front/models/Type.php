<?php

namespace front\models;

use Yii;
use \front\models\base\Type as BaseType;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "blog_type".
 */
class Type extends BaseType
{

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
             parent::rules(),
             [
                  # custom validation rules
             ]
        );
    }
}
