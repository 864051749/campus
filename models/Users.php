<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $idcard
 * @property string $mobile
 * @property integer $score
 * @property integer $create_time
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['score', 'create_time'], 'integer'],
            [['user_name','mobile','idcard'], 'required'],
            [['idcard','mobile'], 'unique'],
            [['user_name'], 'string', 'max' => 45],
            [['idcard', 'mobile'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => '面试者序号',
            'user_name' => '姓名',
            'idcard' => '身份证号',
            'mobile' => '手机',
            'score' => '成绩',
            'create_time' => '创建时间',
        ];
    }
    public function behaviors() {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'create_time',
                'updatedAtAttribute' => null,
                'value' => new Expression('NOW()'),
            ],
        ];
    }

}
