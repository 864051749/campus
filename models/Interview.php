<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%interview}}".
 *
 * @property integer $interview_id
 * @property integer $user_id
 * @property string $interview_city
 * @property string $interview_date
 * @property string $interview_time
 * @property integer $create_time
 * @property integer $export_time
 * @property integer $notified
 * @property integer $status
 */
class Interview extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%interview}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['interview_id', 'user_id', 'interview_date', 'interview_time', 'create_time', 'export_time', 'notified'], 'required'],
            [['interview_id', 'user_id', 'create_time', 'export_time', 'notified', 'status'], 'integer'],
            [['interview_date', 'interview_time'], 'safe'],
            [['interview_city'], 'string', 'max' => 45],
            [['user_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'interview_id' => '面试序号',
            'user_id' => '面试者序号',
            'interview_city' => '城市',
            'interview_date' => '面试日期',
            'interview_time' => '面试开始时间',
            'create_time' => '创建时间',
            'export_time' => '导出时间',
            'notified' => '通知时间',
            'status' => '预约状态',
        ];
    }
}
