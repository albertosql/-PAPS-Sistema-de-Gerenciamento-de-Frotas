<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Veiculo;

/**
 * VeiculoSearch represents the model behind the search form about `app\models\Veiculo`.
 */
class VeiculoSearch extends Veiculo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['renavam', 'num_patrimonio', 'potencia', 'id_modelo', 'id_cor', 'id_tipo_combustivel', 'ano_fabricacao', 'ano_modelo'], 'integer'],
            [['cidade', 'chassi', 'lotacao', 'status', 'observacao', 'adquirido_de', 'uf_atual', 'uf_anterior', 'placa_atual', 'placa_anterior'], 'safe'],
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
        $query = Veiculo::find();

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
            'renavam' => $this->renavam,
            'num_patrimonio' => $this->num_patrimonio,
            'potencia' => $this->potencia,
            'id_modelo' => $this->id_modelo,
            'id_cor' => $this->id_cor,
            'id_tipo_combustivel' => $this->id_tipo_combustivel,
            'ano_fabricacao' => $this->ano_fabricacao,
            'ano_modelo' => $this->ano_modelo,
        ]);

        $query->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'chassi', $this->chassi])
            ->andFilterWhere(['like', 'lotacao', $this->lotacao])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'observacao', $this->observacao])
            ->andFilterWhere(['like', 'adquirido_de', $this->adquirido_de])
            ->andFilterWhere(['like', 'uf_atual', $this->uf_atual])
            ->andFilterWhere(['like', 'uf_anterior', $this->uf_anterior])
            ->andFilterWhere(['like', 'placa_atual', $this->placa_atual])
            ->andFilterWhere(['like', 'placa_anterior', $this->placa_anterior]);

        return $dataProvider;
    }
}
