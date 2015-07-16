<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Interview;

/**
 * InterviewSearch represents the model behind the search form about `app\models\Interview`.
 */
class InterviewSearch extends Interview
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['interview_id', 'user_id', 'create_time', 'export_time', 'notified', 'status'], 'integer'],
            [['interview_city', 'interview_date', 'interview_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Interview::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'interview_id' => $this->interview_id,
            'user_id' => $this->user_id,
            'interview_date' => $this->interview_date,
            'interview_time' => $this->interview_time,
            'create_time' => $this->create_time,
            'export_time' => $this->export_time,
            'notified' => $this->notified,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'interview_city', $this->interview_city]);

        return $dataProvider;
    }
}
