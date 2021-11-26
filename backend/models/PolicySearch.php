<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Policy;

/**
 * PolicySearch represents the model behind the search form of `backend\models\Policy`.
 */
class PolicySearch extends Policy
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id'], 'integer'],
            [['policy_type', 'policy_name'], 'safe'],
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
        $query = Policy::find();

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
            'policy_id' => $this->policy_id,
        ]);

        $query->andFilterWhere(['like', 'policy_type', $this->policy_type])
            ->andFilterWhere(['like', 'policy_name', $this->policy_name]);

        return $dataProvider;
    }
}
