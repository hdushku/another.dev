<?php

namespace front\models;

use Yii;
use \front\models\base\BlogPost as BaseBlogPost;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "blog_post".
 */
class BlogPost extends BaseBlogPost
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
