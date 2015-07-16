<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '面试者管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'user_id',
            'user_name',
            'idcard',
            'mobile',
            'score',
            [
                'attribute'=>'create_time',
                'value' => function($model) {
                  return date('Y/m/d H:i:s',$model->create_time);
                },
                'filter' => function($model){
                    return yii\jui\DatePicker::widget(['name' => 'create_time']);
                },
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
