<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Premium;

/**
 * PremiumSearch represents the model behind the search form of `backend\models\Premium`.
 */
class PremiumSearch extends Premium
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['premium_id'], 'integer'],
            [['name', 'price', 'discount'], 'safe'],
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
        $query = Premium::find();

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
            'premium_id' => $this->premium_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'discount', $this->discount]);

        return $dataProvider;
    }
}
