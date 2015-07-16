<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Interview */

$this->title = 'Update Interview: ' . ' ' . $model->interview_id;
$this->params['breadcrumbs'][] = ['label' => 'Interviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->interview_id, 'url' => ['view', 'id' => $model->interview_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="interview-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
