<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Solder;

/**
 * SolderSearch represents the model behind the search form of `app\models\Solder`.
 */
class SolderSearch extends Solder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Name', 'Weapon', 'Color'], 'integer'],
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
        $query = Solder::find();

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
            'Name' => $this->Name,
            'Weapon' => $this->Weapon,
            'Color' => $this->Color,
        ]);

        return $dataProvider;
    }
}
