<?php
/**
 * Created by PhpStorm.
 * User: fujianguo
 * Date: 15/7/15
 * Time: 下午9:01
 */

namespace app\controllers;

use app\controllers\Controller;

class DateController extends Controller
{
    public function actionSetting() {
        $this->view->title = '360校园招聘-选择日期和地点';
        return $this->render('setting');
    }
    public function actionConfirm() {
        return $this->render('confirm');
    }
    public function actionSuccess() {
        return $this->render('success');
    }

}