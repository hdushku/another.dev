<?php
/**
 * /home/ubuntu/workspace/another.dev/app/front/runtime/giiant/eeda5c365686c9888dbc13dbc58f89a1
 *
 * @package default
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 *
 * @var yii\web\View $this
 * @var front\models\PostSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

    		<?php echo $form->field($model, 'id') ?>

		<?php echo $form->field($model, 'category_id') ?>

		<?php echo $form->field($model, 'type_id') ?>

		<?php echo $form->field($model, 'title') ?>

		<?php echo $form->field($model, 'title_seo') ?>

		<?php // echo $form->field($model, 'alias') ?>

		<?php // echo $form->field($model, 'meta_description') ?>

		<?php // echo $form->field($model, 'preview') ?>

		<?php // echo $form->field($model, 'content') ?>

		<?php // echo $form->field($model, 'views') ?>

		<?php // echo $form->field($model, 'publish_status') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?php echo Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
