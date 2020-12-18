<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Import;

/**
 * ImportSearch represents the model behind the search form of `common\models\Import`.
 */
class ImportSearch extends Import
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'date', 'status'], 'integer'],
            [['price', 'size', 'party'], 'safe'],
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
        $query = Import::find();

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
            'id' => $this->id,
            'product_id' => $this->product_id,
            'date' => $this->date,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'party', $this->party]);

        return $dataProvider;
    }
}
