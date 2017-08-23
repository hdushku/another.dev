<?php

namespace front\models;

use Yii;
use \front\models\base\Post as BasePost;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "blog_post".
 */
class Post extends BasePost
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
