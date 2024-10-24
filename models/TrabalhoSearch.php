<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trabalho;

/**
 * TrabalhoSearch represents the model behind the search form of `app\models\Trabalho`.
 */
class TrabalhoSearch extends Trabalho
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'massa', 'altura'], 'integer'],
            [['agravidade'], 'number'],
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
        $query = Trabalho::find();

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
            'massa' => $this->massa,
            'agravidade' => $this->agravidade,
            'altura' => $this->altura,
        ]);

        return $dataProvider;
    }
}
