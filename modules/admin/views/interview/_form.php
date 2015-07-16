<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Interview */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interview-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'interview_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'interview_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interview_date')->textInput() ?>

    <?= $form->field($model, 'interview_time')->textInput() ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'export_time')->textInput() ?>

    <?= $form->field($model, 'notified')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
