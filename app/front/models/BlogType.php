<?php

namespace front\models;

use Yii;
use \front\models\base\BlogType as BaseBlogType;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "blog_type".
 */
class BlogType extends BaseBlogType
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
