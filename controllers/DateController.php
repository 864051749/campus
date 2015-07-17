<?php
/**
 * Created by PhpStorm.
 * User: fujianguo
 * Date: 15/7/15
 * Time: 下午9:01
 */

namespace app\controllers;
use app\models\Interview;

class DateController extends Controller
{
    public function actionSetting() {
        //$data=Yii::$app->request->post();
        $data = array(
            'interview_id' => '面试序号',
            'user_id' => '面试者序号',
            'interview_city' => '城市',
            'interview_date' => '面试日期',
            'interview_time' => '面试开始时间',
            'create_time' => '创建时间',
            'export_time' => '导出时间',
            'notified' => '通知时间',
            'status' => '预约状态',
        );
        $model = new Interview();
        //判断POST和保存是否成功，成功跳转到成功页，不成功则返回选择页
        if ($model->load($data) && $model->save()) {
            return $this->redirect('success');
        } else {
            return $this->render('setting', [
                'model' => $model,
            ]);
        }
    }
    public function actionConfirm() {
        return $this->render('confirm');
    }
    public function actionSuccess() {
        return $this->render('success');
    }

}