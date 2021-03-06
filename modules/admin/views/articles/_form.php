<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'article_create_datetime')->textInput() ?>

    <?= $form->field($model, 'link_to_article')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'Article_JSON')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sourse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'on_off')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
