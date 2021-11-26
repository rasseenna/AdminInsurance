<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Home;

/**
 * HomeSearch represents the model behind the search form of `backend\models\Home`.
 */
class HomeSearch extends Home
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['home_id'], 'integer'],
            [['username', 'policy_name', 'address', 'built_date', 'home_type', 'home_age', 'membership_type', 'premium_selected'], 'safe'],
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
        $query = Home::find();

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
            'home_id' => $this->home_id,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'policy_name', $this->policy_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'built_date', $this->built_date])
            ->andFilterWhere(['like', 'home_type', $this->home_type])
            ->andFilterWhere(['like', 'home_age', $this->home_age])
            ->andFilterWhere(['like', 'membership_type', $this->membership_type])
            ->andFilterWhere(['like', 'premium_selected', $this->premium_selected]);

        return $dataProvider;
    }
}
