<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gastos;

/**
 * GastosSearch represents the model behind the search form about `app\models\Gastos`.
 */
class GastosSearch extends Gastos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'km', 'id_veiculo'], 'integer'],
            [['data'], 'safe'],
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
        $query = Gastos::find();

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
            'id' => $this->id,
            'data' => $this->data,
            'km' => $this->km,
            'id_veiculo' => $this->id_veiculo,
        ]);

        return $dataProvider;
    }
}
