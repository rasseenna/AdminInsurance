<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Motor;

/**
 * MotorSearch represents the model behind the search form of `backend\models\Motor`.
 */
class MotorSearch extends Motor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['motor_id'], 'integer'],
            [['username','policy_name', 'manufacturer', 'model', 'colour', 'registration_year', 'registration_number', 'premium_selected'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Motor::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'motor_id' => $this->motor_id,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'policy_name', $this->policy_name])
            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'colour', $this->colour])
            ->andFilterWhere(['like', 'registration_year', $this->registration_year])
            ->andFilterWhere(['like', 'registration_number', $this->registration_number])
            ->andFilterWhere(['like', 'premium_selected', $this->premium_selected]);

        return $dataProvider;
    }
}
